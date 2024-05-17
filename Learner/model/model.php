<?php
require_once 'db_connect.php';  

class Database {
    private $conn;

    function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "learner");
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
    

    function insertUser($username, $password, $email, $access) {
        $stmt = $this->conn->prepare("INSERT INTO users (username, password, email, access) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $password, $email, $access);
        $stmt->execute();
        $stmt->close();
    }

    function checkLogin($username) {
        $stmt = $this->conn->prepare("SELECT username, password, access FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $result;
    }
    

    function get_courses() {
        $result = $this->conn->query("SELECT * FROM courses");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    

    function get_course($id) {
        $stmt = $this->conn->prepare("SELECT * FROM courses WHERE C_id = ?");
        $stmt->bind_param("s", $id);  
        $stmt->execute();
        $result = $stmt->get_result()->fetch_assoc();
        $stmt->close();
        return $result;
    }
    
    function set_MyCourse($own_id, $c_id, $l_id) {
        
        $stmt = $this->conn->prepare("INSERT INTO courseownership (Own_id, C_id, L_id) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $own_id, $c_id, $l_id);
        $stmt->execute();
        $stmt->close();
    }
    
    function getMyCourses($userId) {
        $stmt = $this->conn->prepare("SELECT courses.* FROM courses JOIN courseownership ON courses.C_id = courseownership.C_id WHERE courseownership.L_id = ?");
        $stmt->bind_param("s", $userId);
        $stmt->execute();
        $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $result;
    }
    
    function add_mycourses($data, $db) {
        $db->set_MyCourse($data['Own_id'], $data['C_id'], $data['L_id']);
    }
    
    function uuidExists($uuid) {
        $stmt = $this->conn->prepare("SELECT 1 FROM courseownership WHERE Own_id = ?");
        $stmt->bind_param("s", $uuid);
        $stmt->execute();
        $result = $stmt->get_result();
        $exists = $result->num_rows > 0;
        $stmt->close();
        return $exists;
    }
    
    function getCourseById($id) {
        return $this->get_course($id);
    } 

    function set_learner($username, $Name) {
        $stmt = $this->conn->prepare("INSERT INTO learners (username, Name) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $Name);
        $stmt->execute();
        $stmt->close();
    }
    
    function __destruct() {
        $this->conn->close();
    }
    function doesUsernameExist($username) {
        $stmt = $this->conn->prepare("SELECT username FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $exists = $result->num_rows > 0;  
        $stmt->close();
        return $exists;
    }
    function userOwnsCourse($userId, $courseId) {
        $stmt = $this->conn->prepare("SELECT 1 FROM courseownership WHERE L_id = ? AND C_id = ?");
        $stmt->bind_param("ss", $userId, $courseId);
        $stmt->execute();
        $result = $stmt->get_result();
        $owns = $result->num_rows > 0;
        $stmt->close();
        return $owns;
    }
      
}

?>
