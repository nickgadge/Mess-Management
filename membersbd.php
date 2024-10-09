<?php 
session_start();
// echo $_SESSION['msession'].'<br>.';
$abc=$_SESSION['msession'];
echo $abc;
$name = $_POST['uname'];
$gender = $_POST['gender'];
$Email = $_POST['email'];
$mob = $_POST['num'];
$date=$_POST['date'];
$fee=$_POST['fees'];
include('connect.php');

    $sql = "INSERT INTO meesmembers (  mmname,mid,mmgender,mmemail,mmmob,mmdate,mmfees)
VALUES ('$name' ,'$abc' ,'$gender' , '$Email' ,'$mob','$date','$fee' )";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('New record created successfully');</script>";
        echo "<script>window.location.assign('adminhome.php')</script>";

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

?>