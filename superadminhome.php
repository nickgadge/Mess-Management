<?php 
session_start();
// include('checklogin.php');
// echo $_SESSION['sid'].'<br>.';
// echo $_SESSION['asession'].'<br>.';
// echo $_SESSION['aname'].'<br>.';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <title>Document</title>
<style>
    #myInput {
            background-image: url('search2.png');
            background-position: 8px 8px;
            background-repeat: no-repeat;
            background-size: 24px 24px;
            width: 100%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

        #myInput {
            background-image: url('search2.png');
            background-position: 8px 8px;
            background-repeat: no-repeat;
            background-size: 24px 24px;
            width: 90%;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;

        }

        #myTable {
            border-collapse: collapse;
            width: 50%;
            border: 1px solid red;
            font-size: 18px;
            padding-left: 10rem;
        
        }

        #myTable th,
        #myTable td {
            text-align: center;
            padding: 12px;
            padding-left: 5;
            
        }

        #myTable tr {
            border-bottom: 1px solid darkred;
        }

        #myTable tr.header,
        #myTable tr:hover {
            background-color: lightcyan;
        }

        
    </style>
</head>
<script>
    
        function openForm() {
            document.getElementById("myForm").style.display = "block";
            // register id
        }

</script>

<body class="bg-white-1000">
<div class=" bg-red-300">


        <div class=" ">
            <P class=" text-center py-5 italic text-4xl">Mess Portal </P>
            <!-- <a href="#"   class="py-4 text-2xl" onclick="openForm()">Add Member</a>
            <a href="" class="py-4 text-2xl">Member Info</a>
            <a href="index.php" class="py-4 text-2xl">Logout</a>              -->
        </div>
</div>
<div class="max-w-[1320px] md:py-[20] py-5 mx-auto">

  <div class="max-w-[1200px]  mx-auto py-[30px] grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
<div class="shadow-lg p-4 text-center bg-fuchsia-200 hover:bg-blue-900 duration-1000 ">
    <!-- <i class="fa-solid fa-car text-4xl text-red-400 animate-bounce"></i> -->
    <ion-icon name="add-circle-outline" class="animate-bounce text-4xl"></ion-icon><br>
    <a href="addmembers.php" class="text-2xl py-2 text-blue-500 ">ADD Members</a>
  
</div>
<div class="shadow-lg p-4 text-center bg-fuchsia-200 hover:bg-blue-900 duration-1000">
    <!-- <i class="fa-solid fa-car text-4xl text-red-400 animate-bounce"></i> -->
    <ion-icon name="people-circle-outline" class="animate-bounce text-4xl"></ion-icon><br>
    <a href="membersinformation.php" class="text-2xl py-2 text-blue-500 ">Member Information</a>
    

</div>
<div class="shadow-lg p-4 text-center bg-fuchsia-200  hover:bg-blue-900 duration-1000">
<ion-icon name="create-outline"class="animate-bounce text-4xl"></ion-icon><br>
<a href="managemembers.php" class="text-2xl py-2 text-blue-500 "> Manage Members </a>
    
</div>
<div class="shadow-lg p-4 text-center bg-fuchsia-200  hover:bg-blue-900 duration-1000">
<ion-icon name="log-out-outline"class="animate-bounce text-4xl"></ion-icon><br>
<a href="index.php" class="text-2xl py-2 text-blue-500 ">Logout</a>
    
</div>


 <div id="myForm" style="display:none;">
        <div class="min-h-screen  py-10" style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
      <div class="container mx-auto">
        <div class="flex flex-col lg:flex-row w-10/12 lg:w-8/12 bg-white rounded-xl mx-auto shadow-lg overflow-hidden">
          <div class="w-full lg:w-1/2 ---flex flex-col items-center justify-center p-12 bg-no-repeat bg-cover bg-center" style="background-image: url('mess2.jpg');">
            
          </div>
          <div class="w-full lg:w-1/2 py-16 px-12">
            <h2  class="text-3xl mb-4">Register</h2>
            <p class="mb-4">
              Create your account. It’s free and only take a minute
            </p>
            <form action="registerbd.php" method="post" onsubmit="return checkdata();">
              <div class="grid gap-5">
                <input type="text" name="mname" placeholder="Mess Name" required class="border border-gray-400 py-1 px-2 w-full">
               
              </div>
              <div class="mt-5">
                <input type="email" name="email" placeholder="Email" required class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" id="p1" name="p1" placeholder="Password" required class="border border-gray-400 py-1 px-2 w-full">
              </div>
              <div class="mt-5">
                <input type="password" id="p2" name="p2" placeholder="Confirm Password" required class="border border-gray-400 py-1 px-2 w-full">
              </div>
              
              </div>
              <div class="mt-5">
                <input type="submit" value="Register Now" class="w-full bg-purple-500 py-3 text-center text-white">
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div> 
  
    
    <!-- <div style="padding-left:4rem;padding-top:3rem;"> <input style="padding-left:8rem; width:35%;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                    
                    <!-- <?php
                    include('connect.php');
                    $sql = "SELECT mid,mname,email FROM madmin";
                    $result = $conn->query($sql);
                   
                    if ($result->num_rows > 0) {
                        echo "<table style='width:50rem' id='myTable'><tr><th>No</th><th>Mess Name</th><th>Email</th>";
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            
                            
                            echo "<tr><td>" . $row["mid"] . "</td><td>" . $row["mname"] . "</td><td> " . $row["email"] . "</td>" . "<td><a style='text-decoration:none;' href=''></a> </td>";
                        }
                        echo "</table>";
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
   ?> -->

    <script> 
    function checkdata(){
    var x = document.getElementById("p1").value;
            var y = document.getElementById("p2").value;
            if (x != y) {
                alert("Both Passwords Must Be Same...");
                valid = false;
                return (valid);
                }
            }
</script>  
</body>
</html>