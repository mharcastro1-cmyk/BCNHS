<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$subjectModule = new SubjectModule();

if (!isset($_GET['id'])) {
    echo "
    <script>
        alert('No subject selected.');
        window.location.href = 'learning_resources.php';
    </script>";
    exit();
}

$id = $_GET['id'];
$subjectModule->deleteSubject($id);

echo "
<script>
    alert('Subject deleted successfully.');
    window.location.href = 'learning_resources.php';
</script>";
exit();
