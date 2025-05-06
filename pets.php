<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Replace with your XAMPP database username
$password = "";     // Replace with your XAMPP database password
$dbname = "pet_adoption"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to sanitize user input
function sanitize_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Initialize an empty array to store search results
$searchResults = [];

// Check if the search button is clicked
if (isset($_GET['searchbtn'])) {
    // Retrieve and sanitize search parameters
    $petType = sanitize_input($_GET['pet-type']);
    $breed = sanitize_input($_GET['breed']);
    $age = sanitize_input($_GET['age']);
    $size = sanitize_input($_GET['size']);
    $gender = sanitize_input($_GET['gender']);
    $location = sanitize_input($_GET['location']);
    $status = sanitize_input($_GET['status']);

    // Build the SQL query dynamically based on the search parameters
    $sql = "SELECT * FROM pets WHERE 1=1"; // Start with a basic true condition

    if (!empty($petType)) {
        $sql .= " AND pet_type = '$petType'";
    }
    if (!empty($breed)) {
        $sql .= " AND breed LIKE '%$breed%'";
    }
    if (!empty($age)) {
        $sql .= " AND age = '$age'";
    }
    if (!empty($size)) {
        $sql .= " AND size = '$size'";
    }
    if (!empty($gender)) {
        $sql .= " AND gender = '$gender'";
    }
    if (!empty($location)) {
        $sql .= " AND location LIKE '%$location%'";
    }

    if ($status === 'adoptable') {
        $sql .= " AND status = 'adoptable'";
    } elseif ($status === 'foster') {
        $sql .= " AND status = 'foster'";
    } elseif ($status === 'both') {
        $sql .= " AND (status = 'adoptable' OR status = 'foster')";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Fetch all matching pets
        while ($row = $result->fetch_assoc()) {
            $searchResults[] = $row;
        }
    } else {
        $noResultsMessage = "No pets found matching your search criteria.";
    }

    $result->free();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a Pet - PAFS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
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
                        <a class="nav-link active" href="pets.php">Find a Pet</a>
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

    <header class="bg-primary text-white py-4">
        <div class="container">
            <h1>Find Your Perfect Pet</h1>
            <p class="lead mb-0">Browse available pets for adoption and fostering</p>
        </div>
    </header>

    <section class="py-4 bg-light">
        <div class="container">
            <div class="card shadow-sm">
                <div class="card-body">
                    <form id="pet-search-form" action="pets.php" method="GET">
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="pet-type" class="form-label">Pet Type</label>
                                <select name="pet-type" class="form-select">
                                    <option value="">Any</option>
                                    <option value="dog" <?php if(isset($_GET['pet-type']) && $_GET['pet-type'] === 'dog') echo 'selected'; ?>>Dogs</option>
                                    <option value="cat" <?php if(isset($_GET['pet-type']) && $_GET['pet-type'] === 'cat') echo 'selected'; ?>>Cats</option>
                                    <option value="small-animal" <?php if(isset($_GET['pet-type']) && $_GET['pet-type'] === 'small-animal') echo 'selected'; ?>>Small Animals</option>
                                    <option value="bird" <?php if(isset($_GET['pet-type']) && $_GET['pet-type'] === 'bird') echo 'selected'; ?>>Birds</option>
                                    <option value="reptile" <?php if(isset($_GET['pet-type']) && $_GET['pet-type'] === 'reptile') echo 'selected'; ?>>Reptiles</option>
                                    <option value="other" <?php if(isset($_GET['pet-type']) && $_GET['pet-type'] === 'other') echo 'selected'; ?>>Other</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="breed" class="form-label">Breed</label>
                                <input type="text" class="form-control" name="breed" placeholder="Any breed" value="<?php echo isset($_GET['breed']) ? $_GET['breed'] : ''; ?>">
                            </div>
                            <div class="col-md-3">
                                <label for="age" class="form-label">Age</label>
                                <select name="age" class="form-select">
                                    <option value="">Any</option>
                                    <option value="baby" <?php if(isset($_GET['age']) && $_GET['age'] === 'baby') echo 'selected'; ?>>Baby</option>
                                    <option value="young" <?php if(isset($_GET['age']) && $_GET['age'] === 'young') echo 'selected'; ?>>Young</option>
                                    <option value="adult" <?php if(isset($_GET['age']) && $_GET['age'] === 'adult') echo 'selected'; ?>>Adult</option>
                                    <option value="senior" <?php if(isset($_GET['age']) && $_GET['age'] === 'senior') echo 'selected'; ?>>Senior</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="size" class="form-label">Size</label>
                                <select name="size" class="form-select">
                                    <option value="">Any</option>
                                    <option value="small" <?php if(isset($_GET['size']) && $_GET['size'] === 'small') echo 'selected'; ?>>Small</option>
                                    <option value="medium" <?php if(isset($_GET['size']) && $_GET['size'] === 'medium') echo 'selected'; ?>>Medium</option>
                                    <option value="large" <?php if(isset($_GET['size']) && $_GET['size'] === 'large') echo 'selected'; ?>>Large</option>
                                    <option value="xlarge" <?php if(isset($_GET['size']) && $_GET['size'] === 'xlarge') echo 'selected'; ?>>X-Large</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select name="gender" class="form-select">
                                    <option value="">Any</option>
                                    <option value="male" <?php if(isset($_GET['gender']) && $_GET['gender'] === 'male') echo 'selected'; ?>>Male</option>
                                    <option value="female" <?php if(isset($_GET['gender']) && $_GET['gender'] === 'female') echo 'selected'; ?>>Female</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" name="location" placeholder="City or ZIP" value="<?php echo isset($_GET['location']) ? $_GET['location'] : ''; ?>">
                            </div>

                            <div class="col-md-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="adoptable" <?php if(isset($_GET['status']) && $_GET['status'] === 'adoptable') echo 'selected'; ?>>Adoptable</option>
                                    <option value="foster" <?php if(isset($_GET['status']) && $_GET['status'] === 'foster') echo 'selected'; ?>>Foster Only</option>
                                    <option value="both" <?php if(!isset($_GET['status']) || $_GET['status'] === 'both') echo 'selected'; ?>>Both</option>
                                </select>
                            </div>
                        </div>


                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <button type="submit" name="searchbtn" class="btn btn-primary px-4">Search</button>
                                <button type="reset" class="btn btn-outline-secondary ms-2" onclick="window.location.href='pets.php'">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2>Available Pets
                    <?php if (isset($searchResults) && count($searchResults) > 0): ?>
                        <span class="badge bg-primary"><?php echo count($searchResults); ?></span>
                    <?php elseif (isset($noResultsMessage)): ?>
                        <span class="badge bg-warning text-dark">0</span>
                    <?php endif; ?>
                </h2>
                <div class="d-flex align-items-center">
                    <label for="sort-by" class="me-2">Sort by:</label>
                    <select id="sort-by" class="form-select form-select-sm" style="width: auto;">
                        <option value="recent">Most Recent</option>
                        <option value="oldest">Oldest First</option>
                        <option value="name-asc">Name (A-Z)</option>
                        <option value="name-desc">Name (Z-A)</option>
                    </select>
                </div>
            </div>
            <div class="row" id="pet-listings">
                <?php if (isset($searchResults) && count($searchResults) > 0): ?>
                    <?php foreach ($searchResults as $pet): ?>
                        <div class="col-md-6 col-lg-4 mb-4">
                            <div class="card h-100 pet-card">
                                <div class="position-relative">
                                    <img src="<?php echo $pet['image_url']; ?>" class="card-img-top" alt="<?php echo $pet['name']; ?>">
                                    <span class="badge bg-<?php echo ($pet['status'] === 'adoptable' ? 'success' : 'info'); ?> position-absolute top-0 end-0 m-2"><?php echo ucfirst($pet['status']); ?></span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $pet['name']; ?></h5>
                                    <p class="card-text text-muted"><?php echo ucfirst($pet['breed']); ?> • <?php echo $pet['age']; ?> • <?php echo ucfirst($pet['gender']); ?></p>
                                    <p class="card-text"><?php echo substr($pet['description'], 0, 100); ?>...</p>
                                    <p class="mb-0"><small class="text-muted"><?php echo $pet['shelter_name']; ?> • <?php echo $pet['distance']; ?> away</small></p>
                                </div>
                                <div class="card-footer bg-white border-top-0">
                                    <a href="pet-details.php?id=<?php echo $pet['pet_id']; ?>" class="btn btn-primary w-100">View Details</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php elseif (isset($noResultsMessage)): ?>
                    <div class="col-12">
                        <p class="alert alert-warning"><?php echo $noResultsMessage; ?></p>
                    </div>
                <?php else: ?>
                    <div class="col-12">
                        <p class="text-muted">Browse or search for available pets.</p>
                    </div>
                <?php endif; ?>
            </div>

            <nav aria-label="Pet listings pagination" class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>