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
      

    <div class="container mt-5">
        @php
            $categories = ['Starters', 'Main Course', 'Desserts', 'Beverages'];
        @endphp

        @foreach ($categories as $category)
            @php
                // Filter items by category
                $categoryItems = $menuItems->where('Category', $category);
            @endphp
            
            @if ($categoryItems->isNotEmpty())
                <section id="{{ strtolower(str_replace(' ', '-', $category)) }}" class="menu-section">
                    <h2 class="foodHead">{{ $category }}</h2>
                    <div class="row">
                        @foreach ($categoryItems as $item)
                            <div class="col-md-4">
                                <div id="menuCard" class="card mb-4">
                                    <div id="menucard-body" class="card-body">
                                        <h5 id="menucard-title" class="card-title">{{ $item->FoodName }}</h5>
                                        <div class="zoom img_box effect">
                                            <img class="foodImage card-img-top img-fluid rounded-circle" 
                                                 src="{{ asset('upload/' . $item->Image) }}" 
                                                 alt="{{ $item->Image }}">
                                        </div>
                                        <p class="card-text">{{ $item->Description }}</p>
                                        <p class="card-price">Rs {{ $item->Price }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
            @endif
        @endforeach
    </div>
    

    @include('partials.footer')

    
  

    
</body>