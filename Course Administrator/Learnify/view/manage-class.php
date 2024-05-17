
<?php include_once('../controller/managecontrol.php');?>

     <?php include_once('includes/header.php');?>
  
      <div class="container-fluid page-body-wrapper">
      
        <?php include_once('includes/sidebar.php');?>
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="page-header">
              <h3 class="page-title"> Manage Categories </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Manage Categories</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Categories</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Categories</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Category Name</th>
                            <th class="font-weight-bold">Category ID</th>
                            <th class="font-weight-bold">Adding Time</th>
                            <th class="font-weight-bold">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                <?php
                // Fetch and display course data
                $cnt=1;
                
                foreach ($result as $category) {
                    echo "<tr>";
                    echo "<td>" . htmlentities($cnt) . "</td>";
                    echo "<td>" . $category['CategoryName'] . "</td>";
                    echo "<td>" . $category['CategoryID'] . "</td>";
                    echo "<td>" . $category['CreationDate'] . "</td>";
                    echo "<td>
                    <form method='post'>
                    <a href='edit-class-detail.php?cid=". $category['CategoryID'] ."' class='btn btn-primary btn-sm'><i class='icon-eye'></i></a>
                                <input type='hidden' name='category_id' value='" . $category['CategoryID'] . "' >
                                <button type='submit' class='btn btn-danger btn-sm' name='delete_category' onclick='return confirm('Do you really want to Delete ?');'><i class='icon-trash'></i></button>
                            </form>
                          </td>";
                    echo "</tr>" ;
                    $cnt=$cnt+1;
                }
                ?>
            </tbody>
        </table>
    </div>

</body>
</html>
 