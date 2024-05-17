<?php
class Model
{

    function OpenCon(){
      $conn= new mysqli("localhost","root","","eduauth");
      return $conn;
    }
    
     //Login
     function checkLoginCredentials ($conn,$table,$username,$password)
     {
         $sql = "SELECT Password FROM tbladmin WHERE UserName='$username'";
       $result= $conn->query($sql);
       return $result;
     }

         //create Categories
    function createCategories($conn,$table,$cname,$cid)
    {
      $sql = "INSERT INTO $table (CategoryName, CategoryID) VALUES ('$cname', '$cid')";
      $result = $conn->query($sql);
      return $result;
    }

      //addCourse
      function addCourse($conn,$table,$courseName,$category,$courseID,$coursePrice,$courseDetails)
      {
        $sql = "INSERT INTO $table (CourseName, Category, CourseID, Price, CourseDetails) VALUES 
        ('$courseName', '$category', '$courseID', '$coursePrice', '$courseDetails')";
        $result = $conn->query($sql);
        return $result;
      }

      //addNotice
      function addNotice($conn,$table,$noteTitle,$noticeID,$noticeFor,$noticeMsg)
      {
        $sql = "INSERT INTO $table (NoticeTitle, NoticeID, NoticeFor, NoticeMessage) VALUES
         ('$noteTitle', '$noticeID','$noticeFor', '$noticeMsg')";
        $result = $conn->query($sql);
        return $result;
      }

      //addInstructor
      function addInstructor($conn,$table,$uname,$faculty,$department,$spl,$stuid){
      $sql = "INSERT INTO $table (name,faculty,department,specialization,email)values
              ('$uname','$faculty','$department','$spl','$stuid')";
      $result = $conn->query($sql);
      return $result;
      }
//registration
    function AddManager($conn, $table, $name, $username, $phone,  $email, $password_hash)
    {
        $sql = "INSERT INTO $table (AdminName, UserName, MobileNumber,  Email, Password) 
        VALUES ('$name', '$username', '$phone',  '$email', '$password_hash')";
          $result= $conn->query($sql);
          return $result;
    }
    
    //SignUp
    function SignUp($conn, $table, $name, $email, $password, $gender, $phone){
      $sql="INSERT INTO $table (name, email, password, gender, phone) VALUES  ('$name', '$email', '$password', '$gender', '$phone')";
      $result= $conn->query($sql);
      return $result;
    }
   

    
     //viewAllCategories
     function fetchCategories($conn,$table)
     {
       $sql="SELECT * FROM $table";
       $result=$conn->query($sql);
       return $result;
     }

     function deleteCategory($conn, $table, $categoryID) {
        $sql = "DELETE FROM $table WHERE CategoryID='$categoryID'";
        return $conn->query($sql);
    }

    function fetchCourses($conn,$table) {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }

    function fetchNotices($conn, $table) {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }

       // Function to fetch course data
       function fetchInstructors($conn,$table) {
        $sql = "SELECT * FROM $table";
        $result = $conn->query($sql);
        return $result;
    }

    //removeCourse
    function deleteCourse($conn,$courseID){
      $sql = "DELETE FROM tblstudent WHERE CourseID=$courseID";
      $result = $conn->query($sql);
      return $result;
    }

    function updateCategory($conn,$categoryName, $categoryID) {
        $sql = "UPDATE tblclass SET CategoryName='$categoryName', CategoryID='$categoryID' WHERE CategoryID='$categoryID'";
        return $conn->query($sql);
    }
     

    //updateCourse
    function updateCourse($conn,$table,$courseID,$courseName,$category,$courseDetails,$coursePrice){
      $sql = "UPDATE $table SET CourseID='$courseID',CourseName='$courseName',Category='$category',
              CourseDetails='$courseDetails',CoursePrice='$coursePrice' WHERE CourseID=$courseID";
      $result = $conn->query($sql);
      return $result;
    }
    
  }
?>