<html>
    <head>
        <meta charset="utf-8">
    </head>

    <?php
    $link = @mysqli_connect( 
    'localhost',  // MySQL主機名稱 
    'root',       // 使用者名稱 
    '',  // 密碼
    'school');  // 預設使用的資料庫名稱

    $sql = "SELECT * FROM student";

    if ( $result = mysqli_query($link, $sql) ) {
        echo"<table border='1'>";

        while( $row = mysqli_fetch_assoc($result) ){ 
            echo "<tr>";
            echo "<td>".$row["no"]."</td>".
            "<td>".$row["name"]."</td>".
            "<td>".$row["phone"]."</td>".
            "<td>".$row["birthday"]."</td>".
            "<br>";
            echo "</tr>";
         }
         
     }


    ?>

</html>