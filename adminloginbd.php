<?php
session_start();
$aname = $_POST['email'];
$apass = $_POST['password'];
include('connect.php');

$sql = "SELECT * From ladmin where Aid='$aname' AND Passwd='$apass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["asession"]=$row['No'];
    $_SESSION["aname"]=$row['Aid'];
    $_SESSION['sid']=session_id();
    echo "<script>alert('Admin Login successfully');</script>";
    echo "<script>window.location.assign('superadminhome.php')</script>";
} else {
     echo "<script>alert('password does not matched');</script>"; "<br>" . $conn->error;
     echo "<script>window.location.assign('libadminlogin.php ')</script>";

}

 $conn->close();
