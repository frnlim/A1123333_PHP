<?php
    session_start();
?>

<h1>Login Result </h1>

<?php
    $userName = "nuk";
    $userPwd = "123456";
    $adminName="admin";
    $adminPwd="654321";
    $loginName = $_POST["loginName"];
    $loginPwd = $_POST["loginPwd"];

    if ($userName == $loginName && $userPwd == $loginPwd){
        echo "Login success";
        $_SESSION["check"] = 1;
        $cookiedate = strtotime("+10 seconds", time());
        setcookie("loginName", $userName, $cookiedate);
        header("Location:user.php");
    } else if($adminName == $loginName && $adminPwd== $loginPwd){
        echo "Login success";
        $_SESSION["check"] = 1;
        $cookiedate = strtotime("+10 seconds", time());
        setcookie("loginName", $adminName, $cookiedate);
        header("Location:admin.php");
    }else{
        echo "Login failed, will send you back to login again";
        header("Refresh:3;url='login.php");
    }

?>