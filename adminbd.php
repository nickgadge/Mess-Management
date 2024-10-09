<?php
session_start();
$email= $_POST['eemail'];
$pass = $_POST['passs'];
include('connect.php');

$sql = "SELECT mid,mname From madmin where email='$email' AND mpass='$pass'";
$result = $conn->query($sql);
// $_SESSION["messname"] = "";
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["msession"]=$row['mid'];
    $_SESSION["messname"]=$row['mname'];
    $_SESSION['sid']=session_id();
    echo "<script>alert('Admin Login successfully');</script>";
    echo "<script>window.location.assign('adminhome.php')</script>";
} else {
     echo "<script>alert('password does not matched');</script>"; "<br>" . $conn->error;
     echo "<script>window.location.assign('index .php ')</script>";

}
