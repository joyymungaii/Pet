<?php
// ✅ Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pet_adoption";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request method is POST AND the btnsubmit button was pressed
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btnsubmit'])) {
    // Function to sanitize input data
    function sanitize_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Retrieve and sanitize form data
    $firstName = sanitize_input($_POST["firstName"]);
    $lastName = sanitize_input($_POST["lastName"]);
    $email = sanitize_input($_POST["email"]);
    $phone = sanitize_input($_POST["phone"]);
    $streetAddress = sanitize_input($_POST["address"]);
    $city = sanitize_input($_POST["city"]);
    $state = sanitize_input($_POST["state"]);
    $zipCode = sanitize_input($_POST["zipCode"]);
    $occupation = sanitize_input($_POST["occupation"]);
    $employer = sanitize_input($_POST["employer"]);
    $emergencyContact = sanitize_input($_POST["emergencyContact"]);
    $housingType = sanitize_input($_POST["housingType"]);
    $housingStatus = sanitize_input($_POST["housingStatus"]);
    $landlordName = isset($_POST["landlordName"]) ? sanitize_input($_POST["landlordName"]) : NULL;
    $landlordPhone = isset($_POST["landlordPhone"]) ? sanitize_input($_POST["landlordPhone"]) : NULL;
    $yardDescription = sanitize_input($_POST["yardDescription"]);
    $fenceDetails = isset($_POST["fenceDetails"]) ? sanitize_input($_POST["fenceDetails"]) : NULL;
    $hasPool = isset($_POST["hasPool"]) ? 1 : 0;
    $poolDetails = isset($_POST["poolDetails"]) ? sanitize_input($_POST["poolDetails"]) : NULL;
    $adultsCount = sanitize_input($_POST["adultsCount"]);
    $childrenCount = sanitize_input($_POST["childrenCount"]);
    $childrenAges = isset($_POST["childrenAges"]) ? sanitize_input($_POST["childrenAges"]) : NULL;
    $hasAllergies = isset($_POST["hasAllergies"]) ? 1 : 0;
    $allergiesDetails = isset($_POST["allergiesDetails"]) ? sanitize_input($_POST["allergiesDetails"]) : NULL;
    $hasPets = isset($_POST["hasPets"]) ? 1 : 0;
    $currentPets = isset($_POST["currentPets"]) ? sanitize_input($_POST["currentPets"]) : NULL;
    $hadPets = isset($_POST["hadPets"]) ? 1 : 0;
    $previousPets = isset($_POST["previousPets"]) ? sanitize_input($_POST["previousPets"]) : NULL;
    $fosterDogs = isset($_POST["fosterDogs"]) ? 1 : 0;
    $fosterPuppies = isset($_POST["fosterPuppies"]) ? 1 : 0;
    $fosterCats = isset($_POST["fosterCats"]) ? 1 : 0;
    $fosterKittens = isset($_POST["fosterKittens"]) ? 1 : 0;
    $fosterSmallAnimals = isset($_POST["fosterSmallAnimals"]) ? 1 : 0;
    $willingSpecialNeeds = isset($_POST["specialNeeds"]) ? sanitize_input($_POST["specialNeeds"]) : NULL;
    $willingMedication = isset($_POST["needsMedication"]) ? ($_POST["needsMedication"] === "yes" ? 1 : 0) : NULL;
    $willingTraining = isset($_POST["needsTraining"]) ? ($_POST["needsTraining"] === "yes" ? 1 : 0) : NULL;
    $fosterDuration = sanitize_input($_POST["fosterDuration"]);
    $hoursAlone = sanitize_input($_POST["hoursAlone"]);
    $fosterExperience = sanitize_input($_POST["fosterExperience"]);
    $reference1Name = sanitize_input($_POST["reference1Name"]);
    $reference1Phone = sanitize_input($_POST["reference1Phone"]);
    $reference1Relationship = sanitize_input($_POST["reference1Relationship"]);
    $reference2Name = sanitize_input($_POST["reference2Name"]);
    $reference2Phone = sanitize_input($_POST["reference2Phone"]);
    $reference2Relationship = sanitize_input($_POST["reference2Relationship"]);
    $vetName = isset($_POST["vetName"]) ? sanitize_input($_POST["vetName"]) : NULL;
    $vetPhone = isset($_POST["vetPhone"]) ? sanitize_input($_POST["vetPhone"]) : NULL;
    $agreedTerms = isset($_POST["agreeTerms"]) ? 1 : 0;
    $agreedHomeVisit = isset($_POST["agreeHomeVisit"]) ? 1 : 0;
    $agreedUpdates = isset($_POST["agreeUpdates"]) ? 1 : 0;
    $additionalComments = isset($_POST["additionalComments"]) ? sanitize_input($_POST["additionalComments"]) : NULL;

    // SQL insert with 51 placeholders
    $sql = "INSERT INTO application_data (
        firstName, lastName, email, phone, streetAddress, 
        city, state, zipCode, occupation, employer, 
        emergencyContact,housingType, housingStatus, landlordName, landlordPhone, 
        yardDescription,fenceDetails, hasPool, poolDetails,adultsCount, 
        childrenCount, childrenAges, hasAllergies, allergiesDetails, hasPets, 
        currentPets,hadPets, previousPets,fosterDogs, fosterPuppies, 
        fosterCats, fosterKittens, fosterSmallAnimals, willingSpecialNeeds, willingMedication,
        willingTraining, fosterDuration, hoursAlone, fosterExperience, reference1Name,
        reference1Phone,reference1Relationship, reference2Name, reference2Phone, reference2Relationship,
        vetName, vetPhone,agreedTerms, agreedHomeVisit, agreedUpdates,
        additionalComments
    ) VALUES (
        ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, 
        ?, ?, ?, ?, ?, 
        ?, ?, ?, ?, ?, 
        ?, ?, ?, ?, ?, 
        ?, ?, ?, ?, ?, 
        ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?, 
        ?, ?, ?, ?, ?,
        ?, ?, ?, ?, ?,
        ?
    )";
