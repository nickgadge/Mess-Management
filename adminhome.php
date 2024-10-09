<?php 
session_start();
?>
<!DOCTYPE html>
<head>
    <!-- <link rel="stylesheet" href="#.css"> -->
    <title>Document</title>
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
            width: 20%;
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
  <?php
// $_SESSION["messname"] = "";

//  echo count($_SESSION).'<br>.';
//  echo $_SESSION['sid'].'<br>.';
// echo $_SESSION['msession'].'<br>.';
$_SESSION['messname'].'<br>.';
$abc=$_SESSION['msession'];


?> 

<body >
    <div class="row">
        <header>
            <div class="text-center py-5  bg-red-500 ">
                <h1><b><i>
                            <?php
                            $usa=$_SESSION['messname'];
                        
                            ?>
                            <i style="font-size: 2rem;"><?PHP echo $usa ?></i></p>
                        </i></b> 
            </div> 
</h1>
        </header>
        <!DOCTYPE html>

<script>
    function openForm() {
            document.getElementById("myform").style.display = "block";
            
        }
        

</script>
<body>
<div class="max-w-[1320px] md:py-[20] py-5 mx-auto">

  <div class="max-w-[1200px]  mx-auto py-[30px] grid lg:grid-cols-4 sm:grid-cols-2 gap-6">
<div class="shadow-lg p-4 text-center bg-fuchsia-200 hover:bg-blue-900 duration-1000 ">
    <!-- <i class="fa-solid fa-car text-4xl text-red-400 animate-bounce"></i> -->
    <ion-icon name="add-circle-outline" class="animate-bounce text-4xl"></ion-icon><br>
    <a href="usersaddform.php" class="text-2xl py-2 text-blue-500 ">ADD Users</a>
  
</div>
<div class="shadow-lg p-4 text-center bg-fuchsia-200 hover:bg-blue-900 duration-1000">
    <!-- <i class="fa-solid fa-car text-4xl text-red-400 animate-bounce"></i> -->
    <ion-icon name="people-circle-outline" class="animate-bounce text-4xl"></ion-icon><br>
    <a href="userinfo.php" class="text-2xl py-2 text-blue-500 ">Users Information</a>
    

</div>
<div class="shadow-lg p-4 text-center bg-fuchsia-200  hover:bg-blue-900 duration-1000">
<ion-icon name="create-outline"class="animate-bounce text-4xl"></ion-icon><br>
<a href="usermanage.php" class="text-2xl py-2 text-blue-500 "> Manage Users </a>

</div>

<div class="shadow-lg p-4 text-center bg-fuchsia-200  hover:bg-blue-900 duration-1000">
<ion-icon name="information-circle-outline"class="animate-bounce text-4xl"></ion-icon><br>
<a href="feesstatus.php" class="text-2xl py-2 text-blue-500 ">Fees Status</a>
</div> 

<div class="shadow-lg p-4 text-center bg-fuchsia-200  hover:bg-blue-900 duration-1000">
<ion-icon name="card-outline"class="animate-bounce text-4xl"></ion-icon><br>
<a href="feepay.php" class="text-2xl py-2 text-blue-500 ">Pay Fees</a>
</div> 


<div class="shadow-lg p-4 text-center bg-fuchsia-200  hover:bg-blue-900 duration-1000">
<ion-icon name="calendar-outline"class="animate-bounce text-4xl"></ion-icon><br>
<a href="duedate.php" class="text-2xl py-2 text-blue-500 ">Due Date</a>
</div>

<div class="shadow-lg p-4 text-center bg-fuchsia-200  hover:bg-blue-900 duration-1000">
<ion-icon name="log-out-outline"class="animate-bounce text-4xl"></ion-icon><br>
<a href="index.php" class="text-2xl py-2 text-blue-500 ">Logout</a>
</div>   

  </div>
</div>


<div class="flex h-screen">
    <!-- Sidebar -->
    <!-- <div class="bg-gray-800 text-white w-[18%] flex-shrink-0">
        <div class="p-4">
            <h1 class="text-2xl font-bold"></h1>
        </div>
        <ul class="p-2">
            <li><a href="#" class="block p-2 hover:bg-gray-700" onclick="openForm()">Add User</a></li>
            <li><a href="userinfo.php" class="block p-2 hover:bg-gray-700">User Information</a></li>
            <li><a href="#" class="block p-2 hover:bg-gray-700">Manage User</a></li>
            <li><a href="feesstatus.php" class="block p-2 hover:bg-gray-700">Fees Status</a></li>
            <li><a href="feepay.php" class="block p-2 hover:bg-gray-700"> Pay Fees</a></li>
            <li><a href="duedate.php" class="block p-2 hover:bg-gray-700"> Due Date</a></li>
            <li><a href="index.php" class="block p-2 hover:bg-gray-700"> Logout</a></li>
        </ul>
    </div> -->

    <div id="myform" style="display:none;padding-top:3rem;"class="flex justify-center pl-60 items-center min-h-screen">
        <div class="bg-red-100  p-5 rounded shadow-md w-full sm:w-96">
            <h2 class="text-2xl font-semibold mb-6">Register</h2>
            <form action="membersbd.php" method="POST">
                <div class="mb-4">
                    <label for="uname" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="uname" name="uname" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700">Gender</label>
                    <div class="mt-1">
                        <label for="male" class="inline-flex items-center">
                            <input type="radio" id="male" name="gender" value="male" class="form-radio h-4 w-4 text-indigo-600" required>
                            <span class="ml-2">Male</span>
                        </label>
                        <label for="female" class="inline-flex items-center ml-6">
                            <input type="radio" id="female" name="gender" value="female" class="form-radio h-4 w-4 text-indigo-600" required>
                            <span class="ml-2">Female</span>
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="num" class="block text-sm font-medium text-gray-700">Mobile No</label>
                    <input type="number" id="num" name="num" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="date" class="block text-sm font-medium text-gray-700">Date:</label>
                    <input type="date" id="date" name="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="mb-4">
                    <label for="number" class="block text-sm font-medium text-gray-700">Fees Paid</label>
                    <input type="number" id="fees" name="fees" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="w-full bg-indigo-500 text-white py-2 px-4 rounded hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">Register</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Members Adding Form End -->
    
<div id="myform2"style="padding-left:4rem;padding-top:3rem;display:none"> 
<input style="padding-left:8rem; width:35%;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> 
<?php
include('connect.php');
$sql = "SELECT mmid,mmname,mmemail, mmmob FROM meesmembers  where mid='$abc'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='width:50rem' id='myTable'><tr><th>No</th><th>Member Name</th><th>Email</th><th>Mobile No</th>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        
        
        echo "<tr><td>" . $row["mmid"] . "</td><td>" . $row["mmname"] . "</td><td>" . $row["mmemail"] . "</td><td> " . $row["mmmob"] ."</td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();

 ?>

    </div>
</div>

</body>
</html>

    </div>
</body>

<!-- SELECT COUNT(*) AS total_rows FROM meesmembers Where mid=4 -->