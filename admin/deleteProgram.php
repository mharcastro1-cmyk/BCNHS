<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$programsModule = new ProgramsModule();

$id = $_GET['id'];
$programsModule->deleteProgram($id);
header("Location: curricula_programs.php");
?>
