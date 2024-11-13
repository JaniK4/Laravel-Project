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


            <div class="container-fluid view">
                <h2 class="text-center view-head">Uploaded Menu Items</h2>
                <div class="table-container mt-4">
                    <table class="table tab table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <!-- <th>ID</th> -->
                                <th>Food Item</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($menuItems as $item)
                                <tr>
                                    <!-- <td>{{ $item->id }}</td> -->
                                    <td>{{ $item->FoodName }}</td>
                                    <td>
                                        <img src="{{ asset('upload/' . $item->Image) }}" width="100" height="100" alt="Food Image" class="img-fluid">
                                    </td>
                                    <td>{{ $item->Description }}</td>
                                    <td>{{ $item->Price }}</td>
                                    <!-- Success/Error Messages -->
                                    @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @php
                                            session()->forget('success');
                                        @endphp
                                    @endif

                                    @if(session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @php
                                            session()->forget('error');
                                        @endphp
                                    @endif
                                    <td>
                                        <a href="{{ url('edit/'.$item->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                    </td>




                                    <!-- Success/Error Messages -->
                                    @if(session('success'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            {{ session('success') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @php
                                            session()->forget('success');
                                        @endphp
                                    @endif

                                    @if(session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            {{ session('error') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        @php
                                            session()->forget('error');
                                        @endphp
                                    @endif

                                    <!-- Delete button -->
                                    <td>
                                        <a href="{{ url('delete/'.$item->id) }}" class="btn btn-sm btn-danger" 
                                            onclick="return confirm('Are you sure you want to delete this item?')">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">No menu items found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>


</body>
</html>
