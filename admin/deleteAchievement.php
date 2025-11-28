<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$achievementsModule = new AchievementsModule();

if (!isset($_GET['id'])) {
    echo "
    <script>
        alert('No achievement selected.');
        window.location.href = 'achievements.php';
    </script>";
    exit();
}

$id = $_GET['id'];
$achievementsModule->deleteAchievement($id);

echo "
<script>
    alert('Achievement deleted successfully.');
    window.location.href = 'achievements.php';
</script>";
exit();
