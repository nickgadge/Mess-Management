<?php
$uno=$_GET['mno'];
$umob = $_GET['mob'];
$udate = $_GET['udate'];


include('connect.php');
// $Num = $_POST["Bno1"];

//  echo $num;
$sql = "update meesmembers set mmmob='$umob',mmdate='$udate' where mmid='" . $uno . "'";
if ($conn->query($sql) === TRUE) {
    echo "<script>alert(' Record update successfully');</script>";
    // echo "<script>window.location.assign('adminhome.php')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>

<!-- $sql = "update books set BTITTLE='$btitle' ,BAUTH='$bauth',BPRICE=$bprice WHERE BNO=$num";
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Record updated successfully');</script>";
                echo "<script>window.location.assign('SearchFilterTable.php')</script>";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            } -->