<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$servicesModule = new ServicesModule();

$id = $_GET['id'];
$servicesModule->deleteService($id);
header("Location: services.php");
?>
