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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body class="about">
   
    @include('partials.navbar');
    
    @include('partials.header');
      

    <div class="contact">
        <div class="container-fluid">
            <div class=" responsive-map-container ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31305.854594000077!2d75.76344741083982!3d11.244349499999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba65992cc86d743%3A0x2c1b85326f1e743a!2sSalkara%20Restaurant!5e0!3m2!1sen!2sin!4v1723529921573!5m2!1sen!2sin" width="1000" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="row">
                <div id="con_info" class="d-flex justify-content-center  col-xs-12 col-md-6 col-lg-6">
                    <ul class="con_main">
                        <br>
                        <li><h5 class="con_h">Address</h5></li>
                        <li class="address">Restaurant Saffron
                            45/B, Mahatma Gandhi Road
                            Corner of Tali Road and Mahatma Gandhi Road
                            Near Kozhikode Post Office
                            Opposite the New Bus Stand
                            Kozhikode City,
                            Kerala State, 673001
                            India
                       </li> <br><br>
                       <li><h5 class="con_h">+91 9496136916</h5></li> 
                       <li style="font-weight: bold;">+91 9496136933</li>  <br><br>
                       <li><h5 class="con_h">contact@saffronrestaurant.com</h5></li>
                       <li style="font-weight: bold;">info@saffronrestaurant.com</li>
                       <li style="font-weight: bold;">reservations@saffronrestaurant.com</li>
                    </ul>
                </div>
                <div id="forms" class=" d-flex justify-content-center col-xs-12 col-md-6 col-lg-6">
                    <form action="{{ route('contact.submit') }}" method="POST" name="registration" onsubmit="return formValidation();">
                        @csrf

                        <div class="form-floating mb-3 mt-3">
                            <input type="text" class="form-control form-outline" id="name" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                            <label for="name">Name</label>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="tel" class="form-control" id="phone" placeholder="Enter Phone No" name="phone" value="{{ old('phone') }}">
                            <label for="phone">Phone No</label>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" value="{{ old('email') }}">
                            <label for="email">Email</label>
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-floating mb-3 mt-3">
                            <textarea id="gfg" name="message" class="form-control" style="height: 200px;" placeholder="Your Message">{{ old('message') }}</textarea>
                            <label for="gfg">Your Message</label>
                            @error('message')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="sub-btn form-floating mb-3 mt-3">
                            <button type="submit" class="btn btn-primary " style="width: max-content;">Submit</button>
                        </div>
                    </form>
                </div> 
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
            </div> 
        </div>
    </div>


    @include('partials.footer')

    
  

    
</body>