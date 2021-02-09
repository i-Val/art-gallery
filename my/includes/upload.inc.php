<?php
include("../classes/file_system.class.php");
//instantiate class
$gallery = new Filess ("localhost", "root", "", "valpoint");
//call upload method
$gallery->image_upload ();
?>