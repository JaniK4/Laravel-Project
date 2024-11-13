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
      
    <div class="gal">
        <div class="container-fluid">
            <div class="gal_head">
                <h1>Saffron Gallery</h1>
                <p>Savor the legacy of authentic Indian flavors.</p>
            </div>

            <section class="portfolio_block">
                <div class=" gallery">
                    <div class="zoom img_box effect"><img src="images/dark1.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/home_dark.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/res1.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/res2.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/res3.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/res4.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/res9.webp" alt></div>
                    <div class="zoom img_box effect"><img src="images/res3.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/res5.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/res7.jpg" alt></div>
                    <div class="zoom img_box effect"><img src="images/res8.jpg" alt></div>
                </div>
            </section>

        </div>
    </div>

    

    @include('partials.footer')

    
  

    
</body>