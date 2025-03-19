<html>

<head>
    <meta charset = "utf-8">
    <title>NUKIM 2025 Freshman Welcoming Party Registration Successful!</title>
    <style>
        body {
            background-color: #d4fcff;
            color: #333;
            font-size: 20px;
            text-align: center;
        }

        .success{
            color:#006FE6;
            font-size: 20px;

        }

        .info-container {
            background-color:#fed301 ;
            width: 75%;
            margin: auto;
            padding: 20px;
            border-radius: 8px;
        }

        .info {
            font-size: 18px;
            color:#006FE6 ;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <font class="success" face="Cascadia Code">
        Your Registration for the NUKIM 2025 Freshman Welcoming Party is successful!
        <br><br>
        Below is the data submitted for registration.
        <br><br>
    </font>

    <div class="info-container">
        <?php
        $uName=$_GET["uName"];
        $uId = $_GET["uId"]; 
        $uEmail = $_GET["uEmail"];
        $uBday = $_GET["uBday"];
        $uAge = $_GET["uAge"];
        $uColor = $_GET["uColor"];
        $uGrade = $_GET["uGrade"];
        $uGender = $_GET["uGender"];
        $uCity = $_GET["uCity"];
        $uLike = $_GET["uLike"];
        $uComment = $_GET["uComment"];

        echo "<p class='info'>Your Name is: $uName</p>";
        echo "<p class='info'>Your Student ID is: $uId</p>";
        echo "<p class='info'>Your Email is: $uEmail</p>";
        echo "<p class='info'>Your Birthday is: $uBday</p>";
        echo "<p class='info'>Your Age is: $uAge</p>";
        echo "<p class='info'>Your Favorite Color is: <span style='color:$uColor;'>$uColor</span></p>";
        echo "<p class='info'>Your Grade is: $uGrade";
        echo "<p class='info'>Your Gender is: $uGender</p>";
        echo "<p class='info'>Your City is: $uCity</p>";
        echo "</p>";       
        echo "<p class='info'>Your Enthusiasm Rate: $uLike</p>";
        echo "<p class='info'>Your Feedback and Suggestions: ".nl2br(htmlentities($uComment))."</p>";
        ?>
    </div>

    <br><br>
        <font face="Cascadia Code" color="#006FE6">See you soon!</font>
            <br><br><br>        
</body>