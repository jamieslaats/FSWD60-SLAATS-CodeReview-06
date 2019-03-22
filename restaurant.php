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
    <div class="container-fluid">
        <header id="header">
            <div class="header">
                <img class="center-block" src="IMG/happyfeetlogo.png">
            </div>
        </header><!-- /header -->
        <nav class="navbar navcolour navbar-justify">
            <ul class="nav nav-pills nav-justified" id="navstyling">
                <li class="nav-item"><a href="index.html" title="Home">Home</a></li>
                <li class="nav-item"><a href="#about" title="About">About</a></li>
                <li class="nav-item"><a href="#sights" title="TopSights">Top Sights</a></li>
                <li class="nav-item"><a href="#eatery" title="Restaurants">Restaurants</a></li>
                <li class="nav-item"><a href="#events" title="Events">Events</a></li>
                <li class="nav-item"><a href="#contact" title="Contact">Contact</a></li>
            </ul>
        </nav>
        <main>
            <!---Start of Jumbotron Section --->
            <div class="jumbotron">
                <h1 class="card-title"><strong>
                        <center>St. Petersburg, Russia</center>
                    </strong></h1>
                <!---Start of Carousel for Pictures--->
                <div id="carousel-stpetersburg" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-stpetersburg" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-stpetersburg" data-slide-to="1"></li>
                        <li data-target="#carousel-stpetersburg" data-slide-to="2"></li>
                    </ol>
                    <!-- Wrapper for Picture Carousel -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="IMG/river-3729956_1280.jpg" alt="St.PetersburgRiver">
                            
                        </div>
                        <div class="item">
                            <img src="IMG/metro-3714290_1280.jpg" alt="St.PetersburgMetro">
                        </div>
                        <div class="item">
                            <img src="IMG/church-3710237_1280.jpg" alt="St.PetersburgChurch">
                        </div>
                    </div>
                    <!--Controls for Carousel-->
                    <a class="left carousel-control" href="#carousel-stpetersburg" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-stpetersburg" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End of Controls for Carousel-->
                <h3 class="card-title">
                    <center>A City Everyone Must Visit Once in Their Life!<center>
                </h3>
            </div>
            <!---END OF JUMBOTRON SECTION --->
            <!---START OF THE CONTENT SECTION --->
            <div class="fluid-container mt-2" id="contentsection"></div>
            <!---END OF THE CONTENT SECTION --->
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