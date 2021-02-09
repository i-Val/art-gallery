<?php
//include database class & connection
include("conn.inc.php");
include("../classes/database.class.php");

//user data
$name = $_POST ["name"];
$sname = $_POST ["surname"];
$username = $_POST ["email"];
$pass = $_POST ["password"];



//check if username of password is taken
$user_check = $database -> select_one("users", "username", "$username");
$pass_check = $database -> select_one("users", "password", "$pass");

//check if username if a real email
if (!preg_match("/^([A-Za-z0-9-]+)@[A-Za-z0-9]+\.([A-Za-z]{2,3})$/", "$username")) {
    echo "fake e-mail address!";
    exit ();
    //if email is taken, exit
} else if (($user_check->num_rows) > 0) {
    echo "username taken!";
    exit ();
    //if password is taken, exit
} else if (($pass_check->num_rows) > 0) {
    echo "password taken!";
    exit();
} else {

    //insert new user into DB
    $sql = "INSERT INTO users (name, surname, username, password)
VALUES ('$name', '$sname', '$username','$pass')";

    $database->insert_into ("users", "$name", "$sname", "$username", "$pass");



}

?>