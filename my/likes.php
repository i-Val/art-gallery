<?php
//start session
session_start();
//include like class
include ('classes/like.class.php');

//check if like was clicked
if (isset($_GET['a'])) {

    //assign variables for the clicked image and the user
    $liked_pic = $_GET['a'];
    $user = $_SESSION['name'];

    //check if user has liked the pic already
    $check_liked = $database->check_liked ("likers", $user, $liked_pic);
    //if not then like the pic and increase no of likes by 1
    if ($check_liked == 0) {
        $database->reg_like ("likers", $user, $liked_pic);

        $old_like = $database->check_likes ("images", $liked_pic);
        $new_like = $old_like+1;

        $database -> like("images", $new_like, $liked_pic);
        echo $old_like;
        echo $new_like;


    } else {
        //dont like pic.
        echo "already liked pic!";
        exit();
    }


}