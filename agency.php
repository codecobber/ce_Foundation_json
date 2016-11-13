<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Foundation | Welcome</title>

    <!-- Font Awsome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" media="all" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/myjs.js"></script>
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>

<body>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">About</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
        <a class="ea" id="editme" href="#">Edit</a>
    </div>


    <div id="main">

        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

        <div class="menu-centered">
            <ul class="menu">
                <li><a href="#">One</a>
                </li>
                <li><a href="#">Two</a>
                </li>
                <li><a href="#">Three</a>
                </li>
                <li><a href="#">Four</a>
                </li>
            </ul>
        </div>


        <div class="callout large">
            <div class="row column text-center">
                <h1>Changing the World Through Design</h1>
                <i id="s0" class="fa fa-pencil buttons" aria-hidden="true"></i>
                <p class="lead" id="ps0"></p>
                
                <a href="#" class="button large">Learn More</a>
                <a href="#" class="button large hollow">Learn Less</a>
            </div>
        </div>
        <div class="row">
            <div class="medium-6 columns medium-push-6">
                <img class="thumbnail" src="http://placehold.it/750x350">
            </div>
            <div class="medium-6 columns medium-pull-6">
                <h2>Our Agency, our selves.</h2>
                <i id="s1" class="fa fa-pencil buttons" aria-hidden="true"></i>
                <p id="ps1"></p>
            </div>
        </div>
        <div class="row">
            <div class="medium-4 columns">
                <h3>Photoshop</h3>
                <i id="s2" class="fa fa-pencil buttons" aria-hidden="true"></i>
                <p id="ps2"></p>
            </div>
            <div class="medium-4 columns">
                <h3>Javascript</h3>
                <i id="s3" class="fa fa-pencil buttons" aria-hidden="true"></i>
                <p id="ps3"></p>
            </div>
            <div class="medium-4 columns">
                <h3>Marketing</h3>
                <p>Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna.</p>
            </div>
        </div>
        <hr>
        <div class="row column">
            <ul class="vertical medium-horizontal menu expanded text-center">
                <li>
                    <a href="#">
                        <div class="stat">28</div><span>Websites</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="stat">43</div><span>Apps</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="stat">95</div><span>Ads</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="stat">59</div><span>Cakes</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="stat">18</div><span>Logos</span>
                    </a>
                </li>
            </ul>
        </div>
        <hr>
        <div class="row column">
            <h3>Our Recent Work</h3>
        </div>
        <div class="row medium-up-3 large-up-4">
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/550x550">
            </div>
        </div>
        <hr>
        <div class="row column">
            <ul class="menu">
                <li><a href="#">One</a>
                </li>
                <li><a href="#">Two</a>
                </li>
                <li><a href="#">Three</a>
                </li>
                <li><a href="#">Four</a>
                </li>
            </ul>
        </div>

    </div>
    <!-- close id = "main" -->



    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
        }
    </script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
        $(document).foundation();
    </script>
</body>

</html>
