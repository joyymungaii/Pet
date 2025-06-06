<?php
session_start();

$error = "";

if (isset($_POST['login_btn'])) {
    $host = 'localhost';
    $db = 'pet_adoption';
    $user = 'root';
    $pass = '';

    $conn = new mysqli($host, $user, $pass, $db);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $input = trim($_POST['username']);
    $password = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $input, $input);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['success_message'] = "Welcome back, " . htmlspecialchars($user['username']) . "!";
            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid username or password.";
        }
    } else {
        $error = "No user found with provided credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - PAFS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <span class="ms-9 fw-bold text-primary fs-2">PAFS</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pets.html">Find a Pet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="foster.html">Foster</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="resources.html">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <a href="login.html" class="btn btn-outline-primary me-2 active">Login</a>
                    <a href="register.html" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>
    <?php if (!empty($error)): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i>
            <?= htmlspecialchars($error) ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>


    <!-- Login Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <h2>Welcome Back</h2>
                                <p class="text-muted">Sign in to your account to continue</p>
                            </div>

                            <!-- Alert for invalid credentials (hidden by default) -->
                            <div class="alert alert-danger alert-dismissible fade show d-none" id="loginAlert" role="alert">
                                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                                Invalid username or password. Please try again.
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>

                            <form action="login.php" method="POST">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username or Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username or email" required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label">Password</label>
                                        <a href="forgot-password.html" class="text-decoration-none small">Forgot Password?</a>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required>
                                        <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                                            <i class="bi bi-eye"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                </div>
                                <div class="d-grid mb-4">
                                    <button type="submit" name="login_btn" class="btn btn-primary btn-lg">Sign In</button>
                                </div>
                            </form>

                            <div class="text-center mb-4">
                                <p>Don't have an account? <a href="register.html">Register now</a></p>
                            </div>

                            <div class="separator text-center mb-4">
                                <span class="or-text">OR</span>
                            </div>

                            <div class="social-login">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <a href="#" class="btn btn-outline-secondary w-100">
                                            <i class="bi bi-google me-2"></i> Google
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="#" class="btn btn-outline-secondary w-100">
                                            <i class="bi bi-facebook me-2"></i> Facebook
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Help Box -->
                    <div class="card border-0 shadow-sm mt-4">
                        <div class="card-body p-4">
                            <h5>Need Help?</h5>
                            <p class="mb-0">If you're having trouble logging in or need assistance, please <a href="about.html#contact">contact our support team</a> or call us at (+254) 546-123-456.</p>
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
                        <li><a href="#" class="text-white">Pet Care Tips</a></li>
                        <li><a href="#" class="text-white">Training Guides</a></li>
                        <li><a href="#" class="text-white">FAQs</a></li>
                        <li><a href="#" class="text-white">Blog</a></li>
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

    <!-- Custom CSS for the separator -->
    <style>
        .separator {
            position: relative;
            text-align: center;
            margin: 20px 0;
        }
        
        .separator::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background-color: #dee2e6;
        }
        
        .or-text {
            position: relative;
            background-color: #fff;
            padding: 0 15px;
            font-size: 14px;
            color: #6c757d;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');

            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                togglePassword.innerHTML = type === 'password' ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
            });

            // Form submission
            const loginForm = document.getElementById('loginForm');
            
            loginForm.addEventListener('submit', function(event) {
                event.preventDefault();
                
                const username = document.getElementById('username').value;
                const password = document.getElementById('password').value;
                
                // This is where you would normally send the credentials to your server
                // For demonstration purposes, we'll just simulate a login
                
                // Simulate login validation (replace with actual authentication)
                if (username === 'demo@pafs.org' && password === 'password123') {
                    // Successful login - redirect to dashboard
                    window.location.href = 'dashboard.html';
                } else {
                    // Show error message
                    document.getElementById('loginAlert').classList.remove('d-none');
                }
            });
        });
    </script>
</body>
</html>