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
            text-align:center;
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
        <form action="registration_info.php" method="GET" class="regist">
                Name:<br>
                <input type="text" name="uName" placeholder="Enter Your Name" required>
                <br><br>
                Student ID:<br>
                <input type="text" name="uId" placeholder="Enter Your Student ID" required>
                <br><br>
                Email:<br>
                <input type="text" name="uEmail" placeholder="Enter Your Email" required>
                <br><br>
                Phone Number:<br>
                <input type="text" name="uNumber" placeholder="Enter Your Phone Number" required>
                <br><br>
                Birthday:<br>
                <input type="date" name="uBday" required>
                <br><br>
                Age:<br>
                <input type="number" name="uAge" min="16" max="55" required>
                <br><br>
                Attire Color: <br>
                <input type="color" name="uColor">
                <br><br>
                Grade/Year:<br>
                Freshman<input type = "radio" name = "uGrade" value = "Freshman">&nbsp;&nbsp;
                Sophomore<input type = "radio" name = "uGrade" value = "Sophomore">&nbsp;&nbsp;
                Junior<input type = "radio" name = "uGrade" value = "Junior">&nbsp;&nbsp;
                Senior<input type = "radio" name = "uGrade" value = "Senior">
                <br><br>
                Gender:<br>
            Male<input type = "radio" name = "uGender" value = "Male"> &nbsp;&nbsp;Female<input type = "radio" name = "uGender" value = "Female">
            <br><br>
                City: <br>
                <select name = "uCity" >
                    <option value = "Taipei">Taipei</option>
                    <option value = "New Taipei">New Taipei</option>
                    <option value = "Taichung">Taichung</option>
                    <option value = "Kaohsiung">Kaohsiung</option>
                    <option value = "Tainan">Tainan</option>
                    <option value = "Taoyuan">Taoyuan</option>
                    <option value = "Chiayi">Chiayi</option>
                    <option value = "Hsinchu">Hsinchu</option>
                    <option value = "Keelung">Keelung</option>
                    <option value = "Changhua">Changhua</option>
                    <option value = "Hualien">Hualien</option>
                    <option value = "Miaoli">Miaoli</option>
                    <option value = "Nantou">Nantou</option>
                    <option value = "Pingtung">Pingtung</option>
                    <option value = "Taitung">Taitung</option>
                    <option value = "Yilan">Yilan</option>
                </select>
                <br><br>
                Rate your Enthusiasm:<br>
                <input type = "range" name = "uLike">
                <br><br>
                Feedback & Suggestions:<BR>
                <textarea col = "30" rows = "3" name = "uComment"></textarea>
                <br><br>
                <input type="submit" value="Enter"> 
                <input type="reset" value="Reset">



        </form>
    </font>
        
        <br><br>
        <font face="Cascadia Code">See you soon!</font>
            <br><br><br>        
</body>
</html>