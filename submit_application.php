<?php

// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your XAMPP database username
$password = "";      // Replace with your XAMPP database password
$dbname = "pet_adoption"; // Replace with your database name

// Establish database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and retrieve the form data
    $pet_id = filter_input(INPUT_POST, 'pet_id', FILTER_SANITIZE_NUMBER_INT);
    $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
    $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
    $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
    $zip = filter_input(INPUT_POST, 'zip', FILTER_SANITIZE_STRING);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
    $occupation = filter_input(INPUT_POST, 'occupation', FILTER_SANITIZE_STRING);
    $housing_type = filter_input(INPUT_POST, 'housing-type', FILTER_SANITIZE_STRING);
    $ownership = filter_input(INPUT_POST, 'ownership', FILTER_SANITIZE_STRING);
    $landlord_name = filter_input(INPUT_POST, 'landlord-name', FILTER_SANITIZE_STRING);
    $landlord_phone = filter_input(INPUT_POST, 'landlord-phone', FILTER_SANITIZE_STRING);
    $pet_permission_temp = isset($_POST['pet-permission']) ? 1 : 0; // Use a temporary variable
    $yard = filter_input(INPUT_POST, 'yard', FILTER_SANITIZE_STRING);
    $fence_height = filter_input(INPUT_POST, 'fence-height', FILTER_SANITIZE_STRING);
    $adults = filter_input(INPUT_POST, 'adults', FILTER_SANITIZE_NUMBER_INT);
    $children = filter_input(INPUT_POST, 'children', FILTER_SANITIZE_NUMBER_INT);
    $seniors = filter_input(INPUT_POST, 'seniors', FILTER_SANITIZE_NUMBER_INT);
    $children_ages = filter_input(INPUT_POST, 'children-ages-input', FILTER_SANITIZE_STRING);
    $allergies = filter_input(INPUT_POST, 'allergies', FILTER_SANITIZE_STRING);
    $allergies_description = filter_input(INPUT_POST, 'allergies-description', FILTER_SANITIZE_STRING);
    $current_pets = filter_input(INPUT_POST, 'current-pets', FILTER_SANITIZE_STRING);
    $past_pets = filter_input(INPUT_POST, 'past-pets', FILTER_SANITIZE_STRING);
    $past_pets_description = filter_input(INPUT_POST, 'past-pets-description', FILTER_SANITIZE_STRING);
    $vet_name = filter_input(INPUT_POST, 'vet-name', FILTER_SANITIZE_STRING);
    $vet_phone = filter_input(INPUT_POST, 'vet-phone', FILTER_SANITIZE_STRING);
    $pet_care = filter_input(INPUT_POST, 'pet-care', FILTER_SANITIZE_STRING);
    $pet_sleep = filter_input(INPUT_POST, 'pet-sleep', FILTER_SANITIZE_STRING);
    $pet_exercise = filter_input(INPUT_POST, 'pet-exercise', FILTER_SANITIZE_STRING);
    $pet_training = filter_input(INPUT_POST, 'pet-training', FILTER_SANITIZE_STRING);
    $additional_info = filter_input(INPUT_POST, 'additional-info', FILTER_SANITIZE_STRING);
    $questions = filter_input(INPUT_POST, 'questions', FILTER_SANITIZE_STRING);
    $terms_agree_temp = isset($_POST['terms-agree']) ? 1 : 0; // Use a temporary variable
    $home_visit_temp = isset($_POST['home-visit']) ? 1 : 0; // Use a temporary variable
    $accurate_info_temp = isset($_POST['accurate-info']) ? 1 : 0; // Use a temporary variable
    $application_date = date('Y-m-d H:i:s'); // Current timestamp for the application

    // Prepare the SQL query
    $sql = "INSERT INTO pet_adoption_applications (
                pet_id, first_name, last_name, email, phone, address, city, state, zip, age_range,
                occupation, housing_type, ownership, landlord_name, landlord_phone, pet_permission,
                yard, fence_height, adults_in_home, children_in_home, seniors_in_home, children_ages,
                allergies, allergies_description, current_pets, past_pets, past_pets_description,
                vet_name, vet_phone, hours_left_alone, sleep_location, exercise_plans, training_plans,
                additional_info, applicant_questions, terms_agreement, home_visit_agreement,
                accurate_info_agreement, application_date
            ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
            ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param(
            "isssssssssssssssiisiiisssssssssssssssis",
            $pet_id, $first_name, $last_name, $email, $phone, $address, $city, $state, $zip, $age,
            $occupation, $housing_type, $ownership, $landlord_name, $landlord_phone, $pet_permission_temp,
            $yard, $fence_height, $adults, $children, $seniors, $children_ages,
            $allergies, $allergies_description, $current_pets, $past_pets, $past_pets_description,
            $vet_name, $vet_phone, $pet_care, $pet_sleep, $pet_exercise, $pet_training,
            $additional_info, $questions, $terms_agree_temp,
            $home_visit_temp,
            $accurate_info_temp,
            $application_date
        );
    
        if ($stmt->execute()) {
            header('Location: pets.php');
            exit();
        } else {
            echo "Error submitting application: " . $stmt->error;
        }
    
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
    
    $conn->close();
} else {
    header('Location: foster.html');
    exit();
}
?>