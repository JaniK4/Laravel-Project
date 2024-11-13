<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dashboard.css">
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
            <h3 class="text-center">Add a menu item</h3>
                <form action="{{ url('/addmenu') }}" method="POST" enctype="multipart/form-data" class="add-food">
                    @csrf
                    <label class="item">Category:</label>
                    <select name="food-category" class="form-control" required>
                        <option value="">Select a Category</option>
                        <option value="Starters">Starters</option>
                        <option value="Main Course">Main Course</option>
                        <option value="Desserts">Desserts</option>
                        <option value="Beverages">Beverages</option>
                    </select>
                    <br>
                    <label class="item">Food-Name:</label>
                    <input name="food-name" class="form-control "   type="text" value="" placeholder="Enter Foot Item Name" required>
                    <br>
                    <label class="item ">Upload Food Item Image:</label>
                    <input name="food-image"  type="file" required >
                    <br> <br>
                    <label class="item">Description:</label>
                    <textarea type="type" name="food-desc"  class="form-control" value="" placeholder="Enter Description" required> </textarea>
                    <br>
                    <label class="item">Food Price:</label>
                    <input name="food-price"  class="form-control" type="text" value="" placeholder="Enter Foot Item Price" required>
                    <br>
                    <input type="submit" name="submit" value="Submit" class="submit">
                </form>
            </main>
        </div>
    </div>


</body>
</html>
