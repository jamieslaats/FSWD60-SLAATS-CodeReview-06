<!DOCTYPE html5>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Happy Feet Travel Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://getbootstrap.com/docs/3.3/examples/carousel/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="css/homepage.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<!---BEGINNING OF BODY SECTION --->

<body>
    <div class="container">
        <header id="header">
            <div class="header">
                <img class="center-block" src="IMG/happyfeetlogo.png">
            </div>
        </header><!-- /header -->
        <nav class="navbar navcolour navbar-justify">
            <ul class="nav nav-pills nav-justified" id="navstyling">
                <li class="nav-item"><a href="index.html" title="Home">Home</a></li>
                <li class="nav-item"><a href="#about" title="About">About</a></li>
                <li class="nav-item"><a href="#register" title="Register">Register</a></li>
                <li class="nav-item"><a href="#Login" title="Login">Login</a></li>
                <li class="nav-item"><a href="#contact" title="Contact">Contact</a></li>
            </ul>
        </nav>
        <main>
            <!---Start of Jumbotron Section --->
            <div class="jumbotron">
                <h1 class="card-title"><strong>
                        <center>Welcome to Happy Feet <br> Travel Blog</center>
                    </strong></h1>
                <!---Start of Carousel for Pictures--->
                
                <!--End of Controls for Carousel-->
                <h3 class="card-title">
                    <center>In order to enjoy the great content which will keep your feet desiring to be happy, please register below:<center>
                </h3>
            </div>
            <!---END OF JUMBOTRON SECTION --->
            <!---START OF THE REGISTRATION SECTION --->
            <div class="fluid-container mt-2" id="introduction">
                <div class="jumbotron">
                <form class="form" action="index_submit" method="get" accept-charset="utf-8">
                    <h2 class="text-primary">Registration Form:</h2><br/>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label id="regformlettering">First Name</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="Firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label id="regformlettering">Last Name</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="Surname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label id="regformlettering">Email Address</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="Email" placeholder="aaaaa@aaaaaa.aaa">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <label id="regformlettering">Password</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="Password" placeholder="Password">
                        </div>
                    </div>
                    <div class="row">
                    <div id="regformlettering" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="login.php"><button class="btn btn-default" type="submit">Submit Registration Details</button></a>
                    </div>

                </form>
                    
                </div>
            </div>
            <!---END OF THE REGISTRATION SECTION --->
        </main>
        <!---FOOTER SECTION BEGINNING --->
        <footer id="footer">
            <div>
                <img class="center-block" src="img/happyfeetlogo.png" alt="HappyFeetTravelBlog" width="300">
            </div>
            <div class="copyright text-center">
                <p>Jamie Slaats - CodeFactory 2019&#169;</p>
            </div>
        </footer>
        <!--- END OF FOOTER SECTION --->
    </div>
    <script src="JS/script.js" type="text/javascript" charset="utf-8"></script>
    <script src="JS/scriptpage2.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>