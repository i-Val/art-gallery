<?php
// include the database connection
//the file also includes the session variable
include("includes/conn.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/skeleton.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/materialize.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script type="text/javascript"
        src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <title>Document</title>
</head>
<body>
    <header>

        <div class="header-layer">
            <nav class="transparent  z-depth-0">
                <div class="nav-wrapper">
                    <a href="#" class="left brand-logo">Art.com</a>
                    <ul class="right">
                        <li><a href="badges.html">Home</a></li>
                        <li><a href="collapsible.html">About</a></li>
                    </ul>
                </div>
            </nav>

            <div class="hcan">

                <div class="child child1">
                    <h1>Lorem Ipsum</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores odit animi et fugit deleniti, magni expedita voluptas iste voluptate corporis.
                    </p>

                    <!-- displaying gallery or login form based on login status-->
                    <?php
                    if (isset($_SESSION["name"])) {
                        echo '<a id="buton" class="btn" href="gallery.php">Gallery</a>';
                    } else {
                        echo '<a id="buton" class="btn" href="login.php">Login</a>';
                    }

                    ?>
                </div>
                <div class="child child2 right">
                    <img id="img-hero" src="images/hero.png" alt="" />
                </div>

            </div>
        </div>
    </header>
    <div class="intro">
        <h2>Lorem</h2>
        <?php if (isset($_SESSION['name'])) {
            echo $_SESSION['name'];
        } else {
            echo "Not logged in!";
        }
        ?>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, voluptatem, doloremque.
        </p>
    </div>
    <div id="mapp"></div>

    <section>
        <div class="main-sec1">
            <img class="main-sec1-image" src="images/main-sec.png" alt="" />
            <div class="main-sec1-text">
                <h3>Lorem ipsum dolor</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem ipsum dolor sit amet, consectetur.
                </p>
            </div>
        </div>
    </section>
    <!--Pics of the day-->

    <section>
        <h4 class="center">Pics of the day</h4>
        <br>
        <div class="pics">
            <div class="pic">
                <img src="images/ptt.jpg" alt="" />
            </div>
            <div class="pic">
                <img src="images/ptt.jpg" alt="">
            </div>
            <div class="pic">
                <img src="images/ptt.jpg" alt="">
            </div>
        </div>
    </section>
    <!--FORM-->

    <!-- displaying upload or signup form based on login status-->

    <?php
    if (isset($_SESSION ["name"])) {
        include ("upload.php");
    } else {
        include ("signup.php");
    }

    ?>


    <!--FOOTER-->
    <footer>
        <div class="footer-child grey-text">
            <h5>About Us</h5>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit autem, accusamus voluptas dicta.
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero nobis, iusto magnam.
            </p>
        </div>

        <div class="footer-child grey-text">
            <h5>Lorem</h5>
            <ul id="fl">
                <li id="fli">lorem upsum</li>
                <li>lorem ipsum</li>
                <li>lorem ipsum</li>
                <li>lorem upsum</li>
                <li>lorem ipsum</li>
            </ul>
        </div>


        <div class="footer-child grey-text">
            <h5>Lorem</h5>
            <img class="center" src="images/author.jpg" alt="">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint provident quaerat, in.
            </p>
        </div>
        <div class="social-footer footer-child grey-text">
            <p>
                lorem ipsum
            </p>
        </div>
        <div class="copyright footer-child grey-text">
            <p>
                copyright 2009
            </p>
            <p>
                <!-- displaying gallery or logout form if logged in-->

                <?php
                if (isset($_SESSION["name"])) {
                    include("logout.php");
                }
                ?>
            </p>
        </div>
    </footer>
    <script src="js/main.js" type="text/javascript" charset="utf-8">

    </script>
</body>
</html>