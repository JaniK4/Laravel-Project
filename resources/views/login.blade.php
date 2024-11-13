<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saffron</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/login.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="about">
   
    @include('partials.navbar');
    
    @include('partials.header');
      
 
    <div class="container-fluid login">
        <div class="row">
            <div class="col-md-4 login-form">
                <form action="login" method="POST">
                @csrf
                    <h5>Login</h5>
                    <div class="form-group">
                        <label>Username: </label>
                        <input type="text" name="user_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password: </label>
                        <input type="password" name="pass_word" class="form-control">
                    </div>
                    <input type="submit" value="Login" class="btn btn-success" name="">
                </form>
            </div>
        </div>
    </div>


    @include('partials.footer')

    
  

    
</body>