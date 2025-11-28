<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$facultyModule = new FacultyModule();

$id = $_GET['id'];
$facultyModule->deleteFaculty($id);
header("Location: faculties_staff.php");
?>
