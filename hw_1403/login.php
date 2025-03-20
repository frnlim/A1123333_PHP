<?php
    if (isset($_COOKIE["loginName"])){
        echo "Welcome back, ".$_COOKIE["loginName"]."!";
    }
?>

<h1>Please login to use the system</h1>

<form action = "logincheck.php" method = "post">
    Please input your username: <input type = "text" name = "loginName"><BR>
    Please input your password: <input type = "password" name = "loginPwd"><BR>

    <input type = "submit"><BR>

</form>