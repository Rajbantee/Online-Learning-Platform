<?php
require_once '../model/model.php'; 


$db = new Database(); //creating instance of Database class


$courses = $db->get_courses();

function availableCourses() {
    global $db;
    return $db->get_courses();
}

function getMyCourses($username) {
    global $db;
    return $db->getMyCourses($username);
}

function getCoursesByIds($id) {
    global $db;
    return $db->get_course($id);
}

function add_mycourses($data) {
    global $db;
    $db->set_MyCourse($data['Own_id'], $data['C_id'], $data['L_id']);
}

?>
