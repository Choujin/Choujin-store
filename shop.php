<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Choujin's Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css.">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <script src="main.js"></script>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

  
    
</head>
<body>
    
    <div id="top">      <!-- Top Begin -->

        <div class="container">     <!-- Container Begin -->
        
        <div class="col-md-6 offer">        <!--col-md-6 offer Begin -->
        
            <a href="#" class="btn btn-succes btn-sm">Welcome</a>
            <a href="checkout.php">0 Items In Your Cart | Total Price: $</a>
        
        
        </div>      <!--col-md-6 offer Finish -->

        <div class="col-md6">       <!--col-md-6 offer Begin -->

        <ul class="menu">        <!--menu Begin -->
        
            <li>
                <a href="customer_register.php">Register</a>
            </li>
            <li>
                <a href="checkout.php">My Account</a>
            </li>
            <li>
                <a href="cart.php">Go To Cart</a>
            </li>
            <li>
                <a href="checkout.php">Login</a>
            </li>
        
        </ul>       <!--menu Finish -->
        
        
        </div>      <!--col-md-6 offer Finish -->

        </div>      <!-- Container Finish -->

    </div>      <!-- Top Finish -->

    <div id="navbar" class="navbar navbar-default">     <!-- navbar navbar-default Begin -->
    
    <div class="container">      <!-- container Begin -->
    
    <div class="navbar-header">     <!-- navbar-header Begin -->

    

    <a href="index.php" class="navbar-brand home">      <!-- navbar-brand home Begin -->
    
    <img src="images/ecom-store-logo.jpg" alt="Game Store Logo" class="hidden-xs">
    <img src="images/ecom-store-logo-mobile.jpg" alt="Game Store Logo Mobile" class="visible-xs">
    
    </a>        <!-- navbar-brand home Finish -->

    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

    

<span class="sr-only">Toggle Navigation</span>

<i class="fa fa-align-justify"></i>

</button>

<button class="navbar-toggle" data-toggle="collapse" data-target="#search">

<span class="sr-only">Toggle Search</span>

<i class="fa fa-search"></i>

</button>
    
    </div>      <!-- navbar-header Finish -->
   
    <div class="navbar-collapse collapse" id="navigation">      <!-- "navbar-collapse collapse Begin -->

    <div class="padding-nav">       <!-- "padding-nav Begin -->

    <ul class="nav navbar-nav left">        <!-- "nav navbar-nav left Begin -->

    <li> 
        <a href="index.php">Home</a>
    </li>
    <li class="active">
        <a href="shop.php">Shop</a>
    </li>
    <li>
        <a href="checkout.php">My Account</a>
    </li>
    <li>
        <a href="cart.php">Shopping Cart</a>
    </li>
    <li>
        <a href="contact.php">Contact Us</a>
    </li>

    </ul>       <!-- "nav navbar-nav left Finish -->

    </div>      <!-- "padding-nav Finish -->

        <a href="cart.php" class="btn navbar-btn btn-primary right">        <!-- btn navbar-btn btn-primary right Begin -->

        <i class="fas fa-shopping-cart"></i>

        <span>0 Items In Your Cart</span>

        </a>        <!-- btn navbar-btn btn-primary right Finish -->

        <div class="navbar-collapse collapse right">        <!-- navbar-collapse collapse Begin -->

        <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">      <!-- btn btn-primary navbar-btn Begin -->

        <span class="sr-only">Toggle Search</span>

        <i class="fas fa-search"></i>

        </button>        <!-- btn btn-primary navbar-btn Finish -->

        </div>      <!-- navbar-collapse collapse right Finish -->

        <div class="collapse clearfix" id="search">     <!-- collapse clearfix Begin -->

        <form method="get" action="results.php" class="navbar-form"></form>     <!-- navbar-form Begin -->

        <div class="input-group">        <!-- input-group Begin -->

        <input type="text" class="form-control" placeholder="Search" name="user_query" required>

        <span class="input-group-btn">      <!-- input-group-btn Begin  -->

        <button type="submit" name="search" value="Search" class="btn btn-primary">     <!-- btn btn-primary Begin -->

        <i class="fas fa-search"></i>

        </button>       <!-- btn btn-primary Finish -->

        </span>     <!-- input-group-btn Finish -->

        </div>       <!-- input-group Finish -->

        </div>       <!-- navbar-form Finish -->

    </div>       <!-- "navbar-collapse collapse Finish -->

    </div>      <!-- container Finish -->
    
    </div>      <!-- navbar navbar-default Finish -->

    <div id="content">       <!-- #content Begin -->
        <div class="container">      <!-- container Begin -->
            <div class="col-md-12">     <!-- col-md-12 Begin -->

                <ul class="breadcrumb">     <!-- breadcrumb Begin -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Shop
                    </li>
                </ul>       <!-- breadcrumb Finish -->

            </div>      <!-- col-md-12 Finish -->

                <div class="col-md-3">      <!-- col-md-3 Begin -->

<?php

    include("includes/sidebar.php");

?>

                </div>      <!-- col-md-3 Finish -->

                <div class="col-md-9">       <!-- col-md-9 Begin -->
                    <div class="box">       <!-- box Begin -->
                        <h1>Shop</h1>
                        <p>
                            Welcome to our online shop
                        </p>
                    </div>       <!-- box Finish -->

                    <div class="row">        <!-- row Begin -->
                        <div class="col-md-4 col-sm-6 center-responsive">        <!-- col-md-4 col-sm-6 center-responsive Begin -->

                        <div class="product">       <!-- product Begin -->

