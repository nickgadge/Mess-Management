<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<div id="myform2"style="padding-left:4rem;padding-top:3rem;display:none"> 
<input style="padding-left:8rem; width:35%;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"> 
<?php
session_start();
$_SESSION['messname'] . '<br>.';
$abc = $_SESSION['msession'];

include('connect.php');
$sql = "SELECT mmid,mmname,mmemail,mmmob FROM meesmembers  where mid='$abc'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table style='width:50rem' id='myTable'><tr><th>No</th><th>Member Name</th><th>Email</th><th>Mobile No</th>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {


        echo "<tr><td>" . $row["mmid"] . "</td><td>" . $row["mmname"] . "</td><td>" . $row["mmemail"] . "</td><td> " . $row["mmmob"] . "</td>";
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
 -->
<script src="https://cdn.tailwindcss.com"></script>




<div class=" bg-green-100 flex justify-center items-center h-screen">

<div style="padding-left:10rem;;"> <input style="padding-left:40px;size: 100px;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><br><br><br>
    <div class="overflow-x-auto center pl-16 ">
        <table  id="myTable"class="table-auto w-['25%'] pt-8 divide-gray-200">
            <thead>
                <tr class="bg-red-100">
                    <th class="px-6 py-3 text-left text-xl font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                    <th class="px-6 py-3 text-left text-xl font-medium text-gray-500 uppercase tracking-wider"> User Name</th>
                    <th class="px-6 py-3 text-left text-xl  font-medium text-gray-500 uppercase tracking-wider"> Email</th>
                    <th class="px-6 py-3 text-left text-xl  font-medium text-gray-500 uppercase tracking-wider">Mobile No. </th>
                 <th class="px-6 py-3 text-left text-xl  font-medium text-gray-500 uppercase tracking-wider">Join Date</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-gray-200">

                <?php
                $_SESSION['messname'] . '<br>.';
                $abc = $_SESSION['msession'];
                
                include('connect.php');
                $sql = "SELECT mmid,mmname,mmemail,mmmob,mmdate FROM meesmembers  where mid='$abc'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr class='hover:bg-gray-100 '>";
                        echo "<td class='px-6 py-4   whitespace-nowrap'>" . $row['mmid'] . "</td>";
                        echo "<td class='px-6 py-4  hover:bg-gray-100 whitespace-nowrap'>" . $row['mmname'] . "</td>";
                        echo "<td class='px-6 py-4 hover:bg-gray-100  whitespace-nowrap'>" . $row['mmemail'] . "</td>";
                        echo "<td class='px-6 py-4 hover:bg-gray-100  whitespace-nowrap'>" . $row['mmmob'] . "</td>";
                        echo "<td class='px-6 py-4 hover:bg-gray-100  whitespace-nowrap'>" . $row['mmdate'] . "</td>";
                        
                        echo "</tr>";
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
        function myFunction() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[1];
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>