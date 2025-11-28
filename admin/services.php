<?php
session_start();

// Role-based access control
if (!isset($_SESSION['user_role']) || !in_array($_SESSION['user_role'], ['admin', 'staff'])) {
    header('Location: ../login.php');
    exit;
}

include('../functions/functions.php');
$servicesModule = new ServicesModule();
$services = $servicesModule->fetchServices();

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $location = $_POST['location'];

    // Handle file upload
    $filename = $_FILES["image"]["name"];
    $targetDir = "../uploads/services/";
    $targetFile = $targetDir . basename($filename);
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['image']['tmp_name'];
    if (!in_array($extension, ['png', 'jpg', 'jpeg', 'gif'])) {
        echo "
        <script>
            alert('Invalid file type. Only PNG, JPG, JPEG, and GIF are allowed.');
            window.location.href = 'services.php';
        </script>
        ";
        exit();
    } else {
        if (move_uploaded_file($file, $targetFile)) {
            $servicesModule->createService($title, $content, $location, $filename);
            echo "
            <script>
                alert('Service added successfully.');
                window.location.href = 'services.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Error uploading file.');
                window.location.href = 'services.php';
            </script>
            ";
        }
    }
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - BCNHS</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <?php include('../includes/summernote.php'); ?>

</head>

<body>
    <?php include('../includes/header.php') ?>

    <div class="admin-body">
        <?php include('../includes/admin_sidebar.php') ?>

        <!-- Main Content -->
        <main class="admin-main">
            <!-- Top Bar -->
            <div class="admin-topbar">
                <div class="topbar-left">
                    <h1 class="page-title">Dashboard</h1>
                </div>
                <div class="topbar-right">

                    <div class="admin-profile">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop"
                            alt="Admin" class="profile-avatar">
                        <span class="profile-name">Admin</span>
                    </div>
                </div>
            </div>
            <!-- Dashboard Content -->
            <div class="admin-content">
                <!-- Add Service Card -->
                <div style="background: var(--color-surface); border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(12, 22, 43, 0.08); margin-bottom: 2rem;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">Add Service</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div style="margin-bottom: 1rem;">
                            <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Service Title</label>
                            <input type="text" name="title" placeholder="Enter Service Title" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
                        </div>
                        <div style="margin-bottom: 1rem;">
                            <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Content</label>
                            <textarea name="content" placeholder="Enter Service Content" required class="summernote" style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box; min-height: 100px;"></textarea>
                        </div>
                        <div style="margin-bottom: 1rem;">
                            <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Location</label>
                            <input type="text" name="location" placeholder="Enter Service Location" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Image</label>
                            <input type="file" name="image" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" style="padding: 0.75rem 2rem; font-weight: 600;">Add Service</button>
                    </form>
                </div>

                <!-- List of Services Card -->
                <div style="background: var(--color-surface); border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(12, 22, 43, 0.08);">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">List of Services</h2>
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); color: white;">
                            <tr>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Title</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Location</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Image</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($services as $service) { ?>
                                <tr style="border-bottom: 1px solid var(--color-border); transition: background 0.3s ease;">
                                    <td style="padding: 1rem; color: var(--color-text);"><?php echo $service['title'] ?></td>
                                    <td style="padding: 1rem; color: var(--color-text);"><?php echo $service['location'] ?></td>
                                    <td style="padding: 1rem;"><img src="../uploads/services/<?php echo $service['imgPath'] ?>" alt="<?php echo $service['title'] ?>" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;"></td>
                                    <td style="padding: 1rem;">
                                        <a href="editService.php?id=<?php echo $service['id'] ?>" class="btn btn-tertiary" style="padding: 0.5rem 1rem; margin-right: 0.5rem; border-radius: 6px; text-decoration: none;">Edit</a>
                                        <a href="deleteService.php?id=<?php echo $service['id'] ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this service?');" style="padding: 0.5rem 1rem; border-radius: 6px; text-decoration: none;">Delete</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </div>

        </main>
    </div>

    <?php
    $path = "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";
    include('../includes/footer.php'); ?>
    
    <script>
        function uploadImage(file, editor) {
            const formData = new FormData();
            formData.append('image', file);
            
            $.ajax({
                url: '../upload-image.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    const data = JSON.parse(response);
                    if (data.success) {
                        editor.summernote('insertImage', data.url);
                    } else {
                        alert('Image upload failed: ' + data.error);
                    }
                },
                error: function() {
                    alert('Error uploading image');
                }
            });
        }
    </script>
</body>

</html>
