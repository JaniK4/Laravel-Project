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
      
    <section class="about_history section_gap">
        <div class="container-fluid">
            <div id="row" class="row">
                
                <div class="col-md-5 d-flex align-items-center">
                    <div class="about_content">
                        <h2 class="title title_color">About Us <br> And Our History</h2>
                        <p class="text-justify">
                            Saffron has been a beloved culinary institution in Kozhikode for over two 
                            decades, captivating taste buds with a harmonious blend of tradition and innovation.
                            Our journey commenced with a fervent desire to showcase the vibrant tapestry of Indian
                            flavors, from the fiery spices of the south to the delicate nuances of the north. Over 
                            the years, we've evolved, incorporating international influences to create a unique 
                            fusion cuisine that resonates with modern palates while honoring our culinary heritage. 
                            Today, Saffron stands as a testament to our unwavering commitment to delivering 
                            exceptional dining experiences that tantalize the senses and leave a lasting impression.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 ">
                    <img class="img" src="images/aboyt_res.jpg" alt="img">
                </div>
            </div>
        </div>
    </section>

    @include('partials.facilities');

    @include('partials.footer')

    
  

    
</body>