<a href="details.php">

<img class="img-responsive" src="admin_area/product_images/product-1.jpg" alt="Product 1">

</a>

<div class="text">      <!-- text Begin -->

<h3>
    <a href="details.php">
        Black Knight T-Shirt
    </a>
</h3>

    <p class="price">$30</p>

    <p class="button">

        <a href="details.php" class="btn btn-default">View Details</a>

        <a href="details.php" class="btn btn-primary">

        <i class="fas fa-shopping-cart">
            Add To Cart
        </i>

        </a>

    </p>

</div>      <!-- text Finish -->

</div>       <!-- product Finish -->

</div>      <!-- col-sm-4 col-sm-6 single Finish -->

<div class="col-sm-4 col-sm-6 single">      <!-- col-sm-4 col-sm-6 single Begin -->

<div class="product">       <!-- product Begin -->

<a href="details.php">

<img class="img-responsive" src="admin_area/product_images/product-2.jpg" alt="Product 2">

</a>

<div class="text">      <!-- text Begin -->

<h3>
    <a href="details.php">
        Monkey D.Luffy Wanted T-Shirt
    </a>
</h3>

    <p class="price">$30</p>

    <p class="button">

        <a href="details.php" class="btn btn-default">View Details</a>

        <a href="details.php" class="btn btn-primary">

        <i class="fas fa-shopping-cart">
            Add To Cart
        </i>

        </a>

    </p>

</div>      <!-- text Finish -->

</div>       <!-- product Finish -->

</div>      <!-- col-sm-4 col-sm-6 single Finish -->

<div class="col-sm-4 col-sm-6 single">      <!-- col-sm-4 col-sm-6 single Begin -->

<div class="product">       <!-- product Begin -->

<a href="details.php">

<img class="img-responsive" src="admin_area/product_images/product-3.jpg" alt="Product 3">

</a>

<div class="text">      <!-- text Begin -->

<h3>
    <a href="details.php">
        Anime Action Figure Vegeta
    </a>
</h3>

    <p class="price">$45</p>

    <p class="button">

        <a href="details.php" class="btn btn-default">View Details</a>

        <a href="details.php" class="btn btn-primary">

        <i class="fas fa-shopping-cart">
            Add To Cart
        </i>

        </a>

    </p>

</div>      <!-- text Finish -->

</div>       <!-- product Finish -->

</div>      <!-- col-sm-4 col-sm-6 single Finish -->

<div class="col-sm-4 col-sm-6 single">      <!-- col-sm-4 col-sm-6 single Begin -->

<div class="product">       <!-- product Begin -->

<a href="details.php">

<img class="img-responsive" src="admin_area/product_images/product-4.jpg" alt="Product 4">

</a>

<div class="text">      <!-- text Begin -->

<h3>
    <a href="details.php">
      Fortnite Llama Figure 3D Night Light  
    </a>
</h3>

    <p class="price">$20</p>

    <p class="button">

        <a href="details.php" class="btn btn-default">View Details</a>

        <a href="details.php" class="btn btn-primary">

        <i class="fas fa-shopping-cart">
            Add To Cart
        </i>

        </a>

    </p>

</div>      <!-- text Finish -->

</div>       <!-- product Finish -->

</div>      <!-- col-sm-4 col-sm-6 single Finish -->

<div class="col-sm-4 col-sm-6 single">      <!-- col-sm-4 col-sm-6 single Begin -->

<div class="product">       <!-- product Begin -->

<a href="details.php">

<img class="img-responsive" src="admin_area/product_images/product-5.jpg" alt="Product 5">

</a>

<div class="text">      <!-- text Begin -->

<h3>
    <a href="details.php">
      Fortnite Nerf AR-L Blaster
    </a>
</h3>

    <p class="price">$49,99</p>

    <p class="button">

        <a href="details.php" class="btn btn-default">View Details</a>

        <a href="details.php" class="btn btn-primary">

        <i class="fas fa-shopping-cart">
            Add To Cart
        </i>

        </a>

    </p>

</div>      <!-- text Finish -->

</div>       <!-- product Finish -->

</div>      <!-- col-sm-4 col-sm-6 single Finish -->

<div class="col-sm-4 col-sm-6 single">      <!-- col-sm-4 col-sm-6 single Begin -->

<div class="product">       <!-- product Begin -->

<a href="details.php">

<img class="img-responsive" src="admin_area/product_images/product-6.jpg" alt="Product 6">

</a>

<div class="text">      <!-- text Begin -->

<h3>
    <a href="details.php">
        One Piece Quotes Giant Wall Art
    </a>
</h3>

    <p class="price">$26,99</p>

    <p class="button">

        <a href="details.php" class="btn btn-default">View Details</a>

        <a href="details.php" class="btn btn-primary">

        <i class="fas fa-shopping-cart">
            Add To Cart
        </i>

        </a>

    </p>

</div>      <!-- text Finish -->

</div>       <!-- product Finish -->

                        </div>       <!-- col-md-4 col-sm-6 center-responsive Finish -->
                    </div>       <!-- row Finish -->

                    <center>
                        <ul class="pagination">
                            <li><a href="#">First Page</a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Last Page</a></li>
                        </ul>
                    </center>

                </div>       <!-- col-md-9 Finish -->

        </div>      <!-- container Finish -->
    </div>      <!-- #content Finish -->

</body>
</html>

<?php

    include("includes/footer.php");

?>