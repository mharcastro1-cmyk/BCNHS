<!-- Admin Sidebar -->
<aside class="admin-sidebar">
    <div class="admin-logo">
        <h3>BCNHS</h3>
        <p>Admin Panel</p>
    </div>

    <nav class="admin-nav">
        <ul class="admin-nav-list">
            <li class="admin-nav-item">
                <a href="<?php echo (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'staff') ? 'staffIndex.php' : 'index.php'; ?>" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>

            <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin'): ?>
            <li class="admin-nav-item">
                <a href="about.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span>Manage About Page</span>
                </a>
            </li>

            <li class="admin-nav-item">
                <a href="faculties_staff.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                    <span>Manage Faculty & Staff</span>
                </a>
            </li>

            <li class="admin-nav-item">
                <a href="curricula_programs.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2zM22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                    </svg>
                    <span>Manage Curricula and Programs</span>
                </a>
            </li>

            <li class="admin-nav-item">
                <a href="users.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span>Manage Users</span>
                </a>
            </li>

            <li class="admin-nav-item">
                <a href="services.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                    <span>Manage Services</span>
                </a>
            </li>

            <li class="admin-nav-item">
                <a href="learning_resources.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                    <span>Manage Learning Resources</span>
                </a>
            </li>
            <?php endif; ?>

            <?php if (isset($_SESSION['user_role']) && ($_SESSION['user_role'] === 'admin' || $_SESSION['user_role'] === 'staff')): ?>
            <li class="admin-nav-item">
                <a href="events.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="8" r="4"></circle>
                        <path d="M6 20c0-1 .895-3 6-3s6 2 6 3"></path>
                        <circle cx="19" cy="18" r="3"></circle>
                        <path d="M22 20.857V19a2 2 0 0 0-2-2h-2.5"></path>
                    </svg>
                    <span>Manage Events</span>
                </a>
            </li>

            <li class="admin-nav-item">
                <a href="articles.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="2" x2="12" y2="22"></line>
                        <path d="M17 5H9.5a1.5 1.5 0 0 0 0 3h5a1.5 1.5 0 0 1 0 3h-5a1.5 1.5 0 0 0 0 3h7.5"></path>
                    </svg>
                    <span>Manage Articles</span>
                </a>
            </li>

            <li class="admin-nav-item">
                <a href="achievements.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="3"></circle>
                        <path d="M12 1v6m0 6v6M4.22 4.22l4.24 4.24m3.08 3.08l4.24 4.24M1 12h6m6 0h6m-16.78 7.78l4.24-4.24m3.08-3.08l4.24-4.24"></path>
                    </svg>
                    <span>Manage Achievements</span>
                </a>
            </li>
            <?php endif; ?>

            <li class="admin-nav-item">
                <a href="../logout.php" class="admin-nav-link">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                    </svg>
                    <span>Logout</span>
                </a>
            </li>

        </ul>


    </nav>
</aside>
