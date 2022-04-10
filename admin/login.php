<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Admin Log-in</title>
</head>

<body>

    <div class="wrapper">
        <form action="loginLogic.php" method="POST">

            <div class="formContainer">
                <div class="logoContainer">
                    <p>RI</p>
                </div>
                <input type="text" name="username" placeholder="username">
                <input type="password" name="password" placeholder="*********">
                <input type="submit" name="submit" value="Log In">
            </div>


        </form>

        <a class="goBackBtn" href="../index.php">Back to the website</a>
    </div>




</body>

</html>