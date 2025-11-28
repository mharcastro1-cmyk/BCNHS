<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BCNHS</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('includes/header.php'); ?>

    <main class="login-main">
        <div class="login-container">
            <div class="login-card">
                <!-- Logo Holder -->
                <div class="logo-holder">
                    <?php 
                        if (file_exists('assets\Baguio_City_National_High_School_logo.png')) {
                            echo '<img src="assets\Baguio_City_National_High_School_logo.png" alt="BCNHS Logo">';
                        } else {
                            echo '<svg width="80" height="80" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="50" cy="50" r="50" fill="#f8fafc"/>
                                    <circle cx="50" cy="30" r="12" fill="#dc2626"/>
                                    <path d="M 35 50 L 35 75 L 65 75 L 65 50 L 50 40 Z" fill="#dc2626" opacity="0.8"/>
                                  </svg>';
                        }
                    ?>
                </div>

                <!-- Form Title -->
                <h2 class="login-title">Sign In</h2>
                <p class="login-subtitle">Welcome back to BCNHS</p>

                <!-- Login Form -->
                <form action="#" method="POST" class="login-form">
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Username or Email</label>
                        <input 
                            type="text" 
                            class="form-control" 
                            id="username" 
                            name="username" 
                            placeholder="Enter your username or email"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input 
                            type="password" 
                            class="form-control" 
                            id="password" 
                            name="password" 
                            placeholder="Enter your password"
                            required>
                    </div>


                    <button type="submit" class="btn btn-primary w-100">Sign In</button>
                </form>

                <!-- Additional Links -->
                <div class="login-footer">
                    <a href="#" class="signup-link">Create account</a>
                </div>
            </div>
        </div>
    </main>

    <?php include('includes/footer.php'); ?>
</body>
</html>
