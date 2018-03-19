<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>makolah</title>
    <link href="images/home/favicon.ico" rel="icon" type="image/x-icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet/scss" type="text/css" href="burst.css">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->


<style type="text/css">


/* Full-width input fields */
input[type=text], input[type=password] {
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
.btn-defaul {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: %;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {float:left;width:20%}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width:60%; /* Full width */
    height: 60%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width:70%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    color: #000;
    font-size: 40px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 10%;
    }
}





</style>

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><h3>EXCITING NEW PARTNERS</h3></a></li>
                                <li><a href="#"><img src="images/home/partner1.png" alt="" /></a></li>
                                <li><a href="#"><img src="images/home/partner2.png" alt="" /></a></li>
                                <li><a href="#"><img src="images/home/partner3.png" alt="" /></a></li>
                                <li><a href="#"><img src="images/home/partner4.png" alt="" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--<div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
            </div>
        </div><!--/header_top-->
        
        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <a href="index.html"><img src="images/home/logo2.png" alt="" /></a>
                        </div>
                        <div class="btn-group pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                    SELECT COUNTRY
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="ghana.html">Ghana</a></li>
                                    <li><a href="rwanda.html">Rwanda</a></li>
                                    <li><a href="#">Nigeria</a></li>
                                    <li><a href="#">South Africa</a></li>
                                    <li><a href="#">Kenya</a></li>
                                    <li><a href="#">Uganda</a></li>
                                </ul>
                            </div>
                            
                            
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="login.html"><i class="fa fa-user"></i> Account</a></li>
                                <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                                <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                                <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                                <li><a href="..login/index.php"><i class="fa fa-lock"></i> Login</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->
    
        
    </header><!--/header-->
    
    <div class="header-bottom"><!--header-bottom-->

    
            <div class="container">
                

                
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li class="dropdown"><a href="#">Shops<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Food & Beverage</a></li>
                                        <li><a href="product-details.html">Computers/Phones & Accessaries</a></li> 
                                        <li><a href="checkout.html">Books & Arts</a></li> 
                                        <li><a href="cart.html">Gents/Ladies/Kids & Sports clothing</a></li> 
                                        <li><a href="login.html">Health & Living</a></li> 
                                        <li><a href="login.html">Household & Office furniture</a></li> 
                                        <li><a href="login.html">Kitchen </a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">Services<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Online Help</a></li>
                                        <li><a href="product-details.html">Contact US</a></li> 
                                        <li><a href="checkout.html">Orer Status</a></li> 
                                        <li><a href="cart.html">Change Location</a></li> 
                                        <li><a href="login.html">FAQ's</a></li> 
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">About Us<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Company information</a></li>
                                        <li><a href="blog-single.html">Careers</a></li>
                                        <li><a href="blog.html">Office location</a></li>
                                        <li><a href="blog-single.html">Affiliate companies</a></li>
                                        <li><a href="blog-single.html">Copyright</a></li>
                                    </ul>
                                </li> 
                                <li><a href="404.html">Get space</a></li> 
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>
                        
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>ma</span>kolah</h1>
                                    <h2>Unlimited Virtual Space </h2>
                                    <p>makolah offers you unlimited free space to market and sell your products online  </p>
                                    <button type="button" class="btn btn-default get" onclick="document.getElementById('id01').style.display='block'">Get your space now</button>





                                    







                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/ban5 copy.png" class="girl img-responsive" alt=""/>
                                    <img src="images/home/offer.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>ma</span>kolah</h1>
                                    <h2>Access Your Favourite Brand Stores on a single platform </h2>
                                    <p>With Vi-Space all your favourite brands are made available in a single virtiual space </p>
                                    <a href="login.html"><button type="button" class="btn btn-default get">Get your space now</button></a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/ban2.jpg" class="girl img-responsive" alt="" />
                                    <img src="images/home/offer.png"  class="pricing" alt="" />
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>ma</span>kolah</h1>
                                    <h2>Timely Delivery</h2>
                                    <p> </p>
                                    <a href="login.html"><button type="button" class="btn btn-default get">Get your space now</button></a>
                                </div>
                                <div class="col-sm-6">
                                    <img src="images/home/ban4.png" class="girl img-responsive" alt="" />
                                    <img src="images/home/offer.png" class="pricing" alt="" />
                                </div>
                            </div>
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>

            <!--<div class="col-sm-9" style="padding-bottom:15px;"><img src="images/home/on1.png"><img src="images/home/on2.png" style="padding-left:5px;"></div>-->
        </div>
    </section><!--/slider-->

    

    

        <div class="container text-center">
        <!--<div class="logo-404">
            <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
        </div>-->
        <div class="content-404" style="padding-bottom:30px;">
            <!--<img src="images/404/404.png" class="img-responsive" alt="" />-->
            <h1><b>Welcome to makolah !!</b> Africa's first online shopping mall </h1>
            <p>Hurry and get your space..With over 1000 shops accross africa available one platform shopping from your location just got better </p>
            <h2><a href="shop.php">Enter Mall</a></h2>
        </div>
    </div>




    <footer id="footer"><!--Footer-->
        <div class="footer-top">
            
        </div>
        
        
        
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2017 makolah Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="http://www.sbaayel.com">Baayeltech Systems</a></span></p>
                </div>
            </div>
        </div>
        
    </footer><!--/Footer-->
    

  
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>


    <script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '{your-app-id}',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  // Now that we've initialized the JavaScript SDK, we call 
  // FB.getLoginStatus().  This function gets the state of the
  // person visiting this page and can return one of three states to
  // the callback you provide.  They can be:
  //
  // 1. Logged into your app ('connected')
  // 2. Logged into Facebook, but not your app ('not_authorized')
  // 3. Not logged into Facebook and can't tell if they are logged into
  //    your app or not.
  //
  // These three cases are handled in the callback function.

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }



  // Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<!--
  Below we include the Login Button social plugin. This button uses
  the JavaScript SDK to present a graphical Login button that triggers
  the FB.login() function when clicked.
-->


</body>
</html>