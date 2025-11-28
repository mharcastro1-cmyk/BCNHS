<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$facultyModule = new FacultyStaffModule();

$id = $_GET['id'];
$facultyModule->deleteFacultyStaff($id);
header("Location: faculties_staff.php");
?>