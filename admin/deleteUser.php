<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');

if (isset($_GET['id'])) {
    $usersModule = new UsersModule();
    $usersModule->deleteUser($_GET['id']);
}

header('Location: users.php');
exit;
?>