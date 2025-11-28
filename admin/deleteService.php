<?php
include('../functions/functions.php');
$servicesModule = new ServicesModule();

$id = $_GET['id'];
$servicesModule->deleteService($id);
header("Location: services.php");
?>
