<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUKIM 2025 Freshman Welcoming Party Registration Form</title>
    <style>
        body {
            text-align: center;
            background-color: #d4fcff;
            color: #333;
        }
        
        .title{
            font-size: 22px;
            text-shadow: 2px 0 #000, -2px 0 #000, 0 2px #000, 0 -2px #000,
            1px 1px #000, -1px -1px #000, 1px -1px #000, -1px 1px #000;
            color: #006FE6;
        }

        h1, h2 {
            color: #0056b3;
        }
        .event {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
        }
        .event th, .event td {
            border: 1px solid black;
            padding: 10px;
        }
        
        .row1{
            background-color:#006FE6;
            color:#ffffff;

        }

        input {
            padding: 10px;
            margin: 10px;
            max-width: 300px;
        }
        input[type="submit"] , input[type="reset"]{
            padding: 10px;
            background: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            width:80px;
        }

        .regist{
            border-collapse:collapse;
            text-align:right;
            padding: 20px;
            font-size:20px;

        }

    </style>
</head>
<body>
    <font class="title" face="Bahnschrift">
        <h1>NUKIM 
           <font color="#fed301">2025</font>  
        Freshman Welcoming Party Registration</h1>
    </font>

    <font face="Cascadia Code">
    <h2>Event Schedule</h2>
        <table class="event">
            <tr class="row1">
                <th>Time</th>
                <th>Activity</th>
            </tr>
            <tr>
                <td>10:00 AM</td>
                <td>Opening Ceremony</td>
            </tr>
            <tr>
                <td>11:00 AM</td>
                <td>Games and Fun</td>
            </tr>
            <tr>
                <td>12:30 PM</td>
                <td>Lunch Break</td>
            </tr>
            <tr>
                <td>2:00 PM</td>
                <td>Performances by the Cadres</td>
            </tr>
            <tr>
                <td>4:00 PM</td>
                <td>Campus Tour</td>
            </tr>
            <tr>
                <td>6:00 PM</td>
                <td>Dinner Gathering</td>
            </tr>
        </table>
    </font>
        
        <br><br><br>

    <font face="Cascadia Code">
        <h2>Register Here ↓↓↓</h2>
        <form action="" method="POST">
            <table class="regist" align="center">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" name="name" placeholder="Enter Your Name"></td>
                </tr>

                <tr>
                    <td>Student ID:</td>
                    <td><input type="text" name="id" placeholder="Enter Your Student ID"></td>
                </tr>

                <tr>
                    <td>Email:</td>
                    <td><input type="text" name="email" placeholder="Enter Your Email"></td>
                </tr>

                <tr>
                    <td>Phone Number:</td>
                    <td><input type="text" name="number" placeholder="Enter Your Phone Number"></td>
                </tr>

                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Enter">    
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>


        </form>
    </font>
        
    <br><br>
    <font face="Cascadia Code">See you soon!</font>
        <br><br><br>
        
        
</body>
</html>