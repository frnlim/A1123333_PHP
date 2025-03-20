<?php
    session_start();
?>

<html>

<head>

</head>

<body>  
    <?php
    if (isset ($_SESSION["check"])) {
        echo "Welcome Admin!<br>";
        echo "<a href = 'logout.php'>Logout</a>";
    } else {
        echo "Illegal user";
        header("Refresh:2; url='login.php'");
    }
        ?>
</body>

</html>