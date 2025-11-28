<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - BCNHS</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('../includes/header.php'); ?>

    <main class="services-main">
        <div class="services-wrapper">
            <!-- Left Column: Services Navigation -->
            <aside class="services-sidebar">
                <h2 class="services-sidebar-title">Services</h2>
                <nav class="services-nav">
                    <ul class="services-list">
                        <li><a href="#guidance-counseling" class="service-link active">Guidance & Counseling</a></li>
                        <li><a href="#health-services" class="service-link">Health Services</a></li>
                        <li><a href="#library-services" class="service-link">Library & Learning Resources</a></li>
                        <li><a href="#it-support" class="service-link">IT Support & Computer Labs</a></li>
                        <li><a href="#cafeteria-services" class="service-link">Cafeteria Services</a></li>
                        <li><a href="#sports-facilities" class="service-link">Sports Facilities</a></li>
                        <li><a href="#transportation" class="service-link">Transportation</a></li>
                        <li><a href="#scholarship-programs" class="service-link">Scholarship Programs</a></li>
                    </ul>
                </nav>
            </aside>

            <!-- Right Column: Service Details -->
            <section class="services-content">
                <!-- Guidance & Counseling -->
                <div id="guidance-counseling" class="service-detail">
                    <div class="service-header">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="#0891b2" opacity="0.1"/>
                                <circle cx="35" cy="35" r="12" fill="#0891b2"/>
                                <circle cx="65" cy="35" r="12" fill="#0891b2"/>
                                <path d="M 30 60 Q 30 50 50 50 Q 70 50 70 60 L 70 75 Q 70 75 50 75 Q 30 75 30 75 Z" fill="#0891b2"/>
                            </svg>
                        </div>
                        <h2 class="service-title">Guidance & Counseling</h2>
                    </div>
                    <div class="service-body">
                        <p class="service-description">Our dedicated guidance and counseling team provides comprehensive support to help students navigate academic challenges, personal development, and career planning.</p>
                        <h3 class="service-section-title">Services Offered</h3>
                        <ul class="service-list-items">
                            <li>Academic advising and course planning</li>
                            <li>Personal and emotional counseling</li>
                            <li>Career guidance and college preparation</li>
                            <li>Crisis intervention and support</li>
                            <li>Peer mentoring programs</li>
                            <li>College application assistance</li>
                        </ul>
                        <h3 class="service-section-title">Contact Information</h3>
                        <p>Guidance Office: Building A, Room 201 | Phone: (074) 442-1234 | Email: guidance@bcnhs.edu.ph</p>
                    </div>
                </div>

                <!-- Health Services -->
                <div id="health-services" class="service-detail">
                    <div class="service-header">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="#dc2626" opacity="0.1"/>
                                <path d="M 50 30 L 50 70 M 30 50 L 70 50" stroke="#dc2626" stroke-width="4" stroke-linecap="round"/>
                                <circle cx="50" cy="50" r="40" fill="none" stroke="#dc2626" stroke-width="2"/>
                            </svg>
                        </div>
                        <h2 class="service-title">Health Services</h2>
                    </div>
                    <div class="service-body">
                        <p class="service-description">Comprehensive health and wellness services to ensure student well-being, including medical consultations, first aid, and health education programs.</p>
                        <h3 class="service-section-title">Services Offered</h3>
                        <ul class="service-list-items">
                            <li>Medical consultations and check-ups</li>
                            <li>First aid and emergency care</li>
                            <li>Immunization programs</li>
                            <li>Health education and wellness seminars</li>
                            <li>Mental health support services</li>
                            <li>Dental referral services</li>
                        </ul>
                        <h3 class="service-section-title">Contact Information</h3>
                        <p>Health Center: Building B, Ground Floor | Phone: (074) 442-5678 | Hours: 7:00 AM - 4:00 PM</p>
                    </div>
                </div>

                <!-- Library Services -->
                <div id="library-services" class="service-detail">
                    <div class="service-header">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="#f97316" opacity="0.1"/>
                                <rect x="30" y="30" width="40" height="50" fill="#f97316" opacity="0.6"/>
                                <rect x="35" y="35" width="30" height="5" fill="#ffffff"/>
                                <rect x="35" y="45" width="30" height="5" fill="#ffffff"/>
                                <rect x="35" y="55" width="30" height="5" fill="#ffffff"/>
                                <rect x="35" y="65" width="30" height="5" fill="#ffffff"/>
                            </svg>
                        </div>
                        <h2 class="service-title">Library & Learning Resources</h2>
                    </div>
                    <div class="service-body">
                        <p class="service-description">A state-of-the-art library facility equipped with extensive print and digital collections to support student learning and research needs.</p>
                        <h3 class="service-section-title">Services Offered</h3>
                        <ul class="service-list-items">
                            <li>Extensive book and reference collections</li>
                            <li>Digital resources and online databases</li>
                            <li>Computer terminals for research</li>
                            <li>Study spaces and quiet reading areas</li>
                            <li>Research assistance and tutorials</li>
                            <li>Interlibrary loan services</li>
                        </ul>
                        <h3 class="service-section-title">Contact Information</h3>
                        <p>Main Library: Building C | Phone: (074) 442-9012 | Hours: 7:00 AM - 5:00 PM (Mon-Fri)</p>
                    </div>
                </div>

                <!-- IT Support -->
                <div id="it-support" class="service-detail">
                    <div class="service-header">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="#7c3aed" opacity="0.1"/>
                                <rect x="25" y="25" width="50" height="40" rx="2" fill="#7c3aed" opacity="0.6"/>
                                <rect x="28" y="28" width="44" height="30" fill="#ffffff"/>
                                <circle cx="50" cy="75" r="4" fill="#7c3aed"/>
                            </svg>
                        </div>
                        <h2 class="service-title">IT Support & Computer Labs</h2>
                    </div>
                    <div class="service-body">
                        <p class="service-description">Modern computer laboratories and technical support services to facilitate learning in information technology and provide computing resources for all students.</p>
                        <h3 class="service-section-title">Services Offered</h3>
                        <ul class="service-list-items">
                            <li>Multiple computer laboratories with updated hardware</li>
                            <li>Software applications for various courses</li>
                            <li>Technical support and troubleshooting</li>
                            <li>Network and internet connectivity</li>
                            <li>Cybersecurity awareness training</li>
                            <li>Lab reservations and access management</li>
                        </ul>
                        <h3 class="service-section-title">Contact Information</h3>
                        <p>IT Department: Building D, Room 101 | Phone: (074) 442-3456 | Email: itsupport@bcnhs.edu.ph</p>
                    </div>
                </div>

                <!-- Cafeteria Services -->
                <div id="cafeteria-services" class="service-detail">
                    <div class="service-header">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="#14b8a6" opacity="0.1"/>
                                <circle cx="50" cy="40" r="20" fill="#14b8a6" opacity="0.6"/>
                                <path d="M 35 60 L 40 85 L 60 85 L 65 60 Z" fill="#14b8a6" opacity="0.6"/>
                            </svg>
                        </div>
                        <h2 class="service-title">Cafeteria Services</h2>
                    </div>
                    <div class="service-body">
                        <p class="service-description">A well-maintained cafeteria offering nutritious and affordable meals to support student health and wellness throughout the school day.</p>
                        <h3 class="service-section-title">Services Offered</h3>
                        <ul class="service-list-items">
                            <li>Breakfast and lunch meal options</li>
                            <li>Nutritious meal planning</li>
                            <li>Vegetarian and special diet meals</li>
                            <li>Snacks and beverages</li>
                            <li>Student meal discount programs</li>
                            <li>Catering for school events</li>
                        </ul>
                        <h3 class="service-section-title">Contact Information</h3>
                        <p>Cafeteria: Building A, Ground Floor | Hours: 6:00 AM - 4:00 PM | Inquiry: (074) 442-7890</p>
                    </div>
                </div>

                <!-- Sports Facilities -->
                <div id="sports-facilities" class="service-detail">
                    <div class="service-header">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="#06b6d4" opacity="0.1"/>
                                <circle cx="50" cy="50" r="25" fill="none" stroke="#06b6d4" stroke-width="3"/>
                                <line x1="50" y1="25" x2="50" y2="75" stroke="#06b6d4" stroke-width="2"/>
                                <line x1="25" y1="50" x2="75" y2="50" stroke="#06b6d4" stroke-width="2"/>
                            </svg>
                        </div>
                        <h2 class="service-title">Sports Facilities</h2>
                    </div>
                    <div class="service-body">
                        <p class="service-description">Comprehensive sports facilities and programs designed to promote physical fitness, athletic excellence, and recreational engagement for all students.</p>
                        <h3 class="service-section-title">Services Offered</h3>
                        <ul class="service-list-items">
                            <li>Basketball and volleyball courts</li>
                            <li>Swimming pool and aquatics programs</li>
                            <li>Fitness center and gym equipment</li>
                            <li>Athletic training and coaching</li>
                            <li>Intramural sports programs</li>
                            <li>Sports clubs and organizations</li>
                        </ul>
                        <h3 class="service-section-title">Contact Information</h3>
                        <p>Sports Office: Gymnasium, Building E | Phone: (074) 442-4567 | Hours: 6:00 AM - 6:00 PM</p>
                    </div>
                </div>

                <!-- Transportation -->
                <div id="transportation" class="service-detail">
                    <div class="service-header">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="#ec4899" opacity="0.1"/>
                                <rect x="20" y="40" width="60" height="30" rx="3" fill="#ec4899" opacity="0.6"/>
                                <circle cx="30" cy="70" r="6" fill="#ec4899"/>
                                <circle cx="70" cy="70" r="6" fill="#ec4899"/>
                            </svg>
                        </div>
                        <h2 class="service-title">Transportation</h2>
                    </div>
                    <div class="service-body">
                        <p class="service-description">Safe and reliable transportation services connecting the school with various areas of Baguio City to ensure convenient and secure student commute.</p>
                        <h3 class="service-section-title">Services Offered</h3>
                        <ul class="service-list-items">
                            <li>Multiple shuttle routes within Baguio City</li>
                            <li>Morning and afternoon schedules</li>
                            <li>Air-conditioned vehicles</li>
                            <li>GPS tracking and safety features</li>
                            <li>Monthly shuttle passes</li>
                            <li>Charter services for field trips</li>
                        </ul>
                        <h3 class="service-section-title">Contact Information</h3>
                        <p>Transportation Office: Building A, Room 105 | Phone: (074) 442-8901 | Hours: 6:00 AM - 5:00 PM</p>
                    </div>
                </div>

                <!-- Scholarship Programs -->
                <div id="scholarship-programs" class="service-detail">
                    <div class="service-header">
                        <div class="service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100">
                                <circle cx="50" cy="50" r="50" fill="#f59e0b" opacity="0.1"/>
                                <path d="M 50 20 L 80 35 L 80 55 Q 80 70 50 80 Q 20 70 20 55 L 20 35 Z" fill="#f59e0b" opacity="0.6"/>
                                <path d="M 50 40 L 60 46 L 55 56 L 50 52 L 45 56 L 40 46 Z" fill="#ffffff"/>
                            </svg>
                        </div>
                        <h2 class="service-title">Scholarship Programs</h2>
                    </div>
                    <div class="service-body">
                        <p class="service-description">Various scholarship opportunities to support deserving and talented students in pursuing quality education regardless of their financial circumstances.</p>
                        <h3 class="service-section-title">Available Scholarships</h3>
                        <ul class="service-list-items">
                            <li>Academic excellence scholarships</li>
                            <li>Sports scholarships</li>
                            <li>Arts and talent scholarships</li>
                            <li>Financial need-based scholarships</li>
                            <li>Government scholarship programs (DOST, LGU)</li>
                            <li>Special programs and grants</li>
                        </ul>
                        <h3 class="service-section-title">Contact Information</h3>
                        <p>Scholarship Office: Building A, Room 203 | Phone: (074) 442-6789 | Email: scholarships@bcnhs.edu.ph</p>
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
