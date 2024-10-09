<? session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .error {
            color: #FF0000;
        }
    </style>

    <title>Document</title>
</head>

<body class="back" style="background-color: cadetblue;">
    <?php
    // $mno = $_GET['mno'];
    $uno = $_GET['uno'];
    echo $uno;
    
    $mmid=$mmname = $mmmob = $mmfees = $mmdate="";
    $valid = false;
    $showeditflag = false;

    if ($_SERVER["REQUEST_METHOD"] == "GET") {

        include("connect.php");
        $sql = "select mmid,mmname,mmmob,mmdate,mmfees from meesmembers where mmid='" . $uno . "'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $mmid = $row["mmid"];
            $mmname = $row["mmname"];
            $mmmob = $row["mmmob"];
            $mmfees = $row["mmfees"];
            $mmdate = $row["mmdate"];
        }
        
        $conn->close();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = true;
    }
    
    ?>
    <div style="width:50%; padding-left:20rem;padding-top: 3rem;  display: inline-block;">
        <div style="border: 15rem;background-color: khaki;border-radius: 10px;">
            <form action="usereditbd.php" method="" align="center">
                <h2>
                    <p>FEE PAY form :</p>
                </h2>
                <!-- Trans No: <br> -->
                <!-- <input type="hidden" name="tno" value="<?php echo $ptt; ?>" disabled> -->
                <label for="mno">Member Id:</label>
                <input type="number" name="mno" value="<?php echo $mmid; ?>" disabled>
            

                
                <br><br>
                <label for="btittle"> Member Name:</label> <br>
                <input type="text" name="unme" value="<?php echo $mmname; ?>"disabled>
                <br><br>
               

                <label for="uname"> Mobile No: </label><br><br>
                <input type="text" name="mob" value="<?php echo $mmmob; ?>">
                
                <br><br>
                <label for="uname"> Date: </label><br>
                <input type="text" name="udate" value="<?php echo $mmdate; ?>">

                <br><br>
                <!-- <label for="bissue">Fees:</label> <br>
                <input type="number" name="fees" value="<?php echo $mmfees; ?>"> -->
                
                <br><br>
                <!-- <label for="bissue"> Remaining Fees:</label> <br>
                <input type="number" name="remfees" value="<?php echo $topay; ?>">
                <br><br> -->
                <input type="submit" name="submit" value="Update">
            </form>
            <!-- <?php
            if ($valid == true) {
                include("connect.php");
                $mno=$_GET['mno'];
                $mob=$_GET['mob'];
                $date=$_GET['udate'];

           
                $sql = "update meesmembers set mmmob='$mob',mmdate='$date' where mmid='$mno'";
                echo $sql;
                if ($conn->query($sql) === TRUE) {

                    echo "<script>alert('Record Updated successfully');</script>";
                    echo "<script>window.location.assign('adminhome.php')</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }
            ?> -->

        </div>
    </div>
</body>

</html>