<script src="https://cdn.tailwindcss.com"></script>

<?php include_once('superadminhome.php')?>
 

<div class="container mx-auto ">
    

<div class="overflow-x-auto center pl-16"style="background-image: linear-gradient(115deg, #9F7AEA, #FEE2FE)">
<div style="padding-left:10rem;;"> <input style="padding-left:40px;size: 100px;" type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"><br><br><br>    
<table id="myTable" class="table-auto w-['25%'] pt-4 divide-gray-200">
        <thead>
            <tr class="bg-red-100">
                <th class="px-6 py-3 text-left text-xl font-medium text-gray-500 uppercase tracking-wider">Mess ID</th>
                <th class="px-6 py-3 text-left text-xl font-medium text-gray-500 uppercase tracking-wider"> Mess Name</th>
                
                <th class="px-6 py-3 text-left text-xl  font-medium text-gray-500 uppercase tracking-wider"> Email</th>
                <th class="px-6 py-3 text-left text-xl  font-medium text-gray-500 uppercase tracking-wider"> Action</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-gray-200">
            
            <?php
            include('connect.php');
            $sql = "SELECT mid,mname,email FROM madmin";
                    $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc())
                   

               {
                    echo "<tr class='hover:bg-gray-100 '>";
                    echo "<td class='px-6 py-4   whitespace-nowrap'>" . $row['mid'] . "</td>";
                    echo "<td class='px-6 py-4  hover:bg-gray-100 whitespace-nowrap'>" . $row['mname'] . "</td>";
                    echo "<td class='px-6 py-4 hover:bg-gray-100  whitespace-nowrap'>" . $row['email'] . "</td>";
                    echo "<td class='px-6 py-4 whitespace-nowrap blue=200 text-blue-500'><a style='text-decoration:none;' href='useredit.php?abc=" . $row['mid'] . "'>Edit</a> &nbsp;&nbsp;<a style='text-decoration:none;' href='.php?abc=" . $row['mid'] . "'>Delete</a> </td>";
     
                    echo "</tr>";
                }
            }
            else {
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
              
             
                   
                   