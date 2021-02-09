<?php
//including database connection
include('includes/conn.inc.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/main.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>
    <h2>Image Gallery</h2>
    <p>
        Welcome to our image gallery.
    </p>
    <div class="gframer">
        <?php
        // database query
        $sql = $conn -> query("SELECT * FROM images");
        //1. Check connection error
        //2. Check if gallery is empty
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } else if (mysqli_num_rows($sql) == 0) {
            echo "Gallery is empty!";
        } else {
            //run the database query

            while ($result = mysqli_fetch_assoc($sql)) {
                //get image name from database
                $a = $result ["id"];
                $b = $result["filename"];

                //with the image name, display an image with similar name from the file system
                echo '<div class="gframe">';
                echo '<img class = "gimage" src ="uploads/'.$b.'">';

                echo "<p>".$result["givenName"]."</p>";
                echo "<button onclick='goThere (".$a.")'> more </button>";
                echo '</div>';
            }
        }
        ?>



    </div>
    <div id="check"></div>
    <script>



    </script>
</body>
</html>