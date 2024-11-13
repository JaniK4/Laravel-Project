<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saffron</title>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/login.css">
    <link rel="stylesheet" href="css/testimonialCSS.css">
    
    <!-- Bootstrap CSS (only Bootstrap 5.3) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font and Font Awesome -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Bootstrap Bundle JavaScript (only Bootstrap 5.3) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- Include Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body class="index">
    @include('partials.navbar') <!-- Include the navbar -->

    <div id="caro" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators/dots -->
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#caro" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#caro" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#caro" data-bs-slide-to="2"></button>
        </div>
        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
          <div class="carousel-item active img-fluid container_img-center" data-mdb-interval="2000">
            <img class="d-block w-100"  src="images/pexels-elevate-1267320.jpg" alt="" class="d-block" style="width:100%; height:620px"  >
            <div class="centered">
                <h1 style="font-family: 'Ubuntu', sans-serif; font-weight: bolder; ">
                    Blue Sea
                </h1>
                <p style="font-weight:bolder">Savor the legacy of authentic Indian flavors.</p>
            </div>
        </div>
          <div class="carousel-item img-fluid container_img-center" data-mdb-interval="2000">
            <img class="d-block w-100" src="images/pexels-photo-1269025.webp" alt="" class="d-block" style="width:100%; height:620px">
            <div class="centered">
                <h1 style="font-family: 'Ubuntu', sans-serif; font-weight: bolder;">
                    Blue Sea
                </h1>
                <p style="font-weight:bolder">Savor the legacy of authentic Indian flavors.</p>
            </div>
        </div>
          <div class="carousel-item img-fluid container_img-center" data-mdb-interval="2000">
            <img class="d-block w-100" src="images/pexels-photo-3851423.webp" alt="" class="d-block" style="width:100%; height:620px">
            <div class="centered">
                <h1 style="font-family: 'Ubuntu', sans-serif; font-weight: bolder; ">
                    Blue Sea
                </h1>
                <p style="font-weight:bolder">Savor the legacy of authentic Indian flavors.</p>
            </div>
        </div>
        </div>
        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#caro" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#caro" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
    </div>
      
    <div id="menu_card" >
        <div class="container" >
          <h1 class="mc_h" style="text-align: center;">Menu</h1>
          <br><br>
          <div id="men_c" class="row">
            <div class="col-lg-3">
                <div class="card">
                  <img src="images/home_menu1.jpeg" class="card-img-top mx-auto img-fluid " style="height: 190px;" >
                  <div class="card-body">
                      <center>
                          <h5 class="card-title">Traditional Meals</h5>
                      </center>
                      <!-- <br> -->
                      <!-- <p class="card-text " style="text-align: center;">
                          We provide Authentic traditional meals.
                      </p> -->
                  </div>
                  <center>
                    <a href="menu.html" class="men_btn btn btn-primary">View Menu</a>
                  </center>
                  <br>
                </div>
                <br>
            </div>    
            <div class="col-lg-3">
                <div class="card" >
                    <img src="images/home_menu2.webp" class="card-img-top mx-auto img-fluid " style="height: 190px;">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Fusion Food</h5>
                        </center>
                        <!-- <br> -->
                        <!-- <p class="card-text " style="text-align: center;">
                            Modern Fusion food is available.
                        </p> -->
                    </div>
                    <center>
                        <a href="menu.html" class="men_btn btn btn-primary">View Menu</a>
                    </center>
                    <br>
                </div>
                <br>
            </div>
            <div class="col-lg-3">
              <div class="card">
                  <img src="images/home_menu3.webp" class="card-img-top mx-auto img-fluid " style="height: 190px;">
                  <div class="card-body">
                    <center>
                        <h5 class="card-title">Snacks</h5>
                    </center>
                    <!-- <br> -->
                    <!-- <p class="card-text " style="text-align: center;">
                        Indian snacks or street food.
                    </p> -->
                </div>
                <center>
                    <a href="menu.html" class="men_btn btn btn-primary">View Menu</a>
                </center>
                <br>
              </div>
              <br>
            </div>
            <div class="col-lg-3">
                <div class="card" >
                    <img src="images/home_menu2.webp" class="card-img-top mx-auto img-fluid " style="height: 190px;">
                    <div class="card-body">
                        <center>
                            <h5 class="card-title">Beverages</h5>
                        </center>
                        <!-- <br> -->
                        <!-- <p class="card-text " style="text-align: center;">
                            Modern Fusion food is available.
                        </p> -->
                    </div>
                    <center>
                        <a href="menu.html" class="men_btn btn btn-primary">View Menu</a>
                    </center>
                    <br>
                </div>
                <br>
            </div>    
          </div>
        </div>
    </div>  

    <div class="in_about">
        <div class="container-fluid">
            <div class="row">
                <div class=" about_desc col-md-5">
                    <h1 class="in_ah">About Us</h1>
                    <p class="in_ap "> At Blue Sea, we've been serving up authentic Indian flavors with  modern twist 
                        for over two decades. Our journey began in Kozhikode, where we've delighted patrons with our 
                        passion for preserving culinary traditions while embracing innovation. Our menu is a celebration 
                        of India's diverse palate, from the fiery south to the aromatic north. We're committed to using 
                        the freshest ingredients to create dishes that are not only delicious but also a true reflection 
                        of our culinary heritage. Whether you're a seasoned foodie or simply looking for a memorable 
                        dining experience, Blue Sea promises to tantalize your taste buds and leave you craving for more.
                        Today, Blue Sea stands as a testament to our unwavering commitment to delivering exceptional 
                        dining experiences that tantalize the senses and leave a lasting impression.</p>
                </div>
                <div class="col-md-5">
                    <div class="zoom">
                        <img class="in_aimg" src="images/pexels-photo-8963467.jpeg" alt="">
                    </div>
                </div>
        </div>
      </div>
      </div>
    
    @include('partials.facilities');


   

    <section class="testimonial text-center">
        <div class="container">

            <div class="heading white-heading">
                Testimonial
            </div>
            <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">
             
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="testimonial4_slide">
                            <img src="./images/testimonial-1.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 1</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="./images/testimonial-2.jpg" class="img-circle img-responsive" /><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 2</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="./images/testimonial-3.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 3</h4>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial4_slide">
                            <img src="./images/testimonial-4.jpg" class="img-circle img-responsive" />
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                            <h4>Client 4</h4>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>



    @include('partials.footer') <!-- Include the navbar -->

    


      
      

</body>
</html>