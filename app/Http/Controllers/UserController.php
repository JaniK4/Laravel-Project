<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu; // Ensure you have a Menu model for your menu items
use Illuminate\Support\Facades\Validator;



class UserController extends Controller
{
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'user_name' => 'required|string|max:255',
            'pass_word' => 'required|string|min:6',
        ]);

        // Retrieve the input values
        $usr = $request->input('user_name');
        $pwd = $request->input('pass_word');

        // Query the database for the user
        $user = DB::table('login')->where('username', $usr)->first();

        if ($user && $user->password === $pwd) {
            // Authenticated: Redirect to the dashboard
            return redirect('/dashboard');
        } else {
            return back()->with('error', 'Invalid username or password');
        }
        
    }


    public function showAddMenu()
    {
        return view('add-menu');  // Make sure this view exists
    }
    public function addmenu(Request $request)
    {
        if ($request->isMethod('post')) {
            // Get form inputs
            $category = $request->input('food-category');
            $name = $request->input('food-name');
            $des = $request->input('food-desc');
            $price = $request->input('food-price');

            // Handle the file upload
            if ($request->hasFile('food-image')) {
                $image = $request->file('food-image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('upload'), $imageName);

                // Insert data into the menu table
                DB::insert("INSERT INTO menu (`Category`, `FoodName`,`Image`, `Description`, `Price`) 
                            VALUES (?, ?, ?, ?, ?)", 
                            [$category, $name, $imageName, $des, $price]);

                return redirect()->back()->with('success', 'DATA Added Successfully');
            } else {
                return redirect()->back()->with('error', 'Error while uploading');
            }
        }
    }

    public function viewMenu()
    {
        // Fetch all menu items from the 'menu' table
        $menuItems = DB::table('menu')->get();

        // dd($menuItems);

        // Return the view with the menu items
        return view('view-menu', compact('menuItems'));
    }

    public function delete($id){
        // Attempt to delete the record from the 'menu' table
        $deleted = DB::table('menu')->where('id', $id)->delete();

        if ($deleted) {
            // Redirect to the menu view page with a success message
            return redirect()->route('view-menu')->with('success', 'Menu item deleted successfully.');
        } else {
            // If deletion fails, redirect with an error message
            return redirect()->route('view-menu')->with('error', 'Failed to delete the menu item.');
        }
    }
    

    public function showEdit($id){
        $menuItem= DB::table('menu')->where('id',$id)->first();
        return view('edit',compact('menuItem'));
    }

    // Handle the form submission and update the menu item
    public function edit(Request $request, $id){
        $request->validate([
            'food-category' => 'required|string',
            'food-name' => 'required|string',
            'food-image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'food-desc' => 'required|string',
            'food-price' => 'required|numeric',
        ]);

        // Retrieve the existing menu item
        $menuItem = DB::table('menu')->where('id', $id)->first();

        // Prepare the data for updating
        $data = [
            'Category' => $request->input('food-category'),
            'FoodName' => $request->input('food-name'),
            'Description' => $request->input('food-desc'),
            'Price' => $request->input('food-price'),
        ];

        // Handle the file upload if a new image is uploaded
        if ($request->hasFile('food-image')) {
            // Delete the old image if it exists in the upload folder
            if ($menuItem->Image && file_exists(public_path('upload/' . $menuItem->Image))) {
                unlink(public_path('upload/' . $menuItem->Image)); // Remove the old image
            }

            // Get the uploaded image
            $image = $request->file('food-image');
            $imageName = time() . '.' . $image->getClientOriginalExtension(); // Generate a unique image name
            $image->move(public_path('upload'), $imageName); // Move the image to the public/upload directory

            // Set the new image name
            $data['Image'] = $imageName;
        } else {
            // Keep the old image if no new file is uploaded
            $data['Image'] = $menuItem->Image;
        }

        // Update the menu item in the database
        DB::table('menu')->where('id', $id)->update($data);

        // Redirect with a success message
        return redirect()->route('view-menu')->with('success', 'Menu item updated successfully!');
    }



    
    public function showMenu()
    {
        // Fetch menu items directly from the `menu` table in the specified order
        $menuItems = DB::table('menu')
            ->orderByRaw("FIELD(Category, 'Starters', 'Main Course', 'Desserts', 'Beverages')")
            ->get();

        // Pass the menu items to the view
        return view('menu', compact('menuItems'));
    }

    public function submitContactForm(Request $request)
    {
        // Define validation rules
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'phone' => 'required|regex:/^[0-9]{10}$/',
            'email' => 'required|email',
            'message' => 'required|string|max:500',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        }
        // Process the data (e.g., save to database, send email, etc.)
        // You can also flash a success message to the session
        
    }
}
