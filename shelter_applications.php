<?php
// Database connection details
$servername = "localhost";  // Replace with your database server name
$username = "root";      // Replace with your database username
$password = "";      // Replace with your database password
$dbname = "pet_adoption";          // Replace with your database name


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $shelterName = mysqli_real_escape_string($conn, $_POST["shelterName"]);
    $shelterType = mysqli_real_escape_string($conn, $_POST["shelterType"]);
    $yearEstablished = mysqli_real_escape_string($conn, $_POST["yearEstablished"]);
    $taxId = mysqli_real_escape_string($conn, $_POST["taxId"]);
    $websiteUrl = mysqli_real_escape_string($conn, $_POST["websiteUrl"]);
    $facebookUrl = mysqli_real_escape_string($conn, $_POST["facebookUrl"]);
    $instagramHandle = mysqli_real_escape_string($conn, $_POST["instagramHandle"]);
    $contactFirstName = mysqli_real_escape_string($conn, $_POST["contactFirstName"]);
    $contactLastName = mysqli_real_escape_string($conn, $_POST["contactLastName"]);
    $contactTitle = mysqli_real_escape_string($conn, $_POST["contactTitle"]);
    $contactPhone = mysqli_real_escape_string($conn, $_POST["contactPhone"]);
    $contactEmail = mysqli_real_escape_string($conn, $_POST["contactEmail"]);
    $physicalAddress = mysqli_real_escape_string($conn, $_POST["physicalAddress"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $state = mysqli_real_escape_string($conn, $_POST["state"]);
    $zipCode = mysqli_real_escape_string($conn, $_POST["zipCode"]);
    $facilityType = mysqli_real_escape_string($conn, $_POST["facilityType"]);
    $animalCapacity = mysqli_real_escape_string($conn, $_POST["animalCapacity"]);
    $vetPartners = mysqli_real_escape_string($conn, $_POST["vetPartners"]);
    $staffCount = mysqli_real_escape_string($conn, $_POST["staffCount"]);
    $agreeTerms = isset($_POST["agreeTerms"]) ? 1 : 0; // Convert checkbox to 0 or 1
    $agreeUpdates = isset($_POST["agreeUpdates"]) ? 1: 0;

    // Handle the array of accepted animals
    if (isset($_POST['acceptedAnimals']) && is_array($_POST['acceptedAnimals'])) {
        $acceptedAnimals = implode(", ", array_map(function($animal) use ($conn) {
            return mysqli_real_escape_string($conn, $animal);
        }, $_POST['acceptedAnimals']));
    } else {
        $acceptedAnimals = ""; // Or some default value like "None"
    }


    // Prepare and execute the SQL query
    $sql = "INSERT INTO shelter_applications (
        shelterName, shelterType, yearEstablished, taxId, websiteUrl, facebookUrl, instagramHandle,
        contactFirstName, contactLastName, contactTitle, contactPhone, contactEmail, physicalAddress,
        city, state, zipCode, facilityType, animalCapacity, acceptedAnimals, vetPartners, staffCount, agreeTerms, agreeUpdates
    ) VALUES (
        '$shelterName', '$shelterType', '$yearEstablished', '$taxId', '$websiteUrl', '$facebookUrl', '$instagramHandle',
        '$contactFirstName', '$contactLastName', '$contactTitle', '$contactPhone', '$contactEmail', '$physicalAddress',
        '$city', '$state', '$zipCode', '$facilityType', '$animalCapacity', '$acceptedAnimals', '$vetPartners', '$staffCount', '$agreeTerms', '$agreeUpdates'
    )";

    if ($conn->query($sql) === TRUE) {
        $response = "Application submitted successfully!";
        // Use urlencode to safely pass the message in the URL
        header("Location: pets.php?message=" . urlencode($response));
        exit();
    } else {
        $response = "Error: " . $sql . "<br>" . $conn->error;
        header("Location: shelter-signup.php?message=" . urlencode($response));
        exit();
    }

    $conn->close();
}
?>
