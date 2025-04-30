<?php
$name = $_POST["name"];
$email = $_POST["email"];
$photoTmp = $_FILES["photo"]["tmp_name"];
$photoName = time() . "_" . $_FILES["photo"]["name"];
$uploadPath = "photos/" . $photoName;

if (!move_uploaded_file($photoTmp, $uploadPath)) {
    // Upload failed
    header("Location: send.php?status=fail&name=" . urlencode($name) . "&email=" . urlencode($email));
    exit();
}


// DB Connection
$link = mysqli_connect("localhost", "root", "", "hw_0425");
mysqli_set_charset($link, "utf8");

// Insert into DB
$sql = "INSERT INTO info (name, email, photo) VALUES ('$name', '$email', '$uploadPath')";
if (mysqli_query($link, $sql)) {
    // Insert success
    header("Location: send.php?status=success&name=" . urlencode($name) . "&email=" . urlencode($email) . "&photo=" . urlencode($uploadPath));
} else {
    // Insert failed
    header("Location: send.php?status=fail&name=" . urlencode($name) . "&email=" . urlencode($email));
}
mysqli_close($link);
?>
