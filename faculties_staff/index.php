<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculties & Staff - BCNHS</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('../includes/header.php'); ?>

    <main class="faculties-staff-main">
        <div class="faculties-container">
            <!-- Side Navigation -->
            <aside class="faculties-sidebar">
                <nav class="faculties-nav">
                    <h3 class="nav-title">Departments</h3>
                    <ul class="nav-list">
                        <li><a href="#science-dept" class="nav-link active">Science Department</a></li>
                        <li><a href="#mathematics-dept" class="nav-link">Mathematics Department</a></li>
                        <li><a href="#english-dept" class="nav-link">English Department</a></li>
                        <li><a href="#social-studies-dept" class="nav-link">Social Studies Department</a></li>
                        <li><a href="#practical-arts-dept" class="nav-link">Practical Arts Department</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Main Content -->
            <section class="faculties-content">
                <!-- Science Department -->
                <div id="science-dept" class="department-section active">
                    <!-- Head of Department -->
                    <div class="department-head">
                        <div class="head-card">
                            <div class="head-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                                    <circle cx="50" cy="50" r="50" fill="#f0f4f8"/>
                                    <circle cx="50" cy="35" r="15" fill="#dc2626"/>
                                    <path d="M 30 70 Q 30 55 50 55 Q 70 55 70 70 L 70 90 Q 70 90 50 90 Q 30 90 30 90 Z" fill="#dc2626" opacity="0.8"/>
                                </svg>
                            </div>
                            <div class="head-info">
                                <h3 class="head-name">Dr. Maria Santos</h3>
                                <p class="head-position">Head of Science Department</p>
                            </div>
                        </div>
                    </div>

                    <!-- Staff Members -->
                    <h4 class="staff-title">Faculty Members</h4>
                    <div class="staff-grid">
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Prof. Juan Dela Cruz</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Ms. Rosa Garcia</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Mr. Pedro Martinez</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Dr. Anna Lopez</p>
                        </div>
                    </div>
                </div>

                <!-- Mathematics Department -->
                <div id="mathematics-dept" class="department-section">
                    <div class="department-head">
                        <div class="head-card">
                            <div class="head-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                                    <circle cx="50" cy="50" r="50" fill="#f0f4f8"/>
                                    <circle cx="50" cy="35" r="15" fill="#dc2626"/>
                                    <path d="M 30 70 Q 30 55 50 55 Q 70 55 70 70 L 70 90 Q 70 90 50 90 Q 30 90 30 90 Z" fill="#dc2626" opacity="0.8"/>
                                </svg>
                            </div>
                            <div class="head-info">
                                <h3 class="head-name">Mr. Carlos Reyes</h3>
                                <p class="head-position">Head of Mathematics Department</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="staff-title">Faculty Members</h4>
                    <div class="staff-grid">
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Ms. Elena Torres</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Mr. Frank Nguyen</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Dr. Lisa Chang</p>
                        </div>
                    </div>
                </div>

                <!-- English Department -->
                <div id="english-dept" class="department-section">
                    <div class="department-head">
                        <div class="head-card">
                            <div class="head-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                                    <circle cx="50" cy="50" r="50" fill="#f0f4f8"/>
                                    <circle cx="50" cy="35" r="15" fill="#dc2626"/>
                                    <path d="M 30 70 Q 30 55 50 55 Q 70 55 70 70 L 70 90 Q 70 90 50 90 Q 30 90 30 90 Z" fill="#dc2626" opacity="0.8"/>
                                </svg>
                            </div>
                            <div class="head-info">
                                <h3 class="head-name">Ms. Jennifer Smith</h3>
                                <p class="head-position">Head of English Department</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="staff-title">Faculty Members</h4>
                    <div class="staff-grid">
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Mr. Timothy Johnson</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Ms. Patricia Brown</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Mr. David White</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Ms. Rachel Green</p>
                        </div>
                    </div>
                </div>

                <!-- Social Studies Department -->
                <div id="social-studies-dept" class="department-section">
                    <div class="department-head">
                        <div class="head-card">
                            <div class="head-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                                    <circle cx="50" cy="50" r="50" fill="#f0f4f8"/>
                                    <circle cx="50" cy="35" r="15" fill="#dc2626"/>
                                    <path d="M 30 70 Q 30 55 50 55 Q 70 55 70 70 L 70 90 Q 70 90 50 90 Q 30 90 30 90 Z" fill="#dc2626" opacity="0.8"/>
                                </svg>
                            </div>
                            <div class="head-info">
                                <h3 class="head-name">Dr. Michael Santos</h3>
                                <p class="head-position">Head of Social Studies Department</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="staff-title">Faculty Members</h4>
                    <div class="staff-grid">
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Ms. Angela Davis</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Mr. George Harris</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Dr. Victoria Lee</p>
                        </div>
                    </div>
                </div>

                <!-- Practical Arts Department -->
                <div id="practical-arts-dept" class="department-section">
                    <div class="department-head">
                        <div class="head-card">
                            <div class="head-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" width="100" height="100">
                                    <circle cx="50" cy="50" r="50" fill="#f0f4f8"/>
                                    <circle cx="50" cy="35" r="15" fill="#dc2626"/>
                                    <path d="M 30 70 Q 30 55 50 55 Q 70 55 70 70 L 70 90 Q 70 90 50 90 Q 30 90 30 90 Z" fill="#dc2626" opacity="0.8"/>
                                </svg>
                            </div>
                            <div class="head-info">
                                <h3 class="head-name">Mr. Robert Brown</h3>
                                <p class="head-position">Head of Practical Arts Department</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="staff-title">Faculty Members</h4>
                    <div class="staff-grid">
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Mr. Mark Wilson</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Ms. Susan Adams</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Mr. James Miller</p>
                        </div>
                        <div class="staff-card">
                            <div class="staff-photo">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80">
                                    <circle cx="40" cy="40" r="40" fill="#e8eef5"/>
                                    <circle cx="40" cy="28" r="12" fill="#0891b2"/>
                                    <path d="M 24 55 Q 24 45 40 45 Q 56 45 56 55 L 56 68 Q 56 68 40 68 Q 24 68 24 68 Z" fill="#0891b2" opacity="0.8"/>
                                </svg>
                            </div>
                            <p class="staff-name">Ms. Karen Jones</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php 
    $path = '../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';
    include('../includes/footer.php'); ?>
</body>
</html>
