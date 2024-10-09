<?php
if(count($_SESSION)>1)
{
if($_SESSION["sid"]!=session_id())
    echo "<script>window.location.assign('index.php')</script>";
}
else
echo "<script>window.location.assign('index.php')</script>";

?>