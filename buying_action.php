<?php
$con=mysqli_connect("localhost","root","","project");

$name = $_POST['txt_name'];
$number = $_POST['txt_number'];
$email = $_POST['txt_email'];
$location = $_POST['txt_location'];
$mobile = $_POST['txt_mobile'];

if (empty($name) || empty($number) || empty($email) || empty($location) || empty($mobile)) {
    header("Location: register.php?flag=1");
    
} else {
    $sql = "INSERT INTO info(db_name, db_number, db_email, db_location, db_mobile) VALUES ('$name', '$number', '$email', '$location', '$mobile')";

    mysqli_query($con,$sql);

    header("Location: register.php?flag=2");
}

?>
