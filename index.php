<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Game Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles/style.css">
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css.">
    <script src="main.js"></script>
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>

  
    
</head>
<body>
    
    <div id="top">      <!-- Top Begin -->

        <div class="container">     <!-- Container Begin -->
        
        <div class="col-md-6 offer">        <!--col-md-6 offer Begin -->
        
            <a href="#" class="btn btn-succes btn-sm">Welcome</a>
            <a href="checkout.php">4 Items In Your Cart | Total Price: $300</a>
        
        
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

    <img src="images/ecom-store-logo.jpg" alt="Game Store Logo" class="hidden-xs">
    <img src="images/ecom-store-logo-mobile.jpg" alt="Game Store Logo Mobile" class="visible-xs">

    <a href="index.php" class="navbar-brand home">      <!-- navbar-brand home Begin -->
    

    
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

    <li class="active"> 
        <a href="index.php">Home</a>
    </li>
    <li>
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

        <span>4 Items In Your Cart</span>

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

</body>
</html>





