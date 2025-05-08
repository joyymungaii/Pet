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

// Get the pet ID from the URL parameter
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $pet_id = $_GET['id'];

    // Prepare and execute the SQL query to fetch pet details
    $sql = "SELECT * FROM pets WHERE pet_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $pet_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $pet = $result->fetch_assoc();
    } else {
        // Pet not found, you might want to display an error message
        $pet = null;
    }

    $stmt->close();
} else {
    // Invalid or missing pet ID, handle accordingly
    $pet = null;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php if ($pet): ?>
            <?php echo htmlspecialchars($pet['name']); ?> - PAFS
        <?php else: ?>
            Pet Details Not Found - PAFS
        <?php endif; ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
        include('navbar.php');
    ?>

    <section class="py-5">
        <div class="container">
            <?php if ($pet): ?>
                <nav aria-label="breadcrumb" class="mb-4">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="pets.php">Find a Pet</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($pet['name']); ?></li>
                    </ol>
                </nav>

                <div class="row">
                    <div class="col-lg-6 mb-4">
                        <div class="card border-0 shadow-sm">
                            <div class="card-body p-0">
                                <img src="<?php echo htmlspecialchars($pet['image_url']); ?>" alt="<?php echo htmlspecialchars($pet['name']); ?>" class="img-fluid rounded pet-main-image" id="main-pet-image">
                                <div class="row g-2 mt-2 pet-gallery">
                                    <div class="col-3">
                                        <img src="<?php echo htmlspecialchars($pet['image_url']); ?>" alt="<?php echo htmlspecialchars($pet['name']); ?>" class="img-fluid rounded" onclick="changeMainImage(this.src)">
                                    </div>
                                    <div class="col-3">
                                        <img src="<?php echo htmlspecialchars($pet['image_url']); ?>" alt="<?php echo htmlspecialchars($pet['name']); ?> playing" class="img-fluid rounded" onclick="changeMainImage(this.src)">
                                    </div>
                                    <div class="col-3">
                                        <img src="<?php echo htmlspecialchars($pet['image_url']); ?>" alt="<?php echo htmlspecialchars($pet['name']); ?> resting" class="img-fluid rounded" onclick="changeMainImage(this.src)">
                                    </div>
                                    <div class="col-3">
                                        <img src="<?php echo htmlspecialchars($pet['image_url']); ?>" alt="<?php echo htmlspecialchars($pet['name']); ?> close-up" class="img-fluid rounded" onclick="changeMainImage(this.src)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h1 class="mb-0"><?php echo htmlspecialchars($pet['name']); ?></h1>
                            <span class="badge bg-<?php echo ($pet['status'] === 'adoptable' ? 'success' : 'info'); ?> fs-6"><?php echo ucfirst(htmlspecialchars($pet['status'])); ?></span>
                        </div>
                        <p class="text-muted fs-5"><?php echo htmlspecialchars($pet['breed']); ?> • <?php echo htmlspecialchars($pet['age']); ?> • <?php echo ucfirst(htmlspecialchars($pet['gender'])); ?></p>

                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <p class="mb-1"><i class="bi bi-geo-alt text-primary me-2"></i> <?php echo htmlspecialchars($pet['shelter_name']); ?></p>
                                <p class="mb-1"><i class="bi bi-pin-map text-primary me-2"></i> <?php echo htmlspecialchars($pet['distance']); ?> away</p>
                            </div>
                            </div>

                        <div class="d-grid gap-2 mb-4">
                        <a href="adoption-application.php?pet_id=<?php echo htmlspecialchars($pet['pet_id']); ?>" class="btn btn-primary">Start Adoption Process</a>
                         <a href="foster-application.php?id=<?php echo $pet['pet_id']; ?>" class="btn btn-outline-primary btn-lg">Apply to Foster</a>

                        </div>

                        <div class="d-flex mb-4">
                            <button class="btn btn-outline-secondary me-2">
                                <i class="bi bi-heart"></i> Save
                            </button>
                            <button class="btn btn-outline-secondary me-2">
                                <i class="bi bi-share"></i> Share
                            </button>
                            <button class="btn btn-outline-secondary">
                                <i class="bi bi-printer"></i> Print
                            </button>
                        </div>

                        <div class="alert alert-info d-flex align-items-center" role="alert">
                            <i class="bi bi-info-circle-fill me-2 fs-5"></i>
                            <div>
                                Interested in <?php echo htmlspecialchars($pet['name']); ?>? Contact <?php echo htmlspecialchars($pet['shelter_name']); ?>.
                                </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="petDetailsTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="details-tab" data-bs-toggle="tab" data-bs-target="#details" type="button" role="tab" aria-controls="details" aria-selected="true">Details</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="health-tab" data-bs-toggle="tab" data-bs-target="#health" type="button" role="tab" aria-controls="health" aria-selected="false">Health</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="adoption-tab" data-bs-toggle="tab" data-bs-target="#adoption" type="button" role="tab" aria-controls="adoption" aria-selected="false">Adoption Info</button>
                                    </li>
                                </ul>
                                <div class="tab-content p-3" id="petDetailsTabsContent">

                                    <div class="tab-pane fade show active" id="details" role="tabpanel" aria-labelledby="details-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h5>Basic Information</h5>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">Breed</th>
                                                            <td><?php echo htmlspecialchars($pet['breed']); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Age</th>
                                                            <td><?php echo htmlspecialchars($pet['age']); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Gender</th>
                                                            <td><?php echo ucfirst(htmlspecialchars($pet['gender'])); ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">Size</th>
                                                            <td><?php echo htmlspecialchars($pet['size']); ?></td>
                                                        </tr>
                                                        </tbody>
                                                </table>
                                            </div>
                                            <div class="col-md-6">
                                                <h5>Description</h5>
                                                <p><?php echo htmlspecialchars($pet['description']); ?></p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="health" role="tabpanel" aria-labelledby="health-tab">
                                        <h5>Health Information</h5>
                                        <p class="text-muted">Health information for <?php echo htmlspecialchars($pet['name']); ?> will be displayed here.</p>
                                    </div>
                                    <div class="tab-pane fade" id="adoption" role="tabpanel" aria-labelledby="adoption-tab">
                                        <h5>Adoption Information</h5>
                                        <p class="text-muted">Adoption information and requirements for <?php echo htmlspecialchars($pet['name']); ?> will be displayed here.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php else: ?>
                <div class="alert alert-danger" role="alert">
                    Pet details not found.
                </div>
            <?php endif; ?>
        </div>
    </section>

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
                        <li><a href="pets.php" class="text-white">Find a Pet</a></li>
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
    <script>
        function changeMainImage(src) {
            document.getElementById('main-pet-image').src = src;
        }
    </script>
    <script src="main.js"></script>
</body>
</html>