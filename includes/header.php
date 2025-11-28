<?php 
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
?>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/websys/BCNHS/">BCNHS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="/websys/BCNHS/">Home
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/websys/BCNHS/about/">About Us</a>
        </li>
        <?php if (isset($_SESSION['user_id'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="/websys/BCNHS/faculties_staff/">Faculty and Staff</a>
        </li>
        <?php endif; ?>
        <li class="nav-item">
          <a class="nav-link" href="/websys/BCNHS/curricula_programs/">Curricula and Programs</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/websys/BCNHS/services/">Services</a>
        </li>
        <?php if (isset($_SESSION['user_id'])): ?>
        <li class="nav-item">
          <a class="nav-link" href="/websys/BCNHS/learning_resources/">Learning Resources</a>
        </li>
        <?php endif; ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Academics</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/websys/BCNHS/events/">Events</a>
            <a class="dropdown-item" href="/websys/BCNHS/achievements/">Achievements</a>
            <a class="dropdown-item" href="/websys/BCNHS/articles/">Articles</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">More...</a>
          </div>
        </li>
        <?php if (isset($_SESSION['user_id']) && isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin'): ?>
        <li class="nav-item">
          <a class="nav-link" href="/websys/BCNHS/admin/">Manage Site</a>
        </li>
        <?php endif; ?>
        <li class="nav-item">
          <?php 
            if (isset($_SESSION['user_id'])) {
              echo '<a class="nav-link" href="/websys/BCNHS/logout.php">Logout</a>';
            } else {
              echo '<a class="nav-link" href="/websys/BCNHS/login.php">Login</a>';
            }
          ?>
        </li>
      </ul>
    </div>
  </div>
</nav>