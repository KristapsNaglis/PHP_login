<?php
session_start();
echo isset($_SESSION['login']);
if(isset($_SESSION['login'])) {
    header('LOCATION:index.php'); die();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv='content-type' content='text/html;charset=utf-8' />
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
-->
    <link rel="stylesheet" href="css/stylesLogin.css">
</head>
<body>
<div class="container">
    <?php
    if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if($username === 'peteris' && $password === 'noslepums'){
            $_SESSION['login'] = true; header('LOCATION:adminPHP.php'); die();
        } {
            echo "<div class='alert'>Username and Password do not match</div>";
        }

    }
    ?>
    <form class="form" action="" method="post">
        <div class="formType Username">
            <label class="formTypeLabel Username" for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="formType Password">
            <label class="formTypeLabel Password" for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" required>
        </div>
        <div class="formButton">
            <button type="submit" name="submit" class="btn">Login</button>
        </div>
    </form>
</div>
</body>
</html>