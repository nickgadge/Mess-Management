<!-- <?php
session_start();
// echo $_SESSION['msession'];
$abc = $_SESSION['msession'];
include('connect.php');
$sql = "SELECT mmid,mmname,mmmob,mmdate,mmfees FROM meesmembers Where mmfees<2000 and mid='$abc'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {


        $amt = $row["mmfees"];
        $remamt = 2000 - $amt;
       
        echo "<tr><td>" . $row["mmid"] . "</td><td>" . $row["mmname"] . "</td><td> " . $row["mmmob"] . "</td><td>" . $row["mmdate"] . "</td><td>" . $row["mmfees"] . "</td><td> " . $remamt . "</td>" . "<td><a style='text-decoration:none;' href='feepayform.php?mno=" . $abc . " &topay= " . $remamt . " &uno=" . $row['mmid'] . "'>Pay Fees</a> </td></td>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>  -->
<script src="https://cdn.tailwindcss.com"></script>
<body class="bg-green-100">
<div class="container mx-auto p-6">
<div style="padding-left:20rem;;"> <input style="padding-left:40px;size: 100px;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><br><br><br>
    <div class="overflow-x-auto">
        <table id="myTable" class="table-auto min-w-full border divide-y divide-gray-200">
            <thead>
                <tr class="bg-red-100">
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mob No.</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Fees Paid</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Remaining Fees</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Fees</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <?php
           
            // echo $_SESSION['msession'];
            $abc = $_SESSION['msession'];
            include('connect.php');
            $sql = "SELECT mmid,mmname,mmmob,mmdate,mmfees FROM meesmembers Where mmfees<2000 and mid='$abc'";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    $amt = $row["mmfees"];
                    $remamt = 2000 - $amt;
                    $totamt='2000';
                    echo "<tr class='bg-white divide-gray-200'>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['mmid'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['mmname'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['mmmob'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $row['mmfees'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $remamt . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . $totamt . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap blue=200 text-blue-500'><a style='text-decoration:none;' href='feepayform.php?mno=" . $abc . " &topay= " . $remamt . " &uno=" . $row['mmid'] . "'>Pay Fees</a> </td>";
                    echo "</tr>";
                }
            }
            $conn->close();
            ?>
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
