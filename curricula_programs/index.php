<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curricula & Programs - BCNHS</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('../includes/header.php'); ?>

    <main class="curricula-main">
        <div class="curricula-wrapper">
            <!-- Left Column: List of Programs -->
            <aside class="curricula-list">
                <h2 class="curricula-sidebar-title">Our Programs</h2>
                
                <a href="#stem-program" class="program-card active">
                    <div class="program-card-image">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <rect width="200" height="200" fill="#e8eef5"/>
                            <circle cx="100" cy="60" r="20" fill="#0891b2"/>
                            <rect x="70" y="100" width="60" height="70" fill="#0891b2" opacity="0.8"/>
                            <circle cx="85" cy="85" r="8" fill="#ffffff"/>
                            <circle cx="115" cy="85" r="8" fill="#ffffff"/>
                        </svg>
                    </div>
                    <div class="program-card-content">
                        <h3 class="program-card-title">STEM Program</h3>
                        <p class="program-card-overview">Science, Technology, Engineering & Mathematics</p>
                    </div>
                </a>

                <a href="#humanities-program" class="program-card">
                    <div class="program-card-image">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <rect width="200" height="200" fill="#f0f4f8"/>
                            <rect x="50" y="50" width="100" height="100" fill="#dc2626" opacity="0.7"/>
                            <circle cx="100" cy="70" r="12" fill="#ffffff"/>
                            <rect x="60" y="90" width="80" height="50" fill="#dc2626" opacity="0.5"/>
                        </svg>
                    </div>
                    <div class="program-card-content">
                        <h3 class="program-card-title">Humanities & Social Sciences</h3>
                        <p class="program-card-overview">Arts, Literature & Social Studies</p>
                    </div>
                </a>

                <a href="#vocational-program" class="program-card">
                    <div class="program-card-image">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <rect width="200" height="200" fill="#f8fafc"/>
                            <rect x="40" y="60" width="120" height="80" fill="#f97316" opacity="0.7"/>
                            <circle cx="70" cy="100" r="12" fill="#ffffff"/>
                            <circle cx="130" cy="100" r="12" fill="#ffffff"/>
                            <rect x="90" y="130" width="20" height="30" fill="#f97316"/>
                        </svg>
                    </div>
                    <div class="program-card-content">
                        <h3 class="program-card-title">Technical-Vocational</h3>
                        <p class="program-card-overview">Skills Training & Career Preparation</p>
                    </div>
                </a>

                <a href="#special-program" class="program-card">
                    <div class="program-card-image">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
                            <rect width="200" height="200" fill="#efe6ff"/>
                            <circle cx="100" cy="70" r="25" fill="#7c3aed" opacity="0.7"/>
                            <path d="M 70 120 Q 70 110 100 110 Q 130 110 130 120 L 130 160 Q 130 160 100 160 Q 70 160 70 160 Z" fill="#7c3aed" opacity="0.5"/>
                        </svg>
                    </div>
                    <div class="program-card-content">
                        <h3 class="program-card-title">Special Programs</h3>
                        <p class="program-card-overview">Advanced & Honors Courses</p>
                    </div>
                </a>
            </aside>

            <!-- Right Column: Program Details -->
            <section class="curricula-details">
                <!-- STEM Program -->
                <div id="stem-program" class="program-detail active">
                    <div class="program-cover">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 300">
                            <defs>
                                <linearGradient id="stemGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#0891b2;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#046e75;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <rect width="600" height="300" fill="url(#stemGrad)"/>
                            <circle cx="150" cy="100" r="40" fill="#ffffff" opacity="0.2"/>
                            <circle cx="500" cy="250" r="60" fill="#ffffff" opacity="0.15"/>
                            <text x="300" y="160" font-size="48" font-weight="bold" fill="#ffffff" text-anchor="middle">STEM Program</text>
                        </svg>
                    </div>
                    <div class="program-info">
                        <h2 class="program-detail-title">STEM Program</h2>
                        <p class="program-detail-overview">Prepare students for careers in science, technology, engineering, and mathematics through hands-on learning and advanced coursework.</p>
                        
                        <h3 class="program-section-title">Subjects Offered</h3>
                        <ul class="program-list">
                            <li>Advanced Physics</li>
                            <li>Chemistry & Biochemistry</li>
                            <li>Advanced Mathematics</li>
                            <li>Computer Science & Programming</li>
                            <li>Engineering Design & Robotics</li>
                            <li>Environmental Science</li>
                        </ul>

                        <h3 class="program-section-title">Key Features</h3>
                        <ul class="program-list">
                            <li>Laboratory equipment and facilities</li>
                            <li>Project-based learning</li>
                            <li>Industry partnerships</li>
                            <li>STEM competitions and fairs</li>
                        </ul>
                    </div>
                </div>

                <!-- Humanities & Social Sciences Program -->
                <div id="humanities-program" class="program-detail">
                    <div class="program-cover">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 300">
                            <defs>
                                <linearGradient id="humanitiesGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#dc2626;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#b91c1c;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <rect width="600" height="300" fill="url(#humanitiesGrad)"/>
                            <circle cx="150" cy="100" r="40" fill="#ffffff" opacity="0.2"/>
                            <circle cx="500" cy="250" r="60" fill="#ffffff" opacity="0.15"/>
                            <text x="300" y="160" font-size="42" font-weight="bold" fill="#ffffff" text-anchor="middle">Humanities & Social Sciences</text>
                        </svg>
                    </div>
                    <div class="program-info">
                        <h2 class="program-detail-title">Humanities & Social Sciences</h2>
                        <p class="program-detail-overview">Develop critical thinking, communication, and cultural awareness through the study of literature, history, and society.</p>
                        
                        <h3 class="program-section-title">Subjects Offered</h3>
                        <ul class="program-list">
                            <li>Literature & Critical Reading</li>
                            <li>History & Civilization</li>
                            <li>Philosophy & Ethics</li>
                            <li>Psychology & Sociology</li>
                            <li>Political Science & Governance</li>
                            <li>Economics & Business</li>
                        </ul>

                        <h3 class="program-section-title">Key Features</h3>
                        <ul class="program-list">
                            <li>Debate and public speaking</li>
                            <li>Research and writing emphasis</li>
                            <li>Community engagement projects</li>
                            <li>Cultural and historical trips</li>
                        </ul>
                    </div>
                </div>

                <!-- Technical-Vocational Program -->
                <div id="vocational-program" class="program-detail">
                    <div class="program-cover">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 300">
                            <defs>
                                <linearGradient id="vocationGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#f97316;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#ea580c;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <rect width="600" height="300" fill="url(#vocationGrad)"/>
                            <circle cx="150" cy="100" r="40" fill="#ffffff" opacity="0.2"/>
                            <circle cx="500" cy="250" r="60" fill="#ffffff" opacity="0.15"/>
                            <text x="300" y="160" font-size="44" font-weight="bold" fill="#ffffff" text-anchor="middle">Technical-Vocational</text>
                        </svg>
                    </div>
                    <div class="program-info">
                        <h2 class="program-detail-title">Technical-Vocational Education</h2>
                        <p class="program-detail-overview">Equip students with practical skills and certifications for immediate entry into technical and trade professions.</p>
                        
                        <h3 class="program-section-title">Courses Available</h3>
                        <ul class="program-list">
                            <li>Electrical Installation & Maintenance</li>
                            <li>Plumbing & HVAC Systems</li>
                            <li>Automotive Technology</li>
                            <li>Welding & Metal Fabrication</li>
                            <li>Information Technology Support</li>
                            <li>Hospitality & Tourism Services</li>
                        </ul>

                        <h3 class="program-section-title">Key Features</h3>
                        <ul class="program-list">
                            <li>Hands-on workshop training</li>
                            <li>Industry certifications</li>
                            <li>Apprenticeship opportunities</li>
                            <li>Job placement assistance</li>
                        </ul>
                    </div>
                </div>

                <!-- Special Programs -->
                <div id="special-program" class="program-detail">
                    <div class="program-cover">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 600 300">
                            <defs>
                                <linearGradient id="specialGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#7c3aed;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#6d28d9;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            <rect width="600" height="300" fill="url(#specialGrad)"/>
                            <circle cx="150" cy="100" r="40" fill="#ffffff" opacity="0.2"/>
                            <circle cx="500" cy="250" r="60" fill="#ffffff" opacity="0.15"/>
                            <text x="300" y="160" font-size="44" font-weight="bold" fill="#ffffff" text-anchor="middle">Special Programs</text>
                        </svg>
                    </div>
                    <div class="program-info">
                        <h2 class="program-detail-title">Special Programs</h2>
                        <p class="program-detail-overview">Advanced and honors programs for high-achieving students seeking enrichment and accelerated learning opportunities.</p>
                        
                        <h3 class="program-section-title">Program Options</h3>
                        <ul class="program-list">
                            <li>Honors & Advanced Placement (AP)</li>
                            <li>Enrichment Seminars</li>
                            <li>Research & Innovation Hub</li>
                            <li>International Baccalaureate (IB)</li>
                            <li>Dual Enrollment Programs</li>
                            <li>Summer Academies</li>
                        </ul>

                        <h3 class="program-section-title">Key Features</h3>
                        <ul class="program-list">
                            <li>Accelerated curriculum</li>
                            <li>College credit opportunities</li>
                            <li>Mentorship from university faculty</li>
                            <li>Exclusive academic competitions</li>
                        </ul>
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
