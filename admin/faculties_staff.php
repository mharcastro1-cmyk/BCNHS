<?php
include('../functions/functions.php');
$facultyModule = new FacultyStaffModule();
$fname = new FacultyModule();
$fetch = $fname->fetchFaculty();
$faculties = $facultyModule->fetchFacultyStaff();

if(isset($_POST['add'])) {
    $facultyName = $_POST['facultyName'];
    $fname->createFaculty($facultyName);
    echo "
    <script>
        alert('Faculty added successfully.');
        window.location.href = 'faculties_staff.php';
    </script>";
    exit();
}

if (isset($_POST['submit'])) {
    $faculty = $_POST['faculty'];
    $name = $_POST['name'];
    $position = $_POST['position'];

    // Handle file upload
    $filename = $_FILES["photo"]["name"];
    $targetDir = "../uploads/faculty/";
    $targetFile = $targetDir . basename($filename);
    $extension = pathinfo($filename, PATHINFO_EXTENSION);
    $file = $_FILES['photo']['tmp_name'];
    if (!in_array($extension, ['mp4', 'png', 'jpg', 'jpeg'])) {
        echo "
        <script>
            alert('Invalid file type. Only MP4, PNG, JPG, and JPEG are allowed.');
            window.location.href = 'faculties_staff.php';
        </script>
        ";
        exit();
    } else {
        if (move_uploaded_file($file, $targetFile)) {
            $facultyModule->createFacultyStaff($faculty, $name, $position, $filename);
            echo "
            <script>
                alert('Faculty/Staff added successfully.');
                window.location.href = 'faculties_staff.php';
            </script>";
        } else {
            echo "
            <script>
                alert('Error uploading file.');
                window.location.href = 'faculties_staff.php';
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
                <!-- Faculty Management: 2 Column Layout -->
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; margin-bottom: 2rem; height: 300px;">
                    <!-- Left Column: Add Faculty Form -->
                    <div style="background: var(--color-surface); border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(12, 22, 43, 0.08); height: fit-content;">
                        <h2 style="font-size: 1.8rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">Add Faculty</h2>
                        <form action="" method="post">
                            <div style="margin-bottom: 1rem;">
                                <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Faculty Name</label>
                                <input type="text" name="facultyName" placeholder="Enter Faculty Name" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
                                <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin-top: 0.25rem;">Enter the name of a new faculty/department</p>
                            </div>
                            <button type="submit" name="add" class="btn btn-primary" style="padding: 0.75rem 2rem; font-weight: 600;">Add Faculty</button>
                        </form>
                    </div>

                    <!-- Right Column: List of Faculties -->
                    <div style="background: var(--color-surface); border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(12, 22, 43, 0.08); display: flex; flex-direction: column; height: 300px; overflow: scroll;">
                        <h2 style="font-size: 1.8rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">List of Faculties</h2>
                        <div style="flex: 1; overflow-y: auto; min-height: 0;">
                            <div style="display: flex; flex-direction: column; gap: 1rem;">
                                <?php foreach ($fetch as $fetches) { ?>
                                    <div style="background: var(--color-background); border: 1px solid var(--color-border); border-radius: 8px; padding: 1.5rem; display: flex; justify-content: space-between; align-items: center;">
                                        <div>
                                            <h3 style="font-size: 1.1rem; font-weight: 600; color: var(--color-text); margin: 0; margin-bottom: 0.5rem;"><?php echo $fetches['name'] ?></h3>
                                            <p style="font-size: 0.875rem; color: var(--color-text-secondary); margin: 0;">Faculty/Department</p>
                                        </div>
                                        <div style="display: flex; gap: 0.5rem; flex-shrink: 0;">
                                            <a href="editFacul.php?id=<?php echo $fetches['id'] ?>" class="btn btn-tertiary" style="padding: 0.5rem 1rem; border-radius: 6px; text-decoration: none; font-size: 0.875rem;">Edit</a>
                                            <a href="deleteFacul.php?id=<?php echo $fetches['id'] ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this faculty?');" style="padding: 0.5rem 1rem; border-radius: 6px; text-decoration: none; font-size: 0.875rem;">Delete</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add Staff Card -->
                <div style="background: var(--color-surface); border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(12, 22, 43, 0.08); margin-bottom: 2rem;">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">Add Staff</h2>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div style="margin-bottom: 1rem;">
                            <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Faculty Name</label>
                            <select name="faculty" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box; background-color: white; color: var(--color-text);">
                                <option value="">-- Select Faculty --</option>
                                <?php foreach ($fetch as $fetches) { ?>
                                    <option value="<?php echo $fetches['id'] ?>"><?php echo $fetches['name'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div style="margin-bottom: 1rem;">
                            <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Staff Name</label>
                            <input type="text" name="name" placeholder="Enter the Name" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
                        </div>
                        <div style="margin-bottom: 1rem;">
                            <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Position</label>
                            <input type="text" name="position" placeholder="Enter the Position" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
                        </div>
                        <div style="margin-bottom: 1.5rem;">
                            <label style="display: block; font-weight: 600; color: var(--color-text); margin-bottom: 0.5rem;">Photo</label>
                            <input type="file" name="photo" required style="width: 100%; padding: 0.75rem; border: 1px solid var(--color-border); border-radius: 8px; font-size: 1rem; box-sizing: border-box;">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary" style="padding: 0.75rem 2rem; font-weight: 600;">Add Faculty/Staff</button>
                    </form>
                </div>

                <!-- List of Staff Card -->
                <div style="background: var(--color-surface); border-radius: 12px; padding: 2rem; box-shadow: 0 4px 12px rgba(12, 22, 43, 0.08);">
                    <h2 style="font-size: 1.8rem; font-weight: 700; color: var(--color-text); margin-bottom: 1.5rem;">List of Staff Members</h2>
                    <table style="width: 100%; border-collapse: collapse;">
                        <thead style="background: linear-gradient(135deg, var(--color-primary), var(--color-secondary)); color: white;">
                            <tr>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Faculty</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Name</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Position</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Photo</th>
                                <th style="padding: 1rem; text-align: left; font-weight: 600; border: none;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($faculties as $faculty) { ?>
                                <tr style="border-bottom: 1px solid var(--color-border); transition: background 0.3s ease;">
                                    <td style="padding: 1rem; color: var(--color-text);"><?php echo $faculty['faculty_name'] ?></td>
                                    <td style="padding: 1rem; color: var(--color-text);"><?php echo $faculty['name'] ?></td>
                                    <td style="padding: 1rem; color: var(--color-text);"><?php echo $faculty['position'] ?></td>
                                    <td style="padding: 1rem;"><img src="../uploads/faculty/<?php echo $faculty['imgPath'] ?>" alt="<?php echo $faculty['name'] ?>" style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover;"></td>
                                    <td style="padding: 1rem;">
                                        <a href="editFaculty.php?id=<?php echo $faculty['id'] ?>" class="btn btn-tertiary" style="padding: 0.5rem 1rem; margin-right: 0.5rem; border-radius: 6px; text-decoration: none;">Edit</a>
                                        <a href="deleteFaculty.php?id=<?php echo $faculty['id'] ?>" class="btn btn-primary" onclick="return confirm('Are you sure you want to delete this faculty/staff member?');" style="padding: 0.5rem 1rem; border-radius: 6px; text-decoration: none;">Delete</a>
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
</body>

</html>