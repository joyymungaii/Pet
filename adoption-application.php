<?php
// adoption-application.php

// 1. Database Connection (Replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_adoption";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get and Validate Pet ID
$pet_id = filter_input(INPUT_GET, 'pet_id', FILTER_SANITIZE_NUMBER_INT);
if (!$pet_id) {
    // Handle the case where pet_id is missing or invalid
    echo "Error: Invalid pet ID.";
    $conn->close(); // Close the connection before exiting
    exit();
}

// 3. Fetch Pet Data from the Database
$sql = "SELECT name, breed, gender, image_url FROM pets WHERE pet_id = ?"; // Assuming your pet table is named 'pets' and has these columns
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $pet_id); // "i" indicates integer
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    // Handle the case where the pet with the given ID doesn't exist
    echo "Error: Pet not found.";
    $stmt->close();
    $conn->close();
    exit();
}

$pet = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adoption Application - PAFS</title>
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
                        <a class="nav-link active" href="pets.html">Find a Pet</a>
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
                    <a href="login.html" class="btn btn-outline-primary me-2">Login</a>
                    <a href="register.html" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Application Form Section -->
    <section class="py-5">
        <div class="container">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="pets.html">Find a Pet</a></li>
                    <li class="breadcrumb-item"><a href="pet-details.html?id=1">Buddy</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Adoption Application</li>
                </ol>
            </nav>
            
            <div class="row mb-4">
                <div class="col-md-8">
                    <h1>Adoption Application</h1>
                    <p class="lead">Thank you for your interest in adopting Buddy. Please complete this application to help us find the best match for both you and the pet.</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="d-flex align-items-center justify-content-md-end">
                    <img src="<?php echo htmlspecialchars($pet['image_url']); ?>" alt="<?php echo htmlspecialchars($pet['name']); ?>" class="rounded-circle" width="60" height="60" style="object-fit: cover;">
                    <div class="ms-3">
                        <h3><?php echo htmlspecialchars($pet['name']); ?></h3>
                        <p class="text-muted"><?php echo htmlspecialchars($pet['breed']); ?> • <?php echo htmlspecialchars(ucfirst($pet['gender'])); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Form Progress -->
            <div class="form-progress mb-4">
                <div class="form-progress-step active">
                    <div class="form-progress-step-icon">1</div>
                    <span>Personal Info</span>
                </div>
                <div class="form-progress-step">
                    <div class="form-progress-step-icon">2</div>
                    <span>Home Environment</span>
                </div>
                <div class="form-progress-step">
                    <div class="form-progress-step-icon">3</div>
                    <span>Pet Experience</span>
                </div>
                <div class="form-progress-step">
                    <div class="form-progress-step-icon">4</div>
                    <span>Review & Submit</span>
                </div>
            </div>
            
            <!-- Application Form -->
            <div class="card shadow-sm">
                <div class="card-body p-4">
                <form id="adoption-application-form" action="submit_application.php" method="POST">                        <!-- Step 1: Personal Information -->
                        <div id="step-1" class="form-step active">
                            <h3 class="card-title mb-4">Personal Information</h3>
                            
                            <div class="row g-3">
                            <input type="hidden" name="pet_id" value="<?php echo htmlspecialchars($pet_id); ?>">

                                <div class="col-md-6">
                                    <label for="first-name" class="form-label">First Name *</label>
                                    <input type="text" class="form-control" id="first-name" name="first_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="last-name" class="form-label">Last Name *</label>
                                    <input type="text" class="form-control" id="last-name" name="last_name" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">Street Address *</label>
                                    <input type="text" class="form-control" id="address"  name="address" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="city" class="form-label">City *</label>
                                    <input type="text" class="form-control" id="city" name="city" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="state" class="form-label">State *</label>
                                    <select class="form-select" id="state" name="state" required>
                                        <option value="" selected disabled>Select State</option>
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <!-- Add all states here -->
                                        <option value="WY">Wyoming</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="zip" class="form-label">ZIP Code *</label>
                                    <input type="text" class="form-control" id="zip" name="zip" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="age" class="form-label">Age *</label>
                                    <select class="form-select" name="age" id="age" required>
                                        <option value="" selected disabled>Select Age Range</option>
                                        <option value="18-25">18-25</option>
                                        <option value="26-35">26-35</option>
                                        <option value="36-45">36-45</option>
                                        <option value="46-55">46-55</option>
                                        <option value="56-65">56-65</option>
                                        <option value="66+">66+</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="occupation" class="form-label">Occupation *</label>
                                    <input type="text" class="form-control" id="occupation" name="occupation" required>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" class="btn btn-primary" onclick="nextStep(1)">Next: Home Environment <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                        
                        <!-- Step 2: Home Environment -->
                        <div id="step-2" class="form-step">
                            <h3 class="card-title mb-4">Home Environment</h3>
                            
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="housing-type" class="form-label">Housing Type *</label>
                                    <select class="form-select" name="housing-type"  id="housing-type"required>
                                        <option value="" selected disabled>Select Housing Type</option>
                                        <option value="house">House</option>
                                        <option value="apartment">Apartment</option>
                                        <option value="condo">Condo</option>
                                        <option value="townhouse">Townhouse</option>
                                        <option value="mobile-home">Mobile Home</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="ownership" class="form-label">Do you own or rent? *</label>
                                    <select class="form-select" id="ownership" name="ownership" id="ownership" required>
                                        <option value="" selected disabled>Select Option</option>
                                        <option value="own">Own</option>
                                        <option value="rent">Rent</option>
                                    </select>
                                </div>
                                
                                <div class="col-12" id="landlord-info" style="display: none;">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h6>Landlord Information</h6>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="landlord-name" class="form-label">Landlord Name *</label>
                                                    <input type="text" class="form-control" name="landlord-name" id="landlord-name">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="landlord-phone" class="form-label">Landlord Phone *</label>
                                                    <input type="tel" class="form-control" name="landlord-phone" id="landlord-phone">
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="pet-permission" id="pet-permission">
                                                        <label class="form-check-label" for="pet-permission">
                                                            I have permission to have pets in my rental
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="yard" class="form-label">Do you have a yard? *</label>
                                    <select class="form-select" name="yard" id="yard" required>
                                        <option value="" selected disabled>Select Option</option>
                                        <option value="yes-fenced">Yes, fenced</option>
                                        <option value="yes-unfenced">Yes, unfenced</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="fence-height" class="form-label">If fenced, how tall is the fence?</label>
                                    <select class="form-select" name="fence-height" id="fence-height">
                                        <option value="" selected disabled>Select Height</option>
                                        <option value="less-than-4">Less than 4 feet</option>
                                        <option value="4-6">4-6 feet</option>
                                        <option value="more-than-6">More than 6 feet</option>
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <label for="household-members" class="form-label">Who lives in your household? *</label>
                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label for="adults" class="form-label">Adults (18+)</label>
                                            <input type="number" class="form-control" name="adults" id="adults" min="1" value="1" required>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="children" class="form-label">Children (under 18)</label>
                                            <input type="number" class="form-control" name="children" id="children" min="0" value="0">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="seniors" class="form-label">Seniors (65+)</label>
                                            <input type="number" class="form-control" name="seniors" id="seniors" min="0" value="0">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12" id="children-ages" style="display: none;">
                                    <label for="children-ages-input" class="form-label">Ages of children in the home:</label>
                                    <input type="text" class="form-control" name="children-ages-input" id="children-ages-input" placeholder="e.g., 5, 8, 12">
                                </div>
                                
                                <div class="col-12">
                                    <label class="form-label">Is anyone in your household allergic to animals? *</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="allergies" id="allergies-yes" value="yes">
                                        <label class="form-check-label" for="allergies-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="allergies" id="allergies-no" value="no" checked>
                                        <label class="form-check-label" for="allergies-no">No</label>
                                    </div>
                                </div>
                                
                                <div class="col-12" id="allergies-details" style="display: none;">
                                    <label for="allergies-description" class="form-label">Please describe the allergies:</label>
                                    <textarea class="form-control" name="allergies-description" id="allergies-description" rows="2"></textarea>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-outline-secondary" onclick="prevStep(2)"><i class="bi bi-arrow-left"></i> Previous</button>
                                <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next: Pet Experience <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                        
                        <!-- Step 3: Pet Experience -->
                        <div id="step-3" class="form-step">
                            <h3 class="card-title mb-4">Pet Experience</h3>
                            
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Do you currently have any pets? *</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="current-pets" id="current-pets-yes" value="yes">
                                        <label class="form-check-label" for="current-pets-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="current-pets" id="current-pets-no" value="no" checked>
                                        <label class="form-check-label" for="current-pets-no">No</label>
                                    </div>
                                </div>
                                
                                <div class="col-12" id="current-pets-details" style="display: none;">
                                    <div class="card bg-light">
                                        <div class="card-body">
                                            <h6>Current Pets</h6>
                                            <div id="current-pets-container">
                                                <div class="row g-3 mb-3 current-pet-row">
                                                    <div class="col-md-3">
                                                        <label class="form-label">Type</label>
                                                        <select class="form-select" name="current-pet-name">
                                                            <option value="" selected disabled>Select Type</option>
                                                            <option value="dog">Dog</option>
                                                            <option value="cat">Cat</option>
                                                            <option value="bird">Bird</option>
                                                            <option value="small-animal">Small Animal</option>
                                                            <option value="reptile">Reptile</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label class="form-label">Breed</label>
                                                        <input type="text" name="breed" class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="form-label">Age</label>
                                                        <input type="text" name="breed" class="form-control">
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="form-label">Gender</label>
                                                        <select class="form-select" name="">
                                                            <option value="" selected disabled>Select</option>
                                                            <option value="male">Male</option>
                                                            <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label class="form-label">Spayed/Neutered</label>
                                                        <select class="form-select">
                                                            <option value="" selected disabled>Select</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-sm btn-outline-primary" id="add-pet-btn">
                                                <i class="bi bi-plus-circle"></i> Add Another Pet
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <label class="form-label">Have you had pets in the past? *</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="past-pets" id="past-pets-yes" value="yes">
                                        <label class="form-check-label" for="past-pets-yes">Yes</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="past-pets" id="past-pets-no" value="no" checked>
                                        <label class="form-check-label" for="past-pets-no">No</label>
                                    </div>
                                </div>
                                
                                <div class="col-12" id="past-pets-details" style="display: none;">
                                    <label for="past-pets-description" class="form-label">Please describe your past pets and what happened to them:</label>
                                    <textarea class="form-control" name="past-pets-description" id="past-pets-description"  rows="3"></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <label for="vet-info" class="form-label">Veterinarian Information (current or previous)</label>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="vet-name" class="form-label">Veterinarian/Clinic Name</label>
                                            <input type="text" class="form-control" name="vet-name" id="vet-name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="vet-phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" name="vet-phone" id="vet-phone">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <label for="pet-care" class="form-label">How many hours per day will the pet be left alone? *</label>
                                    <select class="form-select" name="pet-care"  id="pet-care" required>
                                        <option value="" selected disabled>Select Option</option>
                                        <option value="0-2">0-2 hours</option>
                                        <option value="3-5">3-5 hours</option>
                                        <option value="6-8">6-8 hours</option>
                                        <option value="8+">More than 8 hours</option>
                                    </select>
                                </div>
                                
                                <div class="col-12">
                                    <label for="pet-sleep" class="form-label">Where will the pet sleep at night? *</label>
                                    <input type="text" class="form-control" name="pet-sleep" id="pet-sleep" required>
                                </div>
                                
                                <div class="col-12">
                                    <label for="pet-exercise" class="form-label">How will you exercise the pet? *</label>
                                    <textarea class="form-control" name="pet-exercise"  id="pet-exercise"rows="2" required></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <label for="pet-training" class="form-label">What training plans do you have for the pet?</label>
                                    <textarea class="form-control" name="pet-training" id="pet-training" rows="2"></textarea>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-outline-secondary" onclick="prevStep(3)"><i class="bi bi-arrow-left"></i> Previous</button>
                                <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next: Review & Submit <i class="bi bi-arrow-right"></i></button>
                            </div>
                        </div>
                        
                        <!-- Step 4: Review & Submit -->
                        <div id="step-4" class="form-step">
                            <h3 class="card-title mb-4">Review & Submit</h3>
                            
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="additional-info" class="form-label">Is there anything else you'd like us to know about you or your home?</label>
                                    <textarea class="form-control" name="additional-info" id="additional-info" rows="3"></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <label for="questions" class="form-label">Do you have any questions for us?</label>
                                    <textarea class="form-control" name="questions" id="questions" rows="2"></textarea>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="terms-agree" required>
                                        <label class="form-check-label" for="terms-agree" >
                                            I understand that submission of this application does not guarantee adoption and that the rescue organization reserves the right to deny any application. *
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="home-visit" required>
                                        <label class="form-check-label" for="home-visit">
                                            I agree to a home visit as part of the adoption process. *
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="accurate-info" required>
                                        <label class="form-check-label" for="accurate-info">
                                            I certify that all information provided in this application is true and accurate. *
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between mt-4">
                                <button type="button" class="btn btn-outline-secondary" onclick="prevStep(4)"><i class="bi bi-arrow-left"></i> Previous</button>
                                <button type="submit" class="btn btn-success">Submit Application</button>
                            </div>
                        </div>
                    </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const ownershipSelect = document.getElementById('ownership');
    const landlordInfoDiv = document.getElementById('landlord-info');
    const landlordNameInput = document.getElementById('landlord-name');
    const landlordPhoneInput = document.getElementById('landlord-phone');

    function toggleLandlordRequired() {
        if (ownershipSelect.value === 'rent') {
            if (landlordNameInput) landlordNameInput.required = true;
            if (landlordPhoneInput) landlordPhoneInput.required = true;
        } else {
            if (landlordNameInput) landlordNameInput.required = false;
            if (landlordPhoneInput) landlordPhoneInput.required = false;
        }
    }

    // Initial call to set required on page load (in case "Rent" is the default)
    toggleLandlordRequired();

    // Event listener for ownership change
    ownershipSelect.addEventListener('change', function() {
        if (this.value === 'rent') {
            landlordInfoDiv.style.display = 'block';
            toggleLandlordRequired(); // Make them required when shown
        } else {
            landlordInfoDiv.style.display = 'none';
            toggleLandlordRequired(); // Remove required when hidden
        }
    });

    // ... your other JavaScript code ...
});
        // Form step navigation
        function nextStep(currentStep) {
            document.getElementById(`step-${currentStep}`).classList.remove('active');
            document.getElementById(`step-${currentStep + 1}`).classList.add('active');
            
            // Update progress bar
            const progressSteps = document.querySelectorAll('.form-progress-step');
            progressSteps[currentStep - 1].classList.add('completed');
            progressSteps[currentStep].classList.add('active');
            
            // Scroll to top of form
            window.scrollTo({
                top: document.querySelector('.form-progress').offsetTop - 100,
                behavior: 'smooth'
            });
        }
        
        function prevStep(currentStep) {
            document.getElementById(`step-${currentStep}`).classList.remove('active');
            document.getElementById(`step-${currentStep - 1}`).classList.add('active');
            
            // Update progress bar
            const progressSteps = document.querySelectorAll('.form-progress-step');
            progressSteps[currentStep - 1].classList.remove('active');
            progressSteps[currentStep - 2].classList.remove('completed');
            progressSteps[currentStep - 2].classList.add('active');
            
            // Scroll to top of form
            window.scrollTo({
                top: document.querySelector('.form-progress').offsetTop - 100,
                behavior: 'smooth'
            });
        }
        
        // Show/hide conditional fields
        document.getElementById('ownership').addEventListener('change', function() {
            if (this.value === 'rent') {
                document.getElementById('landlord-info').style.display = 'block';
            } else {
                document.getElementById('landlord-info').style.display = 'none';
            }
        });
        
        document.getElementById('children').addEventListener('input', function() {
            if (parseInt(this.value) > 0) {
                document.getElementById('children-ages').style.display = 'block';
            } else {
                document.getElementById('children-ages').style.display = 'none';
            }
        });
        
        document.querySelectorAll('input[name="allergies"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('allergies-details').style.display = 'block';
                } else {
                    document.getElementById('allergies-details').style.display = 'none';
                }
            });
        });
        
        document.querySelectorAll('input[name="current-pets"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('current-pets-details').style.display = 'block';
                } else {
                    document.getElementById('current-pets-details').style.display = 'none';
                }
            });
        });
        
        document.querySelectorAll('input[name="past-pets"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                if (this.value === 'yes') {
                    document.getElementById('past-pets-details').style.display = 'block';
                } else {
                    document.getElementById('past-pets-details').style.display = 'none';
                }
            });
        });
        
        // Add more pets functionality
        document.getElementById('add-pet-btn').addEventListener('click', function() {
            const petContainer = document.getElementById('current-pets-container');
            const petRow = document.querySelector('.current-pet-row').cloneNode(true);
            
            // Clear input values
            petRow.querySelectorAll('input, select').forEach(function(input) {
                input.value = input.tagName === 'SELECT' ? '' : '';
            });
            
            petContainer.appendChild(petRow);
        });
        
        // Form submission
        document.getElementById('adoption-application-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // In a real application, you would collect all form data and submit it to the server
            alert('Thank you for submitting your adoption application! We will review it and contact you soon.');
            
            // Redirect to confirmation page
            window.location.href = 'pets.php';
        });
    </script>
    <script src="main.js"></script>
</body>
</html>