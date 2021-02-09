<?php
// start a session
session_start();
//include a class containing database code
include("classes/database.class.php");

//declare connection variables
$h = "localhost";
$u = "root";
$p = "";
$d = "valpoint";

$conn = new mysqli($h, $u, $p, $d);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/skeleton.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <div class="biggal">

        <?php
        //displaying a more detailed image
        if (isset ($_GET["s"])) {
            $s = $_GET["s"];
            $obj = $database->select_one ("images", "id", $s);
            $res = mysqli_fetch_assoc($obj);
            $a = $res ["id"];
            $_SESSION["pic_id"] = $res ["id"];
            $_SESSION["table"] = "images";

            echo "<img src='uploads/".$res ['filename']."'>";
            echo "<button onclick='like ($a)'> like </button>";
            echo $res['likes']. " likes";
            echo "<div><h1>".$res ['givenName']."</h1><p>".$res ['description']."</p></div>";

            //including comment form
            include ("comment.php");

            //code displays comments
            $objc = "SELECT * FROM Opinions WHERE pic_id ='$a'";
            $comc = mysqli_query($conn, $objc);

            while ($resc = mysqli_fetch_assoc($comc)) {
                echo '<div class="comment">';
                echo "<h5>".$resc['user']."</h5>";
                echo "<p>".$resc['word']."</p>";
                echo '</div>';

            }
        } else {
            echo "didn't work ";
        }


        ?>
    </div>

</body>
</html>