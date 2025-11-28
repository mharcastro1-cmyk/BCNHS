<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$resourcesModule = new ResourcesModule();

$id = $_GET['id'];
$resourcesModule->deleteResource($id);
header("Location: learning_resources.php");
?>