//sssssssssssssssssisiisisisisiiiisiisssssssssssiiis
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssssssssssssssssisiiisiiisssssiiissssssssssssiiiis",
    $firstName, $lastName, $email, $phone, $streetAddress, $city, $state, $zipCode, $occupation, $employer, $emergencyContact,
    $housingType, $housingStatus, $landlordName, $landlordPhone, $yardDescription, $fenceDetails, $hasPool, $poolDetails,
    $adultsCount, $childrenCount, $childrenAges, $hasAllergies, $allergiesDetails, $hasPets, $currentPets, $hadPets, $previousPets,
    $fosterDogs, $fosterPuppies, $fosterCats, $fosterKittens, $fosterSmallAnimals, $willingSpecialNeeds, $willingMedication,
    $willingTraining, $fosterDuration, $hoursAlone, $fosterExperience, $reference1Name, $reference1Phone,
    $reference1Relationship, $reference2Name, $reference2Phone, $reference2Relationship, $vetName, $vetPhone,
    $agreedTerms, $agreedHomeVisit, $agreedUpdates, $additionalComments
);
        if ($stmt->execute()) {
            echo "<div class='alert alert-success' role='alert'>Foster application data submitted successfully!</div>";
        } else {
            echo "<div class='alert alert-danger' role='alert'>Error submitting data: " . $stmt->error . "</div>";
        }
        $stmt->close();
    } else {
        echo "<div class='alert alert-danger' role='alert'>SQL prepare failed: " . $conn->error . "</div>";
    }
} // Closing brace for the main IF block

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foster Application - PAFS</title>
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
                        <a class="nav-link active" href="foster.html">Foster</a>
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

    <!-- Hero Section -->
    <header class="hero-section text-white text-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/image/parent.jpg');">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Foster Application</h1>
                    <p class="lead mb-4">Thank you for your interest in becoming a foster parent. Your commitment to providing a temporary home for animals in need makes a tremendous difference in their lives.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Application Form Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-md-5">
                            <div class="mb-5">
                                <h2 class="text-center mb-3">Foster Parent Application</h2>
                                <p class="text-center text-muted">Please complete all sections of this application. The more information you provide, the better we can match you with animals that fit your household and lifestyle.</p>
                            </div>

                            <form id="fosterApplicationForm" method="POST" action="foster-application.php" >
                                <!-- Progress Bar -->
                                <div class="progress mb-4" style="height: 10px;">
                                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="formProgress"></div>
                                </div>

                                <!-- Step Navigation -->
                                <div class="d-flex justify-content-between mb-4">
                                    <button type="button" class="btn btn-outline-primary" id="prevBtn" disabled>Previous</button>
                                    <div class="step-indicators">
                                        <span class="step-indicator active" data-step="1"></span>
                                        <span class="step-indicator" data-step="2"></span>
                                        <span class="step-indicator" data-step="3"></span>
                                        <span class="step-indicator" data-step="4"></span>
                                        <span class="step-indicator" data-step="5"></span>
                                    </div>
                                    <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
                                </div>

                                <div class="form-step" id="step1">
                                    <h4 class="mb-4">Personal Information</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="firstName" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstName" name="firstName" required>
                                            <div class="invalid-feedback">
                                                Please enter your first name.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastName" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastName" name="lastName" required>
                                            <div class="invalid-feedback">
                                                Please enter your last name.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email" required>
                                            <div class="invalid-feedback">
                                                Please enter a valid email address.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" class="form-control" id="phone" name="phone" required>
                                            <div class="invalid-feedback">
                                                Please enter your phone number.
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="address" class="form-label">Street Address</label>
                                            <input type="text" class="form-control" id="address" name="address" required>
                                            <div class="invalid-feedback">
                                                Please enter your street address.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="city" class="form-label">City</label>
                                            <input type="text" class="form-control" id="city" name="city" required>
                                            <div class="invalid-feedback">
                                                Please enter your city.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="state" class="form-label">State</label>
                                            <select class="form-select" id="state" name="state" required>
                                                <option value="" selected disabled>Select State</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select your state.
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="zipCode" class="form-label">Zip Code</label>
                                            <input type="text" class="form-control" id="zipCode" name="zipCode" required>
                                            <div class="invalid-feedback">
                                                Please enter your zip code.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="occupation" class="form-label">Occupation</label>
                                            <input type="text" class="form-control" id="occupation" name="occupation" required>
                                            <div class="invalid-feedback">
                                                Please enter your occupation.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="employer" class="form-label">Employer</label>
                                            <input type="text" class="form-control" id="employer" name="employer" required>
                                            <div class="invalid-feedback">
                                                Please enter your employer.
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="emergencyContact" class="form-label">Emergency Contact (Name & Phone)</label>
                                            <input type="text" class="form-control" id="emergencyContact" name="emergencyContact" required>
                                            <div class="invalid-feedback">
                                                Please provide an emergency contact.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-step" id="step2" style="display: none;">
                                    <h4 class="mb-4">Housing Information</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="housingType" class="form-label">Housing Type</label>
                                            <select class="form-select" id="housingType" name="housingType" required>
                                                <option value="" selected disabled>Select Housing Type</option>
                                                <option value="house">House</option>
                                                <option value="apartment">Apartment</option>
                                                <option value="condo">Condo</option>
                                                <option value="townhouse">Townhouse</option>
                                                <option value="mobile">Mobile Home</option>
                                                <option value="other">Other</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select your housing type.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="housingStatus" class="form-label">Do you own or rent?</label>
                                            <select class="form-select" id="housingStatus" name="housingStatus" required>
                                                <option value="" selected disabled>Select Option</option>
                                                <option value="own">Own</option>
                                                <option value="rent">Rent</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select whether you own or rent.
                                            </div>
                                        </div>
                                        <div class="col-12" id="landlordInfoSection" style="display: none;">
                                            <div class="alert alert-info">
                                                <i class="bi bi-info-circle-fill me-2"></i>
                                                If you rent, we will need to verify that pets are allowed in your residence.
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-md-6">
                                                    <label for="landlordName" class="form-label">Landlord/Property Manager Name</label>
                                                    <input type="text" class="form-control" id="landlordName" name="landlordName">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="landlordPhone" class="form-label">Landlord/Property Manager Phone</label>
                                                    <input type="tel" class="form-control" id="landlordPhone" name="landlordPhone">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="yardDescription" class="form-label">Yard Description</label>
                                            <select class="form-select" id="yardDescription" name="yardDescription" required>
                                                <option value="" selected disabled>Select Option</option>
                                                <option value="no-yard">No yard</option>
                                                <option value="unfenced">Yard, but not fenced</option>
                                                <option value="partially-fenced">Partially fenced yard</option>
                                                <option value="fully-fenced">Fully fenced yard</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a yard description.
                                            </div>
                                        </div>
                                        <div class="col-12" id="fenceDetailsSection" style="display: none;">
                                            <label for="fenceDetails" class="form-label">Fence Details (height, material, etc.)</label>
                                            <textarea class="form-control" id="fenceDetails" name="fenceDetails" rows="2"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Do you have a pool?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasPool" id="hasPoolYes" value="yes">
                                                <label class="form-check-label" for="hasPoolYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasPool" id="hasPoolNo" value="no" checked>
                                                <label class="form-check-label" for="hasPoolNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12" id="poolDetailsSection" style="display: none;">
                                            <label for="poolDetails" class="form-label">Pool Details (fenced, covered, etc.)</label>
                                            <textarea class="form-control" id="poolDetails" name="poolDetails" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="form-step" id="step3" style="display: none;">
                                    <h4 class="mb-4">Household Information</h4>
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="adultsCount" class="form-label">Number of Adults in Household</label>
                                            <input type="number" class="form-control" id="adultsCount" name="adultsCount" min="1" required>
                                            <div class="invalid-feedback">
                                                Please enter the number of adults.
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="childrenCount" class="form-label">Number of Children in Household</label>
                                            <input type="number" class="form-control" id="childrenCount" name="childrenCount" min="0" required>
                                            <div class="invalid-feedback">
                                                Please enter the number of children.
                                            </div>
                                        </div>
                                        <div class="col-12" id="childrenAgesSection" style="display: none;">
                                            <label for="childrenAges" class="form-label">Ages of Children</label>
                                            <input type="text" class="form-control" id="childrenAges" name="childrenAges" placeholder="e.g., 5, 8, 12">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Does anyone in your household have allergies to animals?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasAllergies" id="hasAllergiesYes" value="yes">
                                                <label class="form-check-label" for="hasAllergiesYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasAllergies" id="hasAllergiesNo" value="no" checked>
                                                <label class="form-check-label" for="hasAllergiesNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12" id="allergiesDetailsSection" style="display: none;">
                                            <label for="allergiesDetails" class="form-label">Please describe the allergies</label>
                                            <textarea class="form-control" id="allergiesDetails" name="allergiesDetails" rows="2"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Do you currently have any pets?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasPets" id="hasPetsYes" value="yes">
                                                <label class="form-check-label" for="hasPetsYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hasPets" id="hasPetsNo" value="no" checked>
                                                <label class="form-check-label" for="hasPetsNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12" id="currentPetsSection" style="display: none;">
                                            <label for="currentPets" class="form-label">Please list all current pets (species, breed, age, gender, spayed/neutered)</label>
                                            <textarea class="form-control" id="currentPets" name="currentPets" rows="3"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Have you had pets in the past?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hadPets" id="hadPetsYes" value="yes">
                                                <label class="form-check-label" for="hadPetsYes">
                                                    Yes
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="hadPets" id="hadPetsNo" value="no" checked>
                                                <label class="form-check-label" for="hadPetsNo">
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12" id="previousPetsSection" style="display: none;">
                                            <label for="previousPets" class="form-label">Please describe your previous pets and what happened to them</label>
                                            <textarea class="form-control" id="previousPets" name="previousPets" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-step" id="step4" style="display: none;">
            <h4 class="mb-4">Foster Preferences</h4>
            <div class="row g-3">
                <div class="col-12">
                    <label class="form-label">What types of animals are you interested in fostering? (Select all that apply)</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fosterDogs" name="fosterTypes[]" value="dogs">
                        <label class="form-check-label" for="fosterDogs">
                            Dogs
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fosterPuppies" name="fosterTypes[]" value="puppies">
                        <label class="form-check-label" for="fosterPuppies">
                            Puppies
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fosterCats" name="fosterTypes[]" value="cats">
                        <label class="form-check-label" for="fosterCats">
                            Cats
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fosterKittens" name="fosterTypes[]" value="kittens">
                        <label class="form-check-label" for="fosterKittens">
                            Kittens
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="fosterSmallAnimals" name="fosterTypes[]" value="small_animals">
                        <label class="form-check-label" for="fosterSmallAnimals">
                            Small Animals (rabbits, guinea pigs, etc.)
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Are you willing to foster animals with special needs?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="specialNeeds" id="specialNeedsYes" value="yes">
                        <label class="form-check-label" for="specialNeedsYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="specialNeeds" id="specialNeedsNo" value="no">
                        <label class="form-check-label" for="specialNeedsNo">
                            No
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="specialNeeds" id="specialNeedsMaybe" value="maybe">
                        <label class="form-check-label" for="specialNeedsMaybe">
                            Maybe, depending on the needs
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Are you willing to foster animals that need medication?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="needsMedication" id="needsMedicationYes" value="yes">
                        <label class="form-check-label" for="needsMedicationYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="needsMedication" id="needsMedicationNo" value="no">
                        <label class="form-check-label" for="needsMedicationNo">
                            No
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <label class="form-label">Are you willing to foster animals that need socialization or behavioral training?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="needsTraining" id="needsTrainingYes" value="yes">
                        <label class="form-check-label" for="needsTrainingYes">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="needsTraining" id="needsTrainingNo" value="no">
                        <label class="form-check-label" for="needsTrainingNo">
                            No
                        </label>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="fosterDuration" class="form-label">How long are you willing to foster?</label>
                    <select class="form-select" id="fosterDuration" name="fosterDuration" required>
                        <option value="" selected disabled>Select Option</option>
                        <option value="emergency">Emergency only (1-7 days)</option>
                        <option value="short">Short-term (1-4 weeks)</option>
                        <option value="medium">Medium-term (1-3 months)</option>
                        <option value="long">Long-term (3+ months)</option>
                        <option value="any">Any duration</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a duration.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="hoursAlone" class="form-label">How many hours would the foster animal be alone during the day?</label>
                    <select class="form-select" id="hoursAlone" name="hoursAlone" required>
                        <option value="" selected disabled>Select Option</option>
                        <option value="0-2">0-2 hours</option>
                        <option value="3-5">3-5 hours</option>
                        <option value="6-8">6-8 hours</option>
                        <option value="8+">8+ hours</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select an option.
                    </div>
                </div>
                <div class="col-12">
                    <label for="fosterExperience" class="form-label">Please describe any previous experience you have with fostering or caring for animals</label>
                    <textarea class="form-control" id="fosterExperience" name="fosterExperience" rows="3" required></textarea>
                    <div class="invalid-feedback">
                        Please describe your experience.
                    </div>
                </div>
            </div>
        </div>

        <div class="form-step" id="step5" style="display: none;">
            <h4 class="mb-4">References and Agreement</h4>
            <div class="row g-3">
                <div class="col-12">
                    <h5>References</h5>
                    <p class="text-muted small">Please provide two personal references who are not related to you.</p>
                </div>
                <div class="col-md-6">
                    <label for="reference1Name" class="form-label">Reference 1 Name</label>
                    <input type="text" class="form-control" id="reference1Name" name="reference1Name" required>
                    <div class="invalid-feedback">
                        Please provide a reference name.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="reference1Phone" class="form-label">Reference 1 Phone</label>
                    <input type="tel" class="form-control" id="reference1Phone" name="reference1Phone" required>
                    <div class="invalid-feedback">
                        Please provide a reference phone number.
                    </div>
                </div>
                <div class="col-12">
                    <label for="reference1Relationship" class="form-label">Relationship to Reference 1</label>
                    <input type="text" class="form-control" id="reference1Relationship" name="reference1Relationship" required>
                    <div class="invalid-feedback">
                        Please describe your relationship.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="reference2Name" class="form-label">Reference 2 Name</label>
                    <input type="text" class="form-control" id="reference2Name" name="reference2Name" required>
                    <div class="invalid-feedback">
                        Please provide a reference name.
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="reference2Phone" class="form-label">Reference 2 Phone</label>
                    <input type="tel" class="form-control" id="reference2Phone" name="reference2Phone" required>
                    <div class="invalid-feedback">
                        Please provide a reference phone number.
                    </div>
                </div>
                <div class="col-12">
                    <label for="reference2Relationship" class="form-label">Relationship to Reference 2</label>
                    <input type="text" class="form-control" id="reference2Relationship" name="reference2Relationship" required>
                    <div class="invalid-feedback">
                        Please describe your relationship.
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <h5>Veterinary Reference (if applicable)</h5>
                    <p class="text-muted small">If you have current or previous pets, please provide your veterinarian's information.</p>
                </div>
                <div class="col-md-6">
                    <label for="vetName" class="form-label">Veterinarian/Clinic Name</label>
                    <input type="text" class="form-control" id="vetName" name="vetName">
                </div>
                <div class="col-md-6">
                    <label for="vetPhone" class="form-label">Veterinarian Phone</label>
                    <input type="tel" class="form-control" id="vetPhone" name="vetPhone">
                </div>
                <div class="col-12 mt-4">
                    <h5>Foster Agreement</h5>
                    <div class="alert alert-info">
                        <i class="bi bi-info-circle-fill me-2"></i>
                        Please read the following agreement carefully before submitting your application.
                    </div>
                    <div class="foster-agreement p-3 border rounded mb-3" style="max-height: 200px; overflow-y: auto;">
                        <p>By submitting this application, I agree to the following terms and conditions:</p>
                        <ol>
                            <li>I understand that I will be a temporary caregiver for the animal(s) I foster, and that the animal(s) remain the property of PAFS.</li>
                            <li>I agree to provide a safe, clean, and caring environment for the foster animal(s).</li>
                            <li>I will follow all care instructions provided by PAFS for the foster animal(s).</li>
                            <li>I will not give away, sell, or abandon the foster animal(s) under any circumstances.</li>
                            <li>I will return the foster animal(s) to PAFS upon request or at the end of the agreed foster period.</li>
                            <li>I will notify PAFS immediately if the foster animal(s) become ill, injured, lost, or stolen.</li>
                            <li>I understand that PAFS will provide necessary veterinary care for the foster animal(s), but I must obtain approval before seeking veterinary care except in emergency situations.</li>
                            <li>I understand that PAFS cannot guarantee the health, temperament, or behavior of the foster animal(s).</li>
                            <li>I agree to allow PAFS representatives to visit my home to check on the foster animal(s) with reasonable notice.</li>
                            <li>I understand that I may be required to bring the foster animal(s) to adoption events or to make them available for potential adopters to meet.</li>
                            <li>I understand that PAFS has the right to terminate this foster arrangement at any time.</li>
                            <li>I release PAFS from any and all liability for personal injury, property damage, legal fees, or veterinary care, or any other expense or liability incurred by me during my foster volunteer service.</li>
                        </ol>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" value="agree" required>
                        <label class="form-check-label" for="agreeTerms">
                            I have read and agree to the Foster Agreement
                        </label>
                        <div class="invalid-feedback">
                            You must agree to the terms to submit your application.
                        </div>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="agreeHomeVisit" name="agreeHomeVisit" value="agree">
                        <label class="form-check-label" for="agreeHomeVisit">
                            I agree to a home visit by a PAFS representative if requested
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="agreeUpdates" name="agreeUpdates" value="agree">
                        <label class="form-check-label" for="agreeUpdates">
                            I agree to provide regular updates and photos of my foster animal(s)
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <label for="additionalComments" class="form-label">Additional Comments or Questions</label>
                    <textarea class="form-control" id="additionalComments" name="additionalComments" rows="3"></textarea>
                </div>
            </div>
        </div>

        <div class="mt-4 text-center" id="submitButtonContainer" style="display: none;">
            <button type="submit" id="btnsubmit" name="btnsubmit" class="btn btn-primary btn-lg px-5">Submit Application</button>
            
        </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- What to Expect Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-center mb-5">What to Expect After Applying</h2>
                    <div class="row g-4">
                        <div class="col-md-3">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body p-4">
                                    <div class="icon-circle bg-primary text-white mb-3">
                                        <i class="bi bi-envelope-check-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Application Review</h5>
                                    <p class="card-text">We'll review your application within 2-3 business days.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body p-4">
                                    <div class="icon-circle bg-primary text-white mb-3">
                                        <i class="bi bi-telephone-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Phone Interview</h5>
                                    <p class="card-text">We'll contact you to discuss your application and answer questions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body p-4">
                                    <div class="icon-circle bg-primary text-white mb-3">
                                        <i class="bi bi-house-check-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Home Check</h5>
                                    <p class="card-text">For some foster situations, we may schedule a brief home visit.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card h-100 border-0 shadow-sm text-center">
                                <div class="card-body p-4">
                                    <div class="icon-circle bg-primary text-white mb-3">
                                        <i class="bi bi-heart-fill fs-2"></i>
                                    </div>
                                    <h5 class="card-title">Placement</h5>
                                    <p class="card-text">We'll match you with an animal that fits your home and preferences.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <h2 class="text-center mb-5">Frequently Asked Questions</h2>
                    <div class="accordion" id="fosterFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What expenses am I responsible for as a foster parent?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    <p>PAFS provides all necessary supplies for foster animals, including food, bedding, toys, and medical care. Foster parents are not expected to incur any expenses, though some choose to purchase additional items for their foster animals. If you do purchase supplies for your foster animal, keep your receipts as these expenses may be tax-deductible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long will I be fostering an animal?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    <p>The length of time varies depending on the animal's needs and circumstances. Some animals need just a few weeks of care, while others may need several months. We'll discuss the expected timeframe with you before placement and will work with your schedule and availability.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What if I want to adopt my foster animal?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    <p>Foster parents often develop strong bonds with their foster animals, and many do end up adopting them. This is what we call a "foster fail" (though it's actually a success!). If you're interested in adopting your foster animal, let your foster coordinator know as soon as possible. Foster parents are typically given first choice to adopt, but the standard adoption process and fees still apply.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What if my foster animal gets sick?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    <p>If your foster animal shows signs of illness, contact your foster coordinator immediately. PAFS covers all medical expenses for foster animals, but you must use our approved veterinarians. In case of an emergency outside of business hours, we have an emergency contact number that will be provided to you when you become a foster parent.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Can I foster if I work full-time?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    <p>Yes! Many of our foster parents work full-time. We'll match you with an animal that fits your schedule and lifestyle. Adult animals can typically be left alone during work hours, while puppies and kittens may need more frequent attention. We can work with you to find the right match for your situation.</p>
                                </div>
                            </div>
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
                    <h5>Contact Us</h5>
                    <address>
                        <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i> 123 Pet Street, Anytown, USA 12345</p>
                        <p class="mb-1"><i class="bi bi-telephone-fill me-2"></i> (555) 123-4567</p>
                        <p class="mb-1"><i class="bi bi-envelope-fill me-2"></i> info@pafs.org</p>
                    </address>
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

    <!-- Custom CSS for step indicators -->
    <style>
        .step-indicators {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .step-indicator {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #dee2e6;
            margin: 0 5px;
            cursor: pointer;
        }
        
        .step-indicator.active {
            background-color: #0d6efd;
        }
        
        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Form steps navigation
            const formSteps = document.querySelectorAll('.form-step');
            const nextBtn = document.getElementById('nextBtn');
            const prevBtn = document.getElementById('prevBtn');
            const stepIndicators = document.querySelectorAll('.step-indicator');
            const formProgress = document.getElementById('formProgress');
            const submitButtonContainer = document.getElementById('submitButtonContainer');
            
            let currentStep = 0;
            
            // Show the current step
            function showStep(stepIndex) {
                formSteps.forEach((step, index) => {
                    step.style.display = index === stepIndex ? 'block' : 'none';
                });
                
                // Update step indicators
                stepIndicators.forEach((indicator, index) => {
                    indicator.classList.toggle('active', index === stepIndex);
                });
                
                // Update progress bar
                const progressPercentage = (stepIndex / (formSteps.length - 1)) * 100;
                formProgress.style.width = `${progressPercentage}%`;
                formProgress.setAttribute('aria-valuenow', progressPercentage);
                
                // Update buttons
                prevBtn.disabled = stepIndex === 0;
                
                if (stepIndex === formSteps.length - 1) {
                    nextBtn.style.display = 'none';
                    submitButtonContainer.style.display = 'block';
                } else {
                    nextBtn.style.display = 'block';
                    submitButtonContainer.style.display = 'none';
                }
            }
            
            // Next button click
            nextBtn.addEventListener('click', function() {
                // Validate current step
                const currentStepInputs = formSteps[currentStep].querySelectorAll('input[required], select[required], textarea[required]');
                let isValid = true;
                
                currentStepInputs.forEach(input => {
                    if (!input.checkValidity()) {
                        input.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        input.classList.remove('is-invalid');
                    }
                });
                
                if (isValid && currentStep < formSteps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                    window.scrollTo(0, 0);
                }
            });
            
            // Previous button click
            prevBtn.addEventListener('click', function() {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                    window.scrollTo(0, 0);
                }
            });
            
            // Step indicator click
            stepIndicators.forEach((indicator, index) => {
                indicator.addEventListener('click', function() {
                    // Only allow going back to previous steps
                    if (index < currentStep) {
                        currentStep = index;
                        showStep(currentStep);
                        window.scrollTo(0, 0);
                    }
                });
            });
        

            // Form submission
            document.getElementById('fosterApplicationForm').addEventListener('submit', function(e) {
                // Let the form submit normally to PHP (no preventDefault)
                // Optional: scroll to top after clicking submit
            window.scrollTo(0, 0);
            });

            
            // Housing status change
            const housingStatus = document.getElementById('housingStatus');
            const landlordInfoSection = document.getElementById('landlordInfoSection');
            
            housingStatus.addEventListener('change', function() {
                landlordInfoSection.style.display = this.value === 'rent' ? 'block' : 'none';
            });
            
            // Yard description change
            const yardDescription = document.getElementById('yardDescription');
            const fenceDetailsSection = document.getElementById('fenceDetailsSection');
            
            yardDescription.addEventListener('change', function() {
                fenceDetailsSection.style.display = 
                    (this.value === 'partially-fenced' || this.value === 'fully-fenced') ? 'block' : 'none';
            });
            
            // Pool radio buttons
            const hasPoolRadios = document.querySelectorAll('input[name="hasPool"]');
            const poolDetailsSection = document.getElementById('poolDetailsSection');
            
            hasPoolRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    poolDetailsSection.style.display = this.value === 'yes' ? 'block' : 'none';
                });
            });
            
            // Children count change
            const childrenCount = document.getElementById('childrenCount');
            const childrenAgesSection = document.getElementById('childrenAgesSection');
            
            childrenCount.addEventListener('input', function() {
                childrenAgesSection.style.display = parseInt(this.value) > 0 ? 'block' : 'none';
            });
            
            // Allergies radio buttons
            const hasAllergiesRadios = document.querySelectorAll('input[name="hasAllergies"]');
            const allergiesDetailsSection = document.getElementById('allergiesDetailsSection');
            
            hasAllergiesRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    allergiesDetailsSection.style.display = this.value === 'yes' ? 'block' : 'none';
                });
            });
            
            // Current pets radio buttons
            const hasPetsRadios = document.querySelectorAll('input[name="hasPets"]');
            const currentPetsSection = document.getElementById('currentPetsSection');
            
            hasPetsRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    currentPetsSection.style.display = this.value === 'yes' ? 'block' : 'none';
                });
            });
            
            // Previous pets radio buttons
            const hadPetsRadios = document.querySelectorAll('input[name="hadPets"]');
            const previousPetsSection = document.getElementById('previousPetsSection');
            
            hadPetsRadios.forEach(radio => {
                radio.addEventListener('change', function() {
                    previousPetsSection.style.display = this.value === 'yes' ? 'block' : 'none';
                });
            });
            
            // Initialize the form
            showStep(currentStep);
        });
    </script>
</body>
</html>