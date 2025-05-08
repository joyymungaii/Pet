<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAFS - Pet Adoption and Foster System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <?php
        include('navbar.php');
    ?>
    <?php
        session_start();
        if (isset($_SESSION['success_message'])) {
            echo '<div class="alert alert-success text-center">' . $_SESSION['success_message'] . '</div>';
            unset($_SESSION['success_message']);
        }
    ?>

    <!-- Hero Section -->
    <header class="hero-section text-white text-center">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Find Your Perfect Companion</h1>
                    <p class="lead mb-4">Connect with shelters and rescue organizations to adopt or foster pets in need of loving homes.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a href="pets.php" class="btn btn-primary btn-lg px-4 me-sm-3">Find a Pet</a>
                        <a href="foster.php" class="btn btn-outline-light btn-lg px-4">Become a Foster</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    

    <!-- Success Stories Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Success Stories</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="image/rabbit.jpeg" class="img-fluid rounded-start h-100 object-fit-cover" alt="Success story">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Charlie Found His Forever Home</h5>
                                    <p class="card-text">After 6 months in the shelter, Charlie was adopted by the Johnson family. Now he enjoys daily walks in the park and has become best friends with their son.</p>
                                    <p class="card-text"><small class="text-muted">Adopted 3 months ago</small></p>
                                    <a href="foster.html#success" class="btn btn-sm btn-outline-primary">Read Full Story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="row g-0">
                            <div class="col-md-5">
                                <img src="image/success.jpeg" class="img-fluid rounded-start h-100 object-fit-cover" alt="Success story">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body">
                                    <h5 class="card-title">Charlie Found His Forever Home</h5>
                                    <p class="card-text">After 6 months in the shelter, Charlie was adopted by the Johnson family. Now he enjoys daily walks in the park and has become best friends with their son.</p>
                                    <p class="card-text"><small class="text-muted">Adopted 3 months ago</small></p>
                                    <a href="/foster.html#success" class="btn btn-sm btn-outline-primary">Read Full Story</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">How It Works</h2>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <div class="p-3">
                        <div class="icon-circle bg-primary text-white mb-3">
                            <i class="bi bi-search fs-2"></i>
                        </div>
                        <h4>Search</h4>
                        <p>Browse our database of pets from shelters and rescue organizations in your area.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="p-3">
                        <div class="icon-circle bg-primary text-white mb-3">
                            <i class="bi bi-file-earmark-text fs-2"></i>
                        </div>
                        <h4>Apply</h4>
                        <p>Submit an application to adopt or foster a pet that matches your lifestyle and preferences.</p>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="p-3">
                        <div class="icon-circle bg-primary text-white mb-3">
                            <i class="bi bi-house-heart fs-2"></i>
                        </div>
                        <h4>Welcome Home</h4>
                        <p>After approval, welcome your new companion into your loving home.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Shelter/Rescue CTA Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2>Are you a shelter or rescue organization?</h2>
                    <p class="lead mb-0">Join our network to increase visibility for your adoptable pets and streamline your adoption process.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="shelter-signup.php" class="btn btn-light btn-lg">Register Your Organization</a>
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