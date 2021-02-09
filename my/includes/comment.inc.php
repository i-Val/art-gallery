<?php
//include db connection
include ("conn.inc.php");
//check if submit was clicked
if (isset($_POST["submit"])) {

    //form data
    $user = $_SESSION["name"];
    $comment = $_POST["comment"];
    $pic_id = $_SESSION["pic_id"];
    $pic_table = $_SESSION["table"];

    //variable fire inserting comment on db
    $sql = "INSERT INTO Opinions (user, word, pic_id, pic_table) VALUES  ('".$user."', '".$comment."', '".$pic_id."', '".$pic_table."')";
    //run insert query
    $comm = mysqli_query ($conn, $sql);
    //check for success
    if ($comm) {
        echo "successful";
    } else {
        echo "no way";
    }



    //if submit was not clicked
} else {
    echo "how the hell did you get here?!!";
}