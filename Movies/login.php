
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Movie Design</title>
</head>
<body  style="background: linear-gradient(to bottom, rgba(0,0,0,0), #151515), url('img/f-1.jpg')">

<?php include("App/include/header.php");?>

    <div class="auth-contanet">
        <form action="login.php" method="post">
            <h2 class="from-title">Login</h2>
            
            <?php include(ROOT_PATH . "/app/helpers/formErros.php")?>

            <div>
                <label>Username</label>
                <input type="text" name="Username"class="text-input">
            </div>
            <div>
                <label>password</label>
                <input type="password" name="password"class="text-input">
            </div>
            <div>
                <button type="submit" name="login-btn"class="featured-button">login</button>
            </div>
            <P>or<a href="register.php">Sing up</a></P>
        </form>
    </div>
    <script src="app.js"></script>
 </body>
</html>