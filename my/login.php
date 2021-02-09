<?php
//include database connection
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
    <title>Document</title>
</head>
<body>
    <div class="form">
        <br>
        <h4 class="center">Login to view our gallery</h4>
        <br>
        <form class="login center" action="includes/login.inc.php" method="get" accept-charset="utf-8">
            <input type="text" name="username" placeholder="username...">
            <br>
            <input type="password" name="password" id="password" placeholder="password..." />
            <br>
            <input type="submit" name="submit" id="submit" value="login" />
        </form>
    </div>
</body>
</html>