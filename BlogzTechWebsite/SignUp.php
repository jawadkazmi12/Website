<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet"  a href="css/bootstrap.css">
    <link rel="stylesheet"  a href="css/fonts.css">
    <link rel="stylesheet"  a href="css/mystyle.css">
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrapjquery.js"></script>
    <script src="js/proper.js"></script>
<style>
    body{
        background-color: #d1ccc0;
    }
    
</style>

<style type='text/css'>
    .fieldset{
      border: 8px solid grey;
      padding: 10px;
    }
</style>

    <title>Tecknical.tech </title>
    <link rel="icon" type="image/png" href="img/WEBLOGO.png" >

</head>
<body>

    <!--Navigation--->
    <div id="List">
        <header id="Header">
            <nav class="navbar navbar-expand-md navbar-light py-2 ">
                <div class="container-fluid ">
                    <button class="navbar-toggler bg-white" data-toggle="collapse" data-target="#Navbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="Home_Page.html"><img src="img/LogoWeb.png" width="105" height="70"></a>

                    <div class="collapse navbar-collapse" id="Navbar" >
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item mr-3"><a href="Home_Page.html"><strong>HOME</strong></a></li>
                            <li class="nav-item mr-3"><a href="Home_Page.html"><strong>BLOG</strong></a></li>
                            <li class="nav-item mr-3"><a href="AboutUs.html"><strong>ABOUT US</strong></a></li>
                            <li class="nav-item"><a href="ContactUs.html"><strong>CONTACT US</strong></a></li>

                            <li class="nav-item ml-5"><a href="Login.html"><strong>Login</strong></a></li>
                        </ul>
                        <a href="Login.html"><img src="img/user1.jpg" width="40" height="40" class="rounded-circle ml-1"></a>
                    </div>

                </div>
            </nav>
        </header>
    </div>

<!--Form Section-->
<div id="SignUpform" class="mt-3">
    <div id="Bk1">
        <div >
            <h6 class="text-center ml-auto mr-auto font-weight-bold py-2">SIGN UP HERE</h6>
        </div>
    </div>     
    <div class="container">
        <div class="row">
            <div class="col-lg-12 ml-auto mr-auto mb-3 justify-content-center" style="text-align:center">
                <fieldset class="bg-dark w-50 ml-auto mr-auto fieldset">
                    <form action="SignUp.php" method="POST">
                        <label class="text-white">Username:</label>
                        <input type="text" name="username" placeholder="Username" required class="form-control w-50 ml-auto mr-auto">
                        <br>
                        <label class="text-white">Email:</label>
                        <input type="email" name="email" placeholder="Email" required class="form-control w-50 ml-auto mr-auto">
                        <br>
                        <label class="text-white">Password:</label>
                        <input type="Password" name="password" placeholder="Password" required class="form-control w-50 ml-auto mr-auto">
                        <br>
                        <label class="text-white">Conform Password:</label>
                        <input type="Password" name="password2" placeholder="Conform Password" required class="form-control w-50 ml-auto mr-auto">
                        <br>
                        <button type="submit" name ="SignUp_btn" class="btn btn-primary mb-3 form-control w-50" >SignUp</button>
                        <br>
                        
                    </form>
                    <p class="text-muted">Already have an Account? <a href="Login.html" class="text-white">Click Here</a></p>
                    

                </fieldset>   
                            </div>
                            
        </div>
        
    </div>
</div>    



<!--Footer-->

<div id="footer">
    <div class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-lg-4" >
                <a href="Home_Page.html"><img src="img/LogoWeb.png" class="mt-3" width="290px" height="200px"></a>

            </div>

            <div class="col-lg-3">
                    <h3 class="mt-3 mb-3 font-weight-bold">Follow Us</h3>
                    <hr class="bg-white">
                    <a><img src="img/facebook.png" width="60px" height="60px" class="mr-2"></a>
                    <a><img src="img/insta1.png" width="60px" height="60px" class="mr-2"></a>
                    <a><img src="img/twitter.png" width="60px" height="55px" class="mr-2"></a>
            </div>

            <div class="col-lg-3">
                <h3 class="mt-3 mb-3 font-weight-bold">About Us</h3>
                <hr class="bg-white">
                <a href="AboutUs.html">About Us</a>
                <br>
                <a href="ContactUs.html">Contact Us</a>
                <br>
                <a href="#">Privacy Policy</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 mt-3">
                    <p class="text-capitalize text-muted">&#169 Copyrights 2019. All rights reserved.</p>
            </div>
        </div>
    </div>
</div>




</body>
</html>