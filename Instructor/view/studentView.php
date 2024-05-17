<?php
  session_start();
  include('../Controller/header.php');
  include('../Controller/authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student View</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
</head>
<body>


<?php
include('../model/Connect.php');
$conn = connect();
?>

<div class="container mt-4">
    
    <h6 class="mt-5"><b>Search</b></h6>
    <div class="input-group mb-4 mt-3">
         <div class="form-outline">
            <input type="text" id="getName"/>
        </div>
    </div> 


    <table class="table table-striped">
        <thead>
          <tr>
            <th>Student ID</th>
            <th>Name</th>
            <th>Session</th>
            <th>Date of Birth</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody id="showdata">
          <?php  
                $sql = "SELECT * FROM students";
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($query))
                {
                  echo"<tr>";
                   echo"<td><h6>".$row['sId']."</h6></td>";
                   echo"<td><h6>".$row['name']."</h6></td>";
                   echo"<td>".$row['session']."</td>";
                   echo"<td>".$row['dob']."</td>";
                   echo"<td>".$row['address']."</td>";
                  echo"</tr>";   
                }
            ?>
        </tbody>
    </table>
</div>


<script>
  $(document).ready(function(){
   $('#getName').on("keyup", function(){
     var getName = $(this).val();
     $.ajax({
       method:'POST',
       url:'../Controller/studentSearch.php',
       data:{name:getName},
       success:function(response)
       {
            $("#showdata").html(response);
       } 
     });
   });
  });
</script>


</body>
</html>