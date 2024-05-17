<?php
include '../model/dbconnection.php';

$mydb= new Model();
    $conobj= $mydb->OpenCon();
    $result=$mydb->fetchCourses($conobj,"tblstudent");

if (mysqli_num_rows($result) > 0) {
    $data = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }

    $json_data = json_encode($data);

    $file_path = 'data.json';

    if (file_put_contents($file_path, $json_data)) {
        echo "Data has been successfully stored in $file_path";
    } else {
        echo "Error writing data to $file_path";
    }
} else {
    echo "No data found in the database";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Data</title>

</head>
<body>
<?php include_once('includes/header.php');?>
<div class="container-fluid page-body-wrapper">
    <?php include_once('includes/sidebar.php');?>

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Search Course </h3>
             
                <strong>Search Course BY Course ID:</strong>

<input type="text" id="searchInput" placeholder="Enter Course ID">

<button class="btn btn-primary" onclick="searchData()">Search</button>
<div class="table-responsive border rounded p-1">
<table class="table" id="searchTable" style="display:none;">
                                    <thead>
                                        <tr>
                                        
                                            <th class="font-weight-bold">Course Name</th>
                                            <th class="font-weight-bold">Category</th>
                                            <th class="font-weight-bold">Course ID</th>
                                            <th class="font-weight-bold">Price</th>
                                            <th class="font-weight-bold">Course Details</th>
                                            <th class="font-weight-bold">DateofAdding</th>
                                        </tr>
                                    </thead>
    <tbody id="searchResult"></tbody>
</table>

<script>
function searchData() {
    var searchKeyword = document.getElementById('searchInput').value;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var data = JSON.parse(this.responseText);
            var searchResult = '';

            for (var i = 0; i < data.length; i++) {
                if (data[i].CourseID === searchKeyword) {
                    searchResult += '<tr>';
                    searchResult += '<td>' + data[i].CourseName + '</td>';
                    searchResult += '<td>' + data[i].Category + '</td>';
                    searchResult += '<td>' + data[i].CourseID + '</td>';
                    searchResult += '<td>' + data[i].Price + '</td>';
                    searchResult += '<td>' + data[i].CourseDetails + '</td>';
                    searchResult += '<td>' + data[i].DateofAdding + '</td>';
                    searchResult += '</tr>';
                }
            }

            var table = document.getElementById('searchTable');
            table.style.display = 'block';
            document.getElementById('searchResult').innerHTML = searchResult || '<tr><td colspan="4">No matching course found.</td></tr>';
        }
    };

    xhttp.open("GET", "data.json", true);
    xhttp.send();
}
</script>
</div>
</div>
</body>
</html>
