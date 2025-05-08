<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - PAFS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <?php
        include('navbar.php');
    ?>

    <!-- Hero Section -->
    <header class="hero-section text-white text-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/image/aboutt.jpg');">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Our Story</h1>
                    <p class="lead mb-4">We're on a mission to create a world where every pet has a loving home. Learn about our journey, our team, and how we're making a difference.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Mission & Vision Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="/image/parent.jpg" alt="Pets and volunteers" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase">Our Mission</h6>
                        <h2 class="mb-4">Creating Happy Endings for Pets in Need</h2>
                        <p>The Pet Adoption and Foster System (PAFS) is dedicated to finding loving homes for abandoned, neglected, and surrendered pets. We work tirelessly to connect animals in need with caring individuals and families, while also providing education and resources to ensure successful, lifelong matches.</p>
                        <p>We believe that every pet deserves a chance at a happy, healthy life in a loving home. Through our adoption and foster programs, community education, and advocacy efforts, we strive to reduce pet homelessness and improve animal welfare in our community.</p>
                    </div>
                    <div>
                        <h6 class="text-primary text-uppercase">Our Vision</h6>
                        <p class="mb-0">A community where every pet has a loving home, where pet owners have the resources they need to care for their animals, and where the bond between humans and animals is celebrated and nurtured.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Values Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary text-uppercase">Our Values</h6>
                <h2>The Principles That Guide Us</h2>
                <p class="lead">These core values shape everything we do at PAFS.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-heart-fill fs-2"></i>
                            </div>
                            <h4>Compassion</h4>
                            <p>We treat all animals with kindness, respect, and dignity, recognizing their inherent worth and individual needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-house-heart-fill fs-2"></i>
                            </div>
                            <h4>Responsibility</h4>
                            <p>We are committed to responsible pet ownership and ensuring the well-being of animals in our care and in the community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-people-fill fs-2"></i>
                            </div>
                            <h4>Community</h4>
                            <p>We believe in the power of community collaboration to create lasting change for animals in need.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-lightbulb-fill fs-2"></i>
                            </div>
                            <h4>Education</h4>
                            <p>We empower pet owners through education, providing the knowledge and resources needed for successful pet ownership.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Team Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary text-uppercase">Our Core Team</h6>
                <h2>The People Behind PAFS</h2>
                <p class="lead">Meet the dedicated professionals who make our mission possible.</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center team-card">
                        <img src="image/cat.jpeg" class="card-img-top" alt="Sarah Johnson">
                        <div class="card-body p-4">
                            <h5 class="card-title">Sarah Johnson</h5>
                            <p class="text-primary mb-3">Executive Director</p>
                            <p class="card-text">With over 15 years of experience in animal welfare, Sarah leads our organization with passion and vision.</p>
                            <div class="social-icons mt-3">
                                <a href="#" class="text-primary me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-primary me-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-envelope-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center team-card">
                        <img src="image/dog.jpeg" class="card-img-top" alt="Michael Rodriguez">
                        <div class="card-body p-4">
                            <h5 class="card-title">Michael Rodriguez</h5>
                            <p class="text-primary mb-3">Adoption Program Manager</p>
                            <p class="card-text">Michael oversees our adoption program, ensuring that each pet finds the perfect match for their forever home.</p>
                            <div class="social-icons mt-3">
                                <a href="#" class="text-primary me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-primary me-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-envelope-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center team-card">
                        <img src="image/cat.jpeg" class="card-img-top" alt="Emily Chen">
                        <div class="card-body p-4">
                            <h5 class="card-title">Emily Chen</h5>
                            <p class="text-primary mb-3">Foster Program Coordinator</p>
                            <p class="card-text">Emily manages our network of foster homes, providing support and resources to our dedicated foster families.</p>
                            <div class="social-icons mt-3">
                                <a href="#" class="text-primary me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-primary me-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-envelope-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center team-card">
                        <img src="image/dog.jpeg" class="card-img-top" alt="Dr. James Wilson">
                        <div class="card-body p-4">
                            <h5 class="card-title">Dr. James Wilson</h5>
                            <p class="text-primary mb-3">Veterinary Director</p>
                            <p class="card-text">Dr. Wilson leads our veterinary team, ensuring that all pets in our care receive top-quality medical attention.</p>
                            <div class="social-icons mt-3">
                                <a href="#" class="text-primary me-2"><i class="bi bi-linkedin"></i></a>
                                <a href="#" class="text-primary me-2"><i class="bi bi-twitter"></i></a>
                                <a href="#" class="text-primary"><i class="bi bi-envelope-fill"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners & Sponsors Section -->
    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h6 class="text-primary text-uppercase">Our Partners</h6>
                <h2>Working Together for Animals</h2>
                <p class="lead">We're grateful for the support of these organizations and businesses.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="/image/logo1.jpeg" alt="Partner Logo" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="/image/logo2.png" alt="Partner Logo" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="/image/logo3.png" alt="Partner Logo" class="img-fluid partner-logo">
                </div>
                <div class="col-6 col-md-3 mb-4 text-center">
                    <img src="/image/logo8.jpeg" alt="Partner Logo" class="img-fluid partner-logo">
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="shelter-signup.html" class="btn btn-outline-primary">Become a Partner</a>
            </div>
        </div>
    </section>

    <!-- Get Involved Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2>Get Involved</h2>
                <p class="lead">There are many ways to support our mission and make a difference in the lives of pets in need.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-transparent border-white">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-white text-primary mb-3">
                                <i class="bi bi-house-heart-fill fs-2"></i>
                            </div>
                            <h4>Adopt </h4>
                            <p>Open your heart and home to a pet in need.</p>
                            <div class="mt-3">
                                <a href="pets.html" class="btn btn-light">Find a Pet</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-transparent border-white">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-white text-primary mb-3">
                                <i class="bi bi-people-fill fs-2"></i>
                            </div>
                            <h4>Foster</h4>
                            <p>Fostering saves lives and provides animals with the love and care they need until they find their forever homes.</p>
                            <div class="mt-3">
                                <a href="foster.html" class="btn btn-outline-light ms-2">Learn About Fostering</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 bg-transparent border-white">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-white text-primary mb-3">
                                <i class="bi bi-heart-fill fs-2"></i>
                            </div>
                            <h4>Partnership</h4>
                            <p>Partner with us.</p>
                            <div class="mt-3">
                                <a href="/shelter-signup.html" class="btn btn-light">Partner</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2 class="mb-4">Contact Us</h2>
                    <p>Have questions, comments, or feedback? We'd love to hear from you! Fill out the form, and a member of our team will get back to you as soon as possible.</p>
                    <div class="mb-4">
                        <h5>Visit Us</h5>
                        <address>
                            <p class="mb-1">123 Pet Street</p>
                            <p class="mb-1">Ruaka, Kenya</p>
                        </address>
                    </div>
                    <div class="mb-4">
                        <h5>Hours of Operation</h5>
                        <p class="mb-1">Monday - Friday: 9:00 AM - 6:00 PM</p>
                        <p class="mb-1">Saturday: 10:00 AM - 5:00 PM</p>
                        <p class="mb-1">Sunday: 12:00 PM - 4:00 PM</p>
                    </div>
                    <div>
                        <h5>Contact Information</h5>
                        <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> (+254) 788-123-567</p>
                        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i> info@pafs.org</p>
                        <div class="social-icons mt-3">
                            <a href="#" class="text-primary me-3"><i class="bi bi-facebook fs-4"></i></a>
                            <a href="#" class="text-primary me-3"><i class="bi bi-twitter fs-4"></i></a>
                            <a href="#" class="text-primary me-3"><i class="bi bi-instagram fs-4"></i></a>
                            <a href="#" class="text-primary"><i class="bi bi-youtube fs-4"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4">
                            <h5 class="card-title mb-4">Send Us a Message</h5>
                            <form>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="firstName" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="firstName" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="lastName" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="subject" class="form-label">Subject</label>
                                    <select class="form-select" id="subject" required>
                                        <option selected disabled value="">Select a subject</option>
                                        <option value="adoption">Adoption Inquiry</option>
                                        <option value="foster">Foster Program</option>
                                        <option value="volunteer">Volunteer Opportunities</option>
                                        <option value="donation">Donations</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="5" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <h5>Pet Adoption and Foster System</h5>
                    <p>Connecting pets with loving homes since 2023.</p>
                    <div class="social-icons">
                        <a href="#" class="text-white me-3"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="text-white me-3"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.html" class="text-white">Home</a></li>
                        <li><a href="pets.html" class="text-white">Find a Pet</a></li>
                        <li><a href="foster.html" class="text-white">Foster</a></li>
                        <li><a href="resources.html" class="text-white">Resources</a></li>
                        <li><a href="about.html" class="text-white">About Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-4">
                    <h5>Resources</h5>
                    <ul class="list-unstyled">
                        <li><a href="resources.html" class="text-white">Pet Care Tips</a></li>
                        <li><a href="resources.html" class="text-white">Training Guides</a></li>
                        <li><a href="resources.html" class="text-white">FAQs</a></li>
                        <li><a href="resources.html" class="text-white">Blog</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h5>Newsletter</h5>
                    <p>Subscribe to receive updates on adoptable pets and events.</p>
                    <form class="row g-2">
                        <div class="col-8">
                            <input type="email" class="form-control" placeholder="Email address">
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-0">&copy; Pet Adoption and Foster System made with Love.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>