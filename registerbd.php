<?php
$name = $_POST['mname'];
$email = $_POST['email'];
$pass = $_POST['p1'];
$conpass=$_POST['p2'];
include('connect.php');
if($pass!=$conpass)
{
    echo "<script>alert('Passowrd Must be same');</script>";
        echo "<script>window.location.assign('addmembers.php')</script>";
}
else{
    $sql = "INSERT INTO madmin(  mname,email,mpass)
VALUES ('$name','$email' ,'$pass')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Register successfully');</script>";
        echo "<script>window.location.assign('superadminhome.php')</script>";
    }

}    
    
    
    //  else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    
    
        
    $conn->close();
    
        
?>
