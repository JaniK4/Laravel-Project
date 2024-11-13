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
            <main class="main-content flex-grow-1 p-4 bg-light">
                <h2>Overview</h2>
                <p>Welcome to your dashboard! Here you can manage your application data.</p>
                <!-- Add more content here, like stats or graphs -->
            </main>
        </div>
    </div>


</body>
</html>
