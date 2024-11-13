<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/edit.css"> -->

    <link rel="stylesheet" href="{{ asset('CSS/dashboard.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/login.css') }}">

        <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="dashboard-container d-flex flex-column">
        @include('partials.dash-head')
        <div class="dashboard-content d-flex flex-grow-1">
            @include('partials.dash-sidebar')
   
            
            <main class="container-fluid add-content flex-grow-1 p-4 bg-light">
            <h3 class="text-center">Update Menu Item</h3>
                <form action="{{ route('edit', $menuItem->id) }}" method="POST" 
                    enctype="multipart/form-data" class="add-food">
                    @csrf
                    <label class="item">Category:</label>
                    <select name="food-category" class="form-control" required>
                        <option value="">Select a Category</option>
                        <option value="Starters" {{ $menuItem->Category == 'Starters' ? 'selected' : '' }}>Starters</option>
                        <option value="Starters" {{ $menuItem->Category == 'Main Course' ? 'selected' : '' }}>Main Course</option>
                        <option value="Starters" {{ $menuItem->Category == 'Desserts' ? 'selected' : '' }}>Desserts</option>
                        <option value="Starters" {{ $menuItem->Category == 'Beverages' ? 'selected' : '' }}>Beverages</option>
                    </select>
                    <br>
                    <label class="item">Food-Name:</label>
                    <input name="food-name" class="form-control "   type="text" 
                        value="{{ old('food-name', $menuItem->FoodName) }}" 
                        placeholder="Enter Foot Item Name" >
                    <br>
                    <label class="item ">Upload Food Item Image:</label>
                    <input name="food-image"  type="file"  >
                    <br> <br>
                    <label class="item">Description:</label>
                    <!-- <textarea type="type" name="food-desc"  class="form-control" 
                        value="{{ old('food-desc', $menuItem->Description) }}" 
                        placeholder="Enter Description" > </textarea> -->

                    <textarea name="food-desc" class="form-control" 
                        placeholder="Enter Description">{{ old('food-desc', $menuItem->Description) }}
                    </textarea>

                    <br>
                    <label class="item">Food Price:</label>
                    <input name="food-price"  class="form-control" type="text" 
                        value="{{ old('food-price', $menuItem->Price) }}" 
                        placeholder="Enter Foot Item Price">
                    <br>
                    <input type="submit" name="submit" value="Update" class="submit">
                </form>
            </main>
        </div>
    </div>


</body>
</html>
