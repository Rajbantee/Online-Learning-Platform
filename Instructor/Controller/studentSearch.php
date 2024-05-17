<?php 
  include("../model/Connect.php");
  $conn = connect();
  
   $name = $_POST['name'];
  
   $sql = "SELECT * FROM students WHERE name LIKE '%$name%' OR sId LIKE '%$name%' OR session LIKE '%$name%' OR dob LIKE '%$name%' OR address LIKE '%$name%'";  
   $query = mysqli_query($conn,$sql);
   $data='';
   while($row = mysqli_fetch_assoc($query))
   {
       $data .=  "<tr>
                    <td>".$row['sId']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['session']."</td>
                    <td>".$row['dob']."</td>
                    <td>".$row['address']."</td>
                  </tr>";
   }
    echo $data;
 ?>