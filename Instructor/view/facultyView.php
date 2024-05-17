<?php
  session_start();
  include('../Controller/header.php');
  include('../Controller/authentication.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Faculty View</title>
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
            <th>Name</th>
            <th>Faculty</th>
            <th>Department</th>
            <th>Specialization</th>
            <th>Email</th>
            <th>Room No</th>
          </tr>
        </thead>
        <tbody id="showdata">
          <?php  
                $sql = "SELECT * FROM facultys";
                $query = mysqli_query($conn,$sql);
                while($row = mysqli_fetch_assoc($query))
                {
                  echo"<tr>";
                   echo"<td><h6>".$row['name']."</h6></td>";
                   echo"<td><h6>".$row['faculty']."</h6></td>";
                   echo"<td>".$row['department']."</td>";
                   echo"<td>".$row['specialization']."</td>";
                   echo"<td>".$row['email']."</td>";
                   echo"<td>".$row['roomNo']."</td>";
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
       url:'../Controller/facultySearch.php',
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