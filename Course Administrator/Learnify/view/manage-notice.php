<?php include_once('../controller/managecontrol3.php');?>
    
     <?php include_once('includes/header.php');?>
    
      <div class="container-fluid page-body-wrapper">
 
        <?php include_once('includes/sidebar.php');?>
     
        <div class="main-panel">
          <div class="content-wrapper">
             <div class="page-header">
              <h3 class="page-title"> Manage Notice </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Manage Notice</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                      <h4 class="card-title mb-sm-0">Manage Notice</h4>
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"> View all Notice</a>
                    </div>
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">S.No</th>
                            <th class="font-weight-bold">Notice ID</th>
                            <th class="font-weight-bold">Notice Title</th>
                            <th class="font-weight-bold">Notice For</th>
                            <th class="font-weight-bold">Notice Message</th>
                            <th class="font-weight-bold">Notice Date</th>
                            <th class="font-weight-bold">Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                $cnt=1;
               
               
                foreach ($result as $notice) {
                    echo "<tr>";
                    echo "<td>" . htmlentities($cnt) . "</td>";
                    echo "<td>" . $notice['NoticeID'] . "</td>";
                    echo "<td>" . $notice['NoticeTitle'] . "</td>";
                    echo "<td>" . $notice['NoticeFor'] . "</td>";
                    echo "<td>" . $notice['NoticeMessage'] . "</td>";
                    echo "<td>" . $notice['CreationDate'] . "</td>";
                    echo "<td>
                    <form method='post'>
                    <a href='edit-notice-detail.php?notice_id=". $notice['NoticeID'] ."' class='btn btn-primary btn-sm'><i class='icon-eye'></i></a>
                                <input type='hidden' name='notice_id' value='" . $notice['NoticeID'] . "' >
                                <button type='submit' class='btn btn-danger btn-sm' name='delete_note' onclick='return confirm('Do you really want to Delete ?');'><i class='icon-trash'></i></button>
                            </form>
                          </td>";
                    echo "</tr>" ;
                    $cnt=$cnt+1;
                }
                ?></tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
          </div>
         
         <?php include_once('includes/footer.php');?>
       
        </div>
      
      </div>
     
    </div>
    