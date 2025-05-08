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
            header('Location: pets.php');
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