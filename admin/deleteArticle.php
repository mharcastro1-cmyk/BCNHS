<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}

include('../functions/functions.php');
$articlesModule = new ArticlesModule();

if (!isset($_GET['id'])) {
    echo "
    <script>
        alert('No article selected.');
        window.location.href = 'articles.php';
    </script>";
    exit();
}

$id = $_GET['id'];
$articlesModule->deleteArticle($id);

echo "
<script>
    alert('Article deleted successfully.');
    window.location.href = 'articles.php';
</script>";
exit();
