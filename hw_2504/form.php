<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>
    <form action="dbsave.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Photo: <input type="file" name="photo" required><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>
