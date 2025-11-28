<?php
include('../functions/functions.php');

if (isset($_GET['id'])) {
    $usersModule = new UsersModule();
    $usersModule->deleteUser($_GET['id']);
}

header('Location: users.php');
exit;
?>