
  <?php
  include '../model/dbconnection.php';
session_start();

if (!isset($_SESSION['username']) && !isset($_COOKIE['user_login']) && !isset($_COOKIE['userpassword'])) {
    header('Location: logout.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $noticeID = $_POST['noticeID'];
    $noteTitle = $_POST['nottitle'];
    $noticeFor = $_POST['classid'];
    $noticeMsg = $_POST['notmsg'];
  

        $mydb= new Model();
        $conobj= $mydb->OpenCon();
        $result=$mydb->addNotice($conobj,"tblnotice",$_REQUEST["noticeID"],
        $_REQUEST["nottitle"],$_REQUEST["classid"],$_REQUEST["notmsg"]);

    if ($result=== TRUE) {
      header("Location: ../view/manage-notice.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

