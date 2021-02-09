<?php
/**
*
*/
//name, temp name, given name, description and path to the file
$vid = $_FILES["pic"]["name"];
$tname = $_FILES["pic"]["tmp_name"];
$gname = $_POST['givenName'];
$desc = $_POST['description'];
$dir = "../uploads/images/";


//class begins
class Filess
{

    /**
    *
    */


    public function __construct($hst, $usrnm, $pass, $db) {
        // db connection code
        $this->host = $hst;
        $this->username = $usrnm;
        $this->password = $pass;
        $this->database = $db;
        $this->conn = new mysqli($this->host,
            $this->username,
            $this->password,
            $this->database);
    }

    //this method uploads the image
    public  function image_upload () {
        /* #Check if file parameters were inserted in DB successfully*/
        $gname = $_POST['givenName'];
        $desc = $_POST['description'];
        $fname = basename($_FILES["pic"]["name"]);


        /*Getting file extension in lowercase*/
        $ext = explode(".",
            $fname);
        $file_ext = strtolower(end($ext));

        /*Permitted file formats*/

        $allowed = array("png",
            "jpg",
            "jpeg", "webp");

        //if format is allowed
        if (in_array($file_ext, $allowed)) {
            //create insert query
            $sql = "INSERT INTO images (filename, givenName, description)
VALUES ('$fname', '$gname','$desc')";
        } else {
            echo "file is not an image!";
            exit ();
        }
        //if file name & details get inserted successfully...
        if ($this->conn->query($sql) === TRUE) {

            /*....Upload file to directory*/
            $dir = "../uploads/";
            $tname = $_FILES["pic"]["tmp_name"];
            $target_file = $dir . basename($_FILES["pic"]["name"]);


            move_uploaded_file($tname, $target_file);

            echo ($target_file);
            echo "New record created successfully";

        }
    }
    //end of class
}