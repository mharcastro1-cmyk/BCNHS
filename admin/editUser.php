<?php
session_start();
if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== 'admin') {
    header("Location: ../login.php");
    exit();
}
include('../functions/functions.php');

$usersModule = new UsersModule();

$user = null;
if (isset($_GET['id'])) {
    $user = $usersModule->getUser($_GET['id']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_user'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = !empty($_POST['password']) ? password_hash($_POST['password'], PASSWORD_BCRYPT) : $user['password'];
    $role = $_POST['role'];
    $usersModule->updateUser($id, $name, $email, $password, $role);
    header('Location: users.php');
    exit;
}

if (!$user) {
    die('User not found.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User - BCNHS</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('../includes/header.php') ?>
    
    <div class="admin-body">
        <?php include('../includes/admin_sidebar.php') ?>

        <main class="admin-main">
            <div class="admin-topbar">
                <div class="topbar-left">
                    <h1 class="page-title">Edit User</h1>
                </div>
            </div>

            <div class="admin-content">
                <section class="dashboard-section">
                    <form method="POST">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password (leave blank to keep current)</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="student" <?= $user['role'] === 'student' ? 'selected' : '' ?>>Student</option>
                                <option value="staff" <?= $user['role'] === 'staff' ? 'selected' : '' ?>>Staff</option>
                            </select>
                        </div>
                        <button type="submit" name="update_user" class="btn btn-primary">Update User</button>
                    </form>
                </section>
            </div>
        </main>
    </div>

    <?php
    $path = "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";
    include('../includes/footer.php');
    ?>
</body>
</html>