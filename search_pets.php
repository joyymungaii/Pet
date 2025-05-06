<?php
// Database connection (adjust credentials as needed)
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'pet_adoption';

$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get search inputs
$petType = $_POST['petType'] ?? '';
$breed = $_POST['breed'] ?? '';
$age = $_POST['age'] ?? '';
$gender = $_POST['gender'] ?? '';
$location = $_POST['location'] ?? '';
$status = $_POST['status'] ?? '';

// Build the query
$query = "SELECT * FROM pets WHERE 1=1";

if (!empty($petType)) $query .= " AND type = '$petType'";
if (!empty($breed)) $query .= " AND breed LIKE '%$breed%'";
if (!empty($age)) $query .= " AND age = '$age'";
if (!empty($gender)) $query .= " AND gender = '$gender'";
if (!empty($location)) $query .= " AND location LIKE '%$location%'";
if ($status == 'adoptable') $query .= " AND status = 'adoptable'";
elseif ($status == 'foster') $query .= " AND status = 'foster'";
elseif ($status == 'both') $query .= " AND status IN ('adoptable', 'foster')";

$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Results - PAFS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="mb-4">Available Pets</h2>
        <div class="row" id="pet-listings">
            <?php if ($result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="card h-100 pet-card">
                            <div class="position-relative">
                                <img src="<?= $row['image_url'] ?>" class="card-img-top" alt="<?= $row['name'] ?>">
                                <span class="badge bg-success position-absolute top-0 end-0 m-2"><?= ucfirst($row['status']) ?></span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($row['name']) ?></h5>
                                <p class="card-text text-muted"><?= $row['breed'] ?> • <?= $row['age'] ?> • <?= ucfirst($row['gender']) ?></p>
                                <p class="card-text"><?= $row['description'] ?></p>
                                <p class="mb-0"><small class="text-muted"><?= $row['shelter'] ?> • <?= $row['location'] ?></small></p>
                            </div>
                            <div class="card-footer bg-white border-top-0">
                                <a href="pet-details.html?id=<?= $row['id'] ?>" class="btn btn-primary w-100">View Details</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-12">
                    <p class="text-muted">No pets found matching your search criteria.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
