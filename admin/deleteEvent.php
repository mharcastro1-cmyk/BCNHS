<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$eventsModule = new EventsModule();

if (!isset($_GET['id'])) {
    echo "
    <script>
        alert('No event selected.');
        window.location.href = 'events.php';
    </script>";
    exit();
}

$id = $_GET['id'];
$eventsModule->deleteEvent($id);

echo "
<script>
    alert('Event deleted successfully.');
    window.location.href = 'events.php';
</script>";
exit();
