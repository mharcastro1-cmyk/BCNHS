<?php
session_start();

// Role-based access control
if (!isset($_SESSION['user_role']) || !in_array($_SESSION['user_role'], ['admin', 'staff'])) {
    header('Location: ../login.php');
    exit;
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
                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop" alt="Admin" class="profile-avatar">
                    <span class="profile-name">Admin</span>
                </div>
            </div>
        </div>

        <!-- Content Area -->
        <div class="admin-content">
            <!-- Overview Cards -->
            <section class="dashboard-section">
                <h2 class="section-title">Overview</h2>
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon bg-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <p class="stat-label">Total Students</p>
                            <h3 class="stat-value">1,245</h3>
                            <p class="stat-change">↑ 12% from last month</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon bg-secondary">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <p class="stat-label">Faculty Members</p>
                            <h3 class="stat-value">89</h3>
                            <p class="stat-change">↑ 3 new hires</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon bg-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2zM22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <p class="stat-label">Active Classes</p>
                            <h3 class="stat-value">32</h3>
                            <p class="stat-change">Across all programs</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon bg-success">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <p class="stat-label">Upcoming Events</p>
                            <h3 class="stat-value">8</h3>
                            <p class="stat-change">This month</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Quick Actions -->
            <section class="dashboard-section">
                <h2 class="section-title">Quick Actions</h2>
                <div class="actions-grid">
                    <a href="users.php" class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"></path>
                        </svg>
                        <span>Add Student</span>
                    </a>
                    <a href="events.php" class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"></path>
                        </svg>
                        <span>Create Event</span>
                    </a>
                    <a href="articles.php" class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"></path>
                        </svg>
                        <span>Post Article</span>
                    </a>
                    <a href="services.php" class="action-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 5v14M5 12h14"></path>
                        </svg>
                        <span>Add Service</span>
                    </a>
                </div>
            </section>

            <!-- Recent Activities -->
            <section class="dashboard-section">
                <h2 class="section-title">Recent Activities</h2>
                <div class="activities-list">
                    <div class="activity-item">
                        <div class="activity-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title">New student enrollment</p>
                            <p class="activity-description">John Doe enrolled in Class 10-B</p>
                            <p class="activity-time">2 hours ago</p>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title">Event scheduled</p>
                            <p class="activity-description">Annual Sports Festival - June 15, 2024</p>
                            <p class="activity-time">5 hours ago</p>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title">Announcement posted</p>
                            <p class="activity-description">Mid-term exams schedule announced</p>
                            <p class="activity-time">1 day ago</p>
                        </div>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z"></path>
                            </svg>
                        </div>
                        <div class="activity-content">
                            <p class="activity-title">Grade updated</p>
                            <p class="activity-description">Semester grades finalized for Class 12-A</p>
                            <p class="activity-time">2 days ago</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    </div>

    <?php
    $path = "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";
    include('../includes/footer.php'); ?>
</body>
</html>
