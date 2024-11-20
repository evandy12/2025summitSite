<?php
$pageTitle = 'Home';
$currentPage = 'home';
include 'includes/header.php';
?>

    <!-- Homescreen Banner -->
    <div class="homescreen-banner">
        <!-- Banner content will be added here -->
    </div>

   <!-- Hero Section -->
   <section class="hero">
       <div class="banner-image">
           <img src="images/banner.jpg" alt="CARISCA Summit 2025 Banner" class="img-fluid w-100">
       </div>
       <div class="countdown-container">
           <div class="countdown-box">
               <span id="days" class="countdown-value">00</span>
               <span class="countdown-label">Days</span>
           </div>
           <div class="countdown-box">
               <span id="hours" class="countdown-value">00</span>
               <span class="countdown-label">Hours</span>
           </div>
           <div class="countdown-box">
               <span id="minutes" class="countdown-value">00</span>
               <span class="countdown-label">Minutes</span>
           </div>
           <div class="countdown-box">
               <span id="seconds" class="countdown-value">00</span>
               <span class="countdown-label">Seconds</span>
           </div>
       </div>
   </section>

    <!-- About Section -->
    <section class="about-section py-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h2 class="text-success mb-4">About Our Summit</h2>
                            <p class="mb-4">CARISCA's annual Supply Chain Research Summit is central to our goal of strengthening African supply chain capacity and advancing Africa's supply chain research globally.</p>
                            <p class="mb-4">The fifth annual Supply Chain Research Summit will be held on May 5-7, 2025, in Lagos, Nigeria. This premier event brings together academic researchers, industry professionals, and public and private sector organizations to create meaningful dialogue addressing complex supply chain challenges.</p>
                            <div class="features mt-4">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-users fa-2x text-success me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Diverse Participation</h5>
                                        <p class="mb-0">Connect with experts from academia and industry</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-lightbulb fa-2x text-success me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Knowledge Exchange</h5>
                                        <p class="mb-0">Share insights and best practices</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-handshake fa-2x text-success me-3"></i>
                                    <div>
                                        <h5 class="mb-0">Networking</h5>
                                        <p class="mb-0">Build valuable professional connections</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card venue-card h-100">
                        <div class="card-body">
                            <h3 class="text-success mb-4">Venue Information</h3>
                            <div class="venue-image mb-4">
                                <img src="images/venue.jpg" class="img-fluid rounded" alt="Lagos Marriott Hotel">
                            </div>
                            <h4 class="mb-3">Lagos Marriott Hotel Ikeja</h4>
                            <div class="venue-details">
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-map-marker-alt fa-2x text-success me-3"></i>
                                    <div>
                                        <p class="mb-0">122 Joel Ogunnaike St, Ikeja GRA</p>
                                        <p class="mb-0">Lagos, Nigeria</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <i class="fas fa-phone fa-2x text-success me-3"></i>
                                    <div>
                                        <p class="mb-0">(+234) 813 984 4850</p>
                                    </div>
                                </div>
                                <div class="hybrid-info mt-4">
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-video fa-2x text-success me-3"></i>
                                        <div>
                                            <h5 class="mb-0">Hybrid Event</h5>
                                            <p class="mb-0">Join us in person or virtually</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Theme Section -->
    <section class="theme-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-5">
                    <h2 class="text-success h1 mb-5">Conference Theme</h2>
                    <div class="theme-quote">
                        <p>"Reimagining Africa's Supply Chains for a Sustainable Future"</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="mb-4">
                                <i class="fas fa-sync fa-3x text-success"></i>
                            </div>
                            <h5 class="card-title mb-3">Innovation & Technology</h5>
                            <p class="card-text mb-3">Exploring cutting-edge solutions and digital transformation in African supply chains through:</p>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Blockchain for transparency</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>AI-driven logistics optimization</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>IoT for real-time tracking</li>
                                <li><i class="fas fa-check text-success me-2"></i>Digital platforms for collaboration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="mb-4">
                                <i class="fas fa-leaf fa-3x text-success"></i>
                            </div>
                            <h5 class="card-title mb-3">Sustainability & Impact</h5>
                            <p class="card-text mb-3">Building environmentally and socially responsible supply chains through:</p>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Carbon footprint reduction</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Circular economy practices</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Ethical sourcing standards</li>
                                <li><i class="fas fa-check text-success me-2"></i>Community empowerment</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="mb-4">
                                <i class="fas fa-handshake fa-3x text-success"></i>
                            </div>
                            <h5 class="card-title mb-3">Regional Integration</h5>
                            <p class="card-text mb-3">Fostering partnerships and collaboration across Africa through:</p>
                            <ul class="list-unstyled text-start">
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Cross-border trade facilitation</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Knowledge sharing networks</li>
                                <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Standardized practices</li>
                                <li><i class="fas fa-check text-success me-2"></i>Policy harmonization</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call for Papers -->
    <section class="call-for-papers py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="section-title mb-5">Opportunities</h2>
                </div>
            </div>
            <div class="row g-4">
                <!-- Call for Papers Card -->
                <div class="col-lg-4">
                    <div class="card h-100 info-card">
                        <div class="card-banner">
                            <img src="images/infocard/banner.jpg" class="card-img-top" alt="Call for Papers">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title h4">Call for Papers</h3>
                            <p class="card-text">Supply chain scholars, students, professionals and decision makers are invited to submit papers for CARISCA's fifth annual Supply Chain Research Summit, to be held May 5-7, 2025, in Lagos, Nigeria.</p>
                            <p class="card-text">As in previous years, the 2025 Summit will be a hybrid event. The in-person venue is the Lagos Marriott Hotel Ikeja. Virtual attendees will participate via Zoom.</p>
                            <div class="mt-auto text-center">
                                <a href="https://carisca.knust.edu.gh/2025-summit-call-for-papers/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Paper Development Workshop Card -->
                <div class="col-lg-4">
                    <div class="card h-100 info-card">
                        <div class="card-banner">
                            <img src="images/infocard/paperdev.jpg" class="card-img-top" alt="Paper Development Workshop">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title h4">Paper Development Workshop</h3>
                            <p class="card-text">Selected faculty and senior doctoral candidates from higher education institutions (HEIs) in Africa will participate in a special Paper Development Workshop during our annual Supply Chain Research Summit.</p>
                            <p class="card-text">The goal is to create a platform for faculty and senior doctoral candidates to meet with and seek professional advice from senior supply chain scholars on specific academic research papers.</p>
                            <div class="mt-auto text-center">
                                <a href="https://carisca.knust.edu.gh/2025-paper-development-workshop/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PhD Dissertation Awards Card -->
                <div class="col-lg-4">
                    <div class="card h-100 info-card">
                        <div class="card-banner">
                            <img src="images/infocard/phd.jpg" class="card-img-top" alt="PhD Dissertation Awards">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title h4">PhD Dissertation Awards</h3>
                            <p class="card-text">The 2025 Supply Chain Research Summit program committee is pleased to announce a call for papers for the best PhD dissertation proposal.</p>
                            <p class="card-text">CARISCA will recognize a winner and two runner-ups with a certificate and stipend at the 2025 summit in Lagos, Nigeria, "Reimagining Africa's Supply Chains for a Sustainable Future," May 5-7.</p>
                            <div class="mt-auto text-center">
                                <a href="https://carisca.knust.edu.gh/2025-phd-dissertation-awards-competition/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">
                                    Learn More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title mb-5">What Past Attendees Say</h2>
                </div>
            </div>
            <div class="testimonial-carousel">
                <button class="nav-button prev-button">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button class="nav-button next-button">
                    <i class="fas fa-chevron-right"></i>
                </button>
                <div class="testimonial-items">
                    <div class="testimonial-item active">
                        <div class="testimonial-content">
                            <div class="testimonial-img">
                                <img src="images/testimonials/testimonial-1.jpg" alt="Dr. Sarah Mensah" class="rounded-circle">
                            </div>
                            <p class="testimonial-text">"The CARISCA Summit was an eye-opening experience. The discussions on sustainable supply chains in Africa were particularly enlightening. I left with valuable insights and connections."</p>
                            <div class="testimonial-author">
                                <h5>Dr. Sarah Mensah</h5>
                                <p>Supply Chain Director, Ghana Institute of Management</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="testimonial-img">
                                <img src="images/testimonials/testimonial-2.jpg" alt="Prof. John Adebayo" class="rounded-circle">
                            </div>
                            <p class="testimonial-text">"The networking opportunities were exceptional. Meeting fellow professionals and academics who share the same passion for improving Africa's supply chains was invaluable."</p>
                            <div class="testimonial-author">
                                <h5>Prof. John Adebayo</h5>
                                <p>Head of Logistics, University of Lagos</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-content">
                            <div class="testimonial-img">
                                <img src="images/testimonials/testimonial-3.jpg" alt="Dr. Amina Diallo" class="rounded-circle">
                            </div>
                            <p class="testimonial-text">"The quality of presentations and workshops was outstanding. The focus on practical solutions for African supply chain challenges made it particularly relevant to our work."</p>
                            <div class="testimonial-author">
                                <h5>Dr. Amina Diallo</h5>
                                <p>Research Director, West African Supply Chain Institute</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-controls">
                    <div class="testimonial-dots"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- About CARISCA Section -->
    <section class="about-carisca py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="section-title">About CARISCA</h2>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-lg-7">
                    <div class="about-carisca-content">
                        <h3 class="mb-4">The Centre for Applied Research and Innovation in Supply Chain – Africa (CARISCA)</h3>
                        <p class="mb-4">CARISCA is a partnership between Kwame Nkrumah University of Science and Technology (KNUST) and Arizona State University (ASU) with support from the United States Agency for International Development (USAID).</p>
                        <p class="mb-4">CARISCA's key objective is to support higher education institutions in building the capacity necessary to provide best-in-class research, degree programs and training; facilitate research translation and utilization; and engage stakeholders in best practices and policy changes that strengthen supply chains.</p>
                        <div class="mt-4">
                            <a href="https://carisca.knust.edu.gh/subscribe" class="btn btn-primary">Join Our Mailing List</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card quick-facts-card">
                        <div class="card-header" style="background-color: #32A879; border: none;">
                            <h4 class="mb-0 text-white">Quick Facts</h4>
                        </div>
                        <div class="card-body">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-building text-success"></i> Established</span>
                                    <span class="badge" style="background-color: #32A879;">2020</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-graduation-cap text-success"></i> Host Institution</span>
                                    <span class="badge" style="background-color: #32A879;">KNUST</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-globe-africa text-success"></i> Location</span>
                                    <span class="badge" style="background-color: #32A879;">Kumasi, Ghana</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <span><i class="fas fa-handshake text-success"></i> Partners</span>
                                    <span class="badge" style="background-color: #32A879;">ASU, USAID</span>
                                </li>
                            </ul>
                            <div class="mt-4">
                                <h5 class="mb-3" style="color: #1a2b49;">Quick Links</h5>
                                <div class="d-grid gap-2">
                                    <a href="https://carisca.knust.edu.gh/about-us/about-us/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">
                                        <i class="fas fa-info-circle"></i> About Us
                                    </a>
                                    <a href="https://carisca.knust.edu.gh/component-1-research/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">
                                        <i class="fas fa-microscope"></i> Our Research
                                    </a>
                                    <a href="https://carisca.knust.edu.gh/news-events/" class="btn btn-outline-success" target="_blank" rel="noopener noreferrer">
                                        <i class="fas fa-newspaper"></i> News & Events
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
