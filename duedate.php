<script src="https://cdn.tailwindcss.com"></script>
<script>
    var x;
        x=document.getElementById("duedate"); 
       alert(x);
    </script>
<body class="bg-green-100">
<div class="container mx-auto p-6">
<div style="padding-left:10rem;"><Form action="" method="POST"><input type="date" id="duedate" name="duedate"><input type="submit" name="submit" value="Search"></Form> 
<input style="padding-left:40px;size: 100px;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><br><br><br>
    <div class="overflow-x-auto ">
        <table id="myTable" class="table-auto min-w-full divide-y divide-gray-200">
            <thead>
                <tr class="bg-red-100">
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Due Date</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-gray-200">
<?php
session_start();

include("connect.php");
$abc = $_SESSION['msession'];

// echo $duedate;

$sql = "SELECT mmid,mmname, mmdate FROM meesmembers  WHERE mid='$abc' order by mmdate";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    // echo "<table style='width:50rem' id='myTable'><tr><th>No</th><th>Member Name</th><th>Join Date</th><th>Due Date</th>";
    while ($row = $result->fetch_assoc()) {
    $dateString = $row["mmdate"]; 
    $date = new DateTime($dateString);


    $date->modify("+1 month");


    $modifiedDateString = $date->format('Y-m-d'); 

    echo "<tr>";
    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row["mmid"] . "</td>";
    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row["mmname"] . "</td>";
    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row["mmdate"] . "</td>";
    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $modifiedDateString . "</td>";

    // echo "</tr>"; echo "<tr><td>" . $row["mmid"] . "</td><td>" . $row["mmname"] . "</td><td>" . $row["mmdate"] . "</td><td> " . $modifiedDateString ."</td>";
    }
    echo "</table>";



}
 else {
    echo "No results found";
}


?> 
</tbody>
</tbody>
        
</table>
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
</body>
<!-- <div class="container mx-auto p-6">

    <div class="overflow-x-auto">
        <table class="table-auto min-w-full divide-y divide-gray-200">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"> Due Date</th>
                </tr>
            </thead> -->
            <tbody class="bg-white divide-y divide-gray-200">
                
                <?php
            
            
            //    include('connect.php');
            //    $sql = "SELECT mmid,mmname, mmdate FROM meesmembers  WHERE mid='$abc' order by mmdate";
            //     $result = $conn->query($sql);

            //     if ($result->num_rows > 0) {
            //         while ($row = $result->fetch_assoc())
            //             $dateString = $row["mmdate"];
            //         $date = new DateTime($dateString);


            //         $date->modify("+1 month");


            //         $modifiedDateString = $date->format('Y-m-d'); 
            //         echo "<tr>";
            //             echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row["mmid"] . "</td>";
            //             echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['mmname'] . "</td>";
            //             echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['mmdate'] . "</td>";
            //             echo "<td class='px-6 py-4 whitespace-nowrap'>" . $modifiedDateString . "</td>";

            //             echo "</tr>";
            //         }
                
                $conn->close();
                ?>
           
    </div>
</div>