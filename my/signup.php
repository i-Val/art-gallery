<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>

        <div class="form">
            <h4 class="center">sign up </h4>
            <br>
            <form class="center" action="includes/signup.inc.php" method="post">
                <input type="text" name="name" placeholder="name...">
                <br>
                <input type="text" name="surname" placeholder="surname...">
                <br />
                <input type="text" name="email" placeholder="email...">
                <br />
                <input type="text" name="password" placeholder="password...">
                <br />
                <input class="btn" type="submit" name="submit " id="submit " value="sign-up!" />
            </form>

            <p class="center">
                Already signed up? Go to <a href="login.php">login</a> page
            </p>


        </div>
    </section>
</body>
</html>