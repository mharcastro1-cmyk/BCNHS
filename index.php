<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php 
    
    include('includes/header.php');
    include('functions/functions.php');
    $aboutModule = new AboutModule();
    $about = $aboutModule->getAbout(1);
    ?>
    <div class="hero">
        <div class="parent">
            <div class="div1 hero-content">
                <h1>Welcome</h1>
                <p class="lead">This is Baguio City National High School Website</p>
            </div>
        </div>
    </div>
    <div class="about">
    <h1 class="page-title">About The School</h1>
    <div class="about-grid">
        <div class="about-col">
            <h2>History</h2>
            <div style="width: 100%;">
                <?php
                echo $about['history']
                ?>
            </div>
        </div>
        <div class="about-col">
            <h2>Mission and Vision</h2>
            <p>
                Mission: To provide quality education that nurtures the holistic development of students, empowering them to become responsible citizens and lifelong learners.
                Vision: To be a leading educational institution recognized for excellence in academic performance, character formation, and community involvement.
            </p>
        </div>
    </div>
    </div>
    
    <!-- Highlights / Cards section: Latest News, Achievement, Article -->
    <section class="cards-section">
        <div class="container">
            <h2 class="section-title">Highlights</h2>
            <div class="cards-grid">
                <div class="card">
                    <div class="img-holder">
                        <!-- Inline SVG placeholder -->
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <rect x="3" y="4" width="18" height="14" rx="2" ry="2"></rect>
                            <path d="M3 10h18"></path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Latest News</h5>
                        <p class="card-text">Stay updated with the latest announcements and information from BCNHS.</p>
                        <a href="news.php" class="btn btn-primary">Show More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-holder">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M20 6L9 17l-5-5"></path>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Latest Achievement</h5>
                        <p class="card-text">See the latest awards and achievements from our students and staff.</p>
                        <a href="achievements.php" class="btn btn-primary">Show More</a>
                    </div>
                </div>
                <div class="card">
                    <div class="img-holder">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                            <polyline points="7 10 12 15 17 10"></polyline>
                            <line x1="12" y1="15" x2="12" y2="3"></line>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Latest Article</h5>
                        <p class="card-text">Read featured articles and educational resources published by BCNHS.</p>
                        <a href="articles.php" class="btn btn-primary">Show More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Curricula & Programs section -->
    <section class="curricula-section">
        <div class="section-header">
            <h2>Curricula & Programs</h2>
            <a class="section-link" href="curricula.php">View All Curricula and Programs</a>
        </div>
        <div class="curricula-grid">
            <div class="card curricula-card">
                <div class="img-holder">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M3 6h18"></path>
                        <path d="M6 10h12"></path>
                        <path d="M8 14h8"></path>
                    </svg>
                </div>
                <div class="card-body">
                    <h5 class="card-title">STEM Program</h5>
                    <p class="card-text">A strong emphasis on science, technology, engineering, and mathematics for advanced learners.</p>
                    <a href="curricula.php" class="btn btn-outline-primary">View More</a>
                </div>
            </div>
            <div class="card curricula-card">
                <div class="img-holder">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <circle cx="12" cy="8" r="3"></circle>
                        <path d="M6 20c0-3 4-5 6-5s6 2 6 5"></path>
                    </svg>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Humanities & Social Sciences</h5>
                    <p class="card-text">Programs that develop research, communication, and critical thinking skills.</p>
                    <a href="curricula.php" class="btn btn-outline-primary">View More</a>
                </div>
            </div>
            <div class="card curricula-card">
                <div class="img-holder">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <rect x="3" y="4" width="18" height="14" rx="2" ry="2"></rect>
                        <path d="M8 14h8"></path>
                    </svg>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Technical-Vocational Education</h5>
                    <p class="card-text">Short courses and skills training to prepare students for technical careers.</p>
                    <a href="curricula.php" class="btn btn-outline-primary">View More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Principal section -->
    <section class="principal-section">
        <div class="principal-wrapper">
            <div class="principal-photo">
                <!-- Use local image if available -->
                <?php if (file_exists(__DIR__ . '/assets/principal.jpg')): ?>
                    <img src="assets/principal.jpg" alt="Principal Photo">
                <?php else: ?>
                    <!-- Fallback to SVG placeholder -->
                    <img src="assets/principal-placeholder.svg" alt="Principal placeholder"> 
                <?php endif; ?>
            </div>
            <div class="principal-content">
                <h3>Meet our Principal</h3>
                <p class="principal-name">Name of the principal</p>
                <p class="principal-meta">Committed to excellence in education and mentorship.</p>
            </div>
        </div>
    </section>
    <!-- Contact section -->
    <section class="contact-section">
        <div class="contact-wrapper">
            <div class="contact-left">
                <h2>Contact Us</h2>
                <p>Have a question, feedback, or need more information? Reach out to us and we'll respond as soon as possible.</p>
                <div class="contact-info">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M3 5h18v14H3z"></path></svg>
                        <span>123 Baguio St., Baguio City</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 16.92V21a1 1 0 0 1-1.09 1 19.53 19.53 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.53 19.53 0 0 1 2 3.1 1 1 0 0 1 3 2h4.08a1 1 0 0 1 1 .76 12.1 12.1 0 0 0 .7 2.8 1 1 0 0 1-.24 1.03L7.46 9.56c1.3 2.8 3.98 5.48 6.76 6.76l1.97-1.97a1 1 0 0 1 1.03-.24 12.1 12.1 0 0 0 2.8.7 1 1 0 0 1 .76 1V21z"></path></svg>
                        <span>+63 912 345 6789</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M4 4h16v12H4z"></path><path d="M22 6l-10 7L2 6"></path></svg>
                        <span>info@bcnsh.edu.ph</span>
                    </div>
                </div>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M18 2h-3a4 4 0 0 0-4 4v3H8v3h3v7h3v-7h3l1-3h-4V6a1 1 0 0 1 1-1h2z"></path></svg></a>
                    <a href="#" aria-label="Twitter"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53A4.48 4.48 0 0 0 22.43 1s-3 1.47-5 2.08C14.5 2 9.6 4.5 7 8 4.1 13 9 18 15 18c3 .0 5-.9 7-2.62 1.1-0.9 1.7-2.4 1.5-4z"></path></svg></a>
                    <a href="#" aria-label="Instagram"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M17 11.5A5.5 5.5 0 1 1 11.5 6 5.51 5.51 0 0 1 17 11.5z"></path><path d="M18.5 6.5h.01"></path></svg></a>
                    <a href="#" aria-label="YouTube"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"><path d="M22 8s-.2-1.4-.8-2c-.7-.8-1.5-.9-3.2-1-1.9-.2-7.9-.2-7.9-.2S4.6 5 3 5.2C1.6 5.4 1 6.2.8 7.2.3 8.8 0 12 0 12s0 3.2.8 4.8c.2 1 0 1.8 2.2 2 1.5.1 5.3.2 5.3.2s6 .0 7.9 0c1.7 0 2.5-.1 3.2-1 .6-.6.8-2 .8-2s.3-1.7.3-3.4S22 8 22 8z"></path><polygon points="9.75 15.02 15.5 11.99 9.75 8.96 9.75 15.02"></polygon></svg></a>
                </div>
            </div>
            <div class="contact-right">
                <form class="contact-form" action="#" method="post">
                    <label for="name">Your name</label>
                    <input type="text" id="name" name="name" placeholder="Your Name">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="you@example.com">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Write your message here..."></textarea>
                    <button class="btn btn-primary" type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </section>
    <?php 
    $path = 'node_modules/bootstrap/dist/js/bootstrap.bundle.min.js';
    include('includes/footer.php') ?>
</body>

</html>