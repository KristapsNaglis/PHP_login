<?php
session_start();
if(!isset($_SESSION['login'])) {
    header('LOCATION:loginPHP.php'); die();
}
?>
<html>
<head>
    <link rel="stylesheet" href="css/stylesAdmin.css">
    <title>Admin Page</title>
</head>
<body>
<div class="container">
    <div class="content">
        <div class="text">
            <p>This is admin page viewable only by logged in users!</p>
        </div>
        <div class="logout">
            <a id="logout" href="logoutPHP.php">Logout</a>
        </div>
    </div>
</div>

</body>
</html>