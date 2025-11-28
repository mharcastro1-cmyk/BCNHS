<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - BCNHS</title>
    <link href="../node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
    <?php include('../includes/header.php'); ?>

    <main class="events-main">
        <div class="events-wrapper">
            <!-- Left Column: Event Cards -->
            <aside class="events-sidebar">
                <div class="events-list">
                    <!-- Event Card 1 -->
                    <a href="#event-1" class="event-card-link active">
                        <div class="event-card">
                            <div class="event-card-image">
                                <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=300&h=200&fit=crop" alt="Annual Sports Festival" />
                            </div>
                            <div class="event-card-content">
                                <h3 class="event-card-title">Annual Sports Festival</h3>
                                <p class="event-card-overview">Join us for an exciting day of athletic competition</p>
                            </div>
                        </div>
                    </a>

                    <!-- Event Card 2 -->
                    <a href="#event-2" class="event-card-link">
                        <div class="event-card">
                            <div class="event-card-image">
                                <img src="https://images.unsplash.com/photo-1540575467063-178cb50ee898?w=300&h=200&fit=crop" alt="Science Expo" />
                            </div>
                            <div class="event-card-content">
                                <h3 class="event-card-title">Science Expo 2024</h3>
                                <p class="event-card-overview">Discover innovative projects from our students</p>
                            </div>
                        </div>
                    </a>

                    <!-- Event Card 3 -->
                    <a href="#event-3" class="event-card-link">
                        <div class="event-card">
                            <div class="event-card-image">
                                <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=300&h=200&fit=crop" alt="Foundation Day" />
                            </div>
                            <div class="event-card-content">
                                <h3 class="event-card-title">Foundation Day Celebration</h3>
                                <p class="event-card-overview">Celebrate the school's rich history and legacy</p>
                            </div>
                        </div>
                    </a>

                    <!-- Event Card 4 -->
                    <a href="#event-4" class="event-card-link">
                        <div class="event-card">
                            <div class="event-card-image">
                                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=300&h=200&fit=crop" alt="Graduation Ceremony" />
                            </div>
                            <div class="event-card-content">
                                <h3 class="event-card-title">Graduation Ceremony</h3>
                                <p class="event-card-overview">Honoring our graduating class of 2024</p>
                            </div>
                        </div>
                    </a>

                    <!-- Event Card 5 -->
                    <a href="#event-5" class="event-card-link">
                        <div class="event-card">
                            <div class="event-card-image">
                                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=300&h=200&fit=crop" alt="Debate Competition" />
                            </div>
                            <div class="event-card-content">
                                <h3 class="event-card-title">Inter-School Debate</h3>
                                <p class="event-card-overview">Showcase student public speaking skills</p>
                            </div>
                        </div>
                    </a>
                </div>
            </aside>

            <!-- Right Column: Event Details -->
            <section class="events-content">
                <!-- Event 1 Details -->
                <div id="event-1" class="event-detail">
                    <div class="event-headline-image">
                        <img src="https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=800&h=400&fit=crop" alt="Annual Sports Festival" />
                    </div>
                    <h1 class="event-title">Annual Sports Festival</h1>
                    <div class="event-meta">
                        <span class="event-date">📅 March 15, 2024</span>
                        <span class="event-location">📍 School Grounds</span>
                    </div>
                    <div class="event-body">
                        <p>Our Annual Sports Festival is one of the most anticipated events of the year, bringing together students, parents, and staff to celebrate athletic excellence and school spirit.</p>
                        <h3>Event Highlights</h3>
                        <ul>
                            <li>Track and field competitions</li>
                            <li>Basketball and volleyball tournaments</li>
                            <li>Relay races and team events</li>
                            <li>Opening and closing ceremonies</li>
                            <li>Awards and recognition for top performers</li>
                        </ul>
                        <p>Students compete in various categories ranging from elementary to high school levels. The event promotes teamwork, sportsmanship, and physical fitness among all participants.</p>
                    </div>
                </div>

                <!-- Event 2 Details -->
                <div id="event-2" class="event-detail">
                    <div class="event-headline-image">
                        <img src="https://images.unsplash.com/photo-1540575467063-178cb50ee898?w=800&h=400&fit=crop" alt="Science Expo" />
                    </div>
                    <h1 class="event-title">Science Expo 2024</h1>
                    <div class="event-meta">
                        <span class="event-date">📅 April 20, 2024</span>
                        <span class="event-location">📍 Gymnasium</span>
                    </div>
                    <div class="event-body">
                        <p>The Science Expo showcases the innovative research and experimental projects conducted by our talented students throughout the academic year.</p>
                        <h3>Categories</h3>
                        <ul>
                            <li>Physics and Engineering</li>
                            <li>Biology and Life Sciences</li>
                            <li>Chemistry and Materials Science</li>
                            <li>Environmental Science</li>
                            <li>Technology and Innovation</li>
                        </ul>
                        <p>Judges from universities and research institutions evaluate projects based on scientific merit, creativity, and presentation quality. Winners receive certificates and prizes for their outstanding work.</p>
                    </div>
                </div>

                <!-- Event 3 Details -->
                <div id="event-3" class="event-detail">
                    <div class="event-headline-image">
                        <img src="https://images.unsplash.com/photo-1493225457124-a3eb161ffa5f?w=800&h=400&fit=crop" alt="Foundation Day" />
                    </div>
                    <h1 class="event-title">Foundation Day Celebration</h1>
                    <div class="event-meta">
                        <span class="event-date">📅 June 1, 2024</span>
                        <span class="event-location">📍 School Auditorium</span>
                    </div>
                    <div class="event-body">
                        <p>Foundation Day marks the establishment of our prestigious institution and celebrates the legacy of excellence we have built over the decades.</p>
                        <h3>Program Schedule</h3>
                        <ul>
                            <li>Opening ceremony with principal's address</li>
                            <li>Student cultural performances</li>
                            <li>Historical highlights presentation</li>
                            <li>Alumni recognition and testimonials</li>
                            <li>Award presentations to outstanding contributors</li>
                        </ul>
                        <p>This day serves as a reminder of our school's core values and commitment to educational excellence and community service.</p>
                    </div>
                </div>

                <!-- Event 4 Details -->
                <div id="event-4" class="event-detail">
                    <div class="event-headline-image">
                        <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800&h=400&fit=crop" alt="Graduation Ceremony" />
                    </div>
                    <h1 class="event-title">Graduation Ceremony</h1>
                    <div class="event-meta">
                        <span class="event-date">📅 May 25, 2024</span>
                        <span class="event-location">📍 Graduation Grounds</span>
                    </div>
                    <div class="event-body">
                        <p>Our Graduation Ceremony is a momentous occasion celebrating the achievements of our graduating students as they embark on their next adventure.</p>
                        <h3>Ceremony Details</h3>
                        <ul>
                            <li>Processional and opening remarks</li>
                            <li>Student speeches and reflections</li>
                            <li>Faculty and staff recognition</li>
                            <li>Diploma presentations</li>
                            <li>Closing remarks and celebration</li>
                        </ul>
                        <p>Family members and friends are invited to join us in celebrating this significant milestone in our students' educational journey.</p>
                    </div>
                </div>

                <!-- Event 5 Details -->
                <div id="event-5" class="event-detail">
                    <div class="event-headline-image">
                        <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=800&h=400&fit=crop" alt="Debate Competition" />
                    </div>
                    <h1 class="event-title">Inter-School Debate Competition</h1>
                    <div class="event-meta">
                        <span class="event-date">📅 July 10, 2024</span>
                        <span class="event-location">📍 Main Auditorium</span>
                    </div>
                    <div class="event-body">
                        <p>We host an annual inter-school debate competition that brings together talented speakers from schools across the region to engage in intellectual discourse.</p>
                        <h3>Debate Topics & Rounds</h3>
                        <ul>
                            <li>Preliminary rounds on current affairs</li>
                            <li>Semi-finals on social issues</li>
                            <li>Finals on policy debates</li>
                            <li>Best speaker and team awards</li>
                            <li>Networking reception for all participants</li>
                        </ul>
                        <p>Participants develop critical thinking, public speaking, and argumentation skills while engaging with diverse perspectives on important global issues.</p>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <?php
    $path = "../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js";
    include('../includes/footer.php'); ?>
</body>
</html>
