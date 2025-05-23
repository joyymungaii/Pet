<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foster a Pet - PAFS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navigation -->
    <?php
        include('navbar.php');
    ?>

    <!-- Hero Section -->
    <header class="hero-section text-white text-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/image/parent.jpg');">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Become a Foster Parent</h1>
                    <p class="lead mb-4">Open your heart and home to a pet in need. Fostering saves lives and provides animals with the love and care they need until they find their forever homes.</p>
                    <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                        <a href="foster-application.php" class="btn btn-primary btn-lg px-4 me-sm-3">Apply to Foster</a>
                        <a href="#foster-faq" class="btn btn-outline-light btn-lg px-4">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- What is Fostering Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="/image/parent.jpg" alt="Person fostering a dog" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6">
                    <h2 class="mb-4">What is Pet Fostering?</h2>
                    <p>Pet fostering is a temporary arrangement where you provide a home for a pet until they can be permanently adopted. As a foster parent, you'll provide shelter, food, love, and basic care for the animal.</p>
                    <p>Fostering is crucial for:</p>
                    <ul>
                        <li>Animals recovering from illness or injury</li>
                        <li>Pets who need socialization or behavior training</li>
                        <li>Young animals who need extra care</li>
                        <li>Pets who don't do well in shelter environments</li>
                        <li>Creating space in shelters for more animals in need</li>
                    </ul>
                    <p>The length of foster care can range from a few days to several months, depending on the pet's specific needs and circumstances.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits of Fostering -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Benefits of Fostering</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-heart-fill fs-2"></i>
                            </div>
                            <h4>Save Lives</h4>
                            <p>By fostering, you directly help save animals' lives by providing them with a safe space to heal and grow until they find their forever homes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-house-heart-fill fs-2"></i>
                            </div>
                            <h4>Temporary Commitment</h4>
                            <p>Fostering allows you to experience the joy of having a pet without the long-term commitment, making it perfect for those who can't adopt permanently.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-people-fill fs-2"></i>
                            </div>
                            <h4>Family Experience</h4>
                            <p>Fostering is a rewarding experience for families, teaching children compassion, responsibility, and the value of giving back to the community.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-stars fs-2"></i>
                            </div>
                            <h4>Personal Growth</h4>
                            <p>Caring for a foster pet can reduce stress, increase physical activity, and provide a sense of purpose and fulfillment.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-clipboard-check-fill fs-2"></i>
                            </div>
                            <h4>Support Provided</h4>
                            <p>Most shelters and rescue organizations provide food, supplies, medical care, and ongoing support for foster parents.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-award-fill fs-2"></i>
                            </div>
                            <h4>Adoption Insights</h4>
                            <p>Fostering helps you learn about a pet's personality and needs, making you a valuable resource for potential adopters.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foster Process -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">The Fostering Process</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="timeline">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle">1</div>
                                        <h5 class="mt-3">Application</h5>
                                        <p>Fill out our foster application form with your information, living situation, and preferences for the type of pet you'd like to foster.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle">2</div>
                                        <h5 class="mt-3">Review & Home Check</h5>
                                        <p>Our team will review your application and schedule a home check to ensure your living space is safe for a foster pet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle">3</div>
                                        <h5 class="mt-3">Orientation</h5>
                                        <p>Attend a foster orientation session to learn about our policies, procedures, and what to expect as a foster parent.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle">4</div>
                                        <h5 class="mt-3">Matching</h5>
                                        <p>We'll match you with a pet that fits your lifestyle, experience level, and preferences.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle">5</div>
                                        <h5 class="mt-3">Fostering Period</h5>
                                        <p>Provide care, love, and support for your foster pet. Regular check-ins with our team will ensure everything is going well.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="timeline-step">
                                    <div class="timeline-content">
                                        <div class="inner-circle">6</div>
                                        <h5 class="mt-3">Adoption</h5>
                                        <p>Help your foster pet find their forever home by providing insights about their personality and needs to potential adopters.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pets Needing Foster Homes -->
    <?php
    // Database connection details (replace with your actual values)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pet_adoption";

    // Number of pets to display per page
    $petsPerPage = 4;

    // Get the current page number from the URL
    $page = isset($_GET['page']) ? intval($_GET['page']) : 1;

    // Calculate the starting index for the database query
    $startIndex = ($page - 1) * $petsPerPage;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Fetch foster pets with pagination
        $stmt = $conn->prepare("SELECT * FROM pets WHERE status = 'foster' LIMIT :start, :limit");
        $stmt->bindParam(':start', $startIndex, PDO::PARAM_INT);
        $stmt->bindParam(':limit', $petsPerPage, PDO::PARAM_INT);
        $stmt->execute();
        $fosterPets = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Count total foster pets for pagination
        $countStmt = $conn->prepare("SELECT COUNT(*) FROM pets WHERE status = 'foster'");
        $countStmt->execute();
        $totalFosterPets = $countStmt->fetchColumn();
        $totalPages = ceil($totalFosterPets / $petsPerPage);

        echo '<section class="py-5 bg-light">';
        echo '    <div class="container">';
        echo '        <div class="d-flex justify-content-between align-items-center mb-4">';
        echo '            <h2>Pets Needing Foster Homes</h2>';
        echo '            <a href="pets.html?status=foster" class="btn btn-outline-primary">View All</a>';
        echo '        </div>';
        echo '        <div class="row">';

        if (!empty($fosterPets)) {
            foreach ($fosterPets as $pet) {
                echo '            <div class="col-md-6 col-lg-3 mb-4">';
                echo '                <div class="card h-100 pet-card">';
                echo '                    <div class="position-relative">';
                echo '                        <img src="' . htmlspecialchars($pet['image_url']) . '" class="card-img-top" alt="' . htmlspecialchars($pet['name']) . '">';
                echo '                        <span class="badge bg-warning position-absolute top-0 end-0 m-2">Foster Only</span>';
                echo '                    </div>';
                echo '                    <div class="card-body">';
                echo '                        <h5 class="card-title">' . htmlspecialchars($pet['name']) . '</h5>';
                echo '                        <p class="card-text text-muted">' . htmlspecialchars($pet['breed']) . ' • ' . htmlspecialchars($pet['age']) . ' • ' . htmlspecialchars($pet['gender']) . '</p>';
                echo '                        <p class="card-text">' . htmlspecialchars(substr($pet['description'], 0, 100)) . '...</p>';
                echo '                        <p class="mb-0"><small class="text-muted">' . htmlspecialchars($pet['shelter_name']) . ' • ' . htmlspecialchars($pet['distance']) . ' miles away</small></p>';
                echo '                    </div>';
                echo '                    <div class="card-footer bg-white border-top-0">';
                echo '                        <a href="pet-details.php?id=' . htmlspecialchars($pet['pet_id']) . '" class="btn btn-primary w-100">View Details</a>';
                echo '                    </div>';
                echo '                </div>';
                echo '            </div>';
            }
        } else {
            echo '            <div class="col-12"><p>No pets currently available for foster.</p></div>';
        }

        echo '        </div>';
        echo '    </div>';

        // Pagination links
        echo '    <nav aria-label="Foster Pets Pagination">';
        echo '        <ul class="pagination justify-content-center mt-4">';
        if ($page > 1) {
            echo '            <li class="page-item"><a class="page-link" href="?page=' . ($page - 1) . '">Previous</a></li>';
        }
        for ($i = 1; $i <= $totalPages; $i++) {
            $activeClass = ($i === $page) ? ' active' : '';
            echo '            <li class="page-item' . $activeClass . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
        }
        if ($page < $totalPages) {
            echo '            <li class="page-item"><a class="page-link" href="?page=' . ($page + 1) . '">Next</a></li>';
        }
        echo '        </ul>';
        echo '    </nav>';

        echo '</section>';

    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }

    $conn = null;
    ?>

    <!-- Foster Requirements -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 mb-4 mb-lg-0">
                    <img src="/image/parent.jpg" alt="Person with foster pet" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6 order-lg-1">
                    <h2 class="mb-4">Foster Requirements</h2>
                    <p>To become a foster parent, you'll need to meet these basic requirements:</p>
                    <ul class="list-group list-group-flush mb-4">
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Be at least 21 years old</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Have a stable living situation</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> If renting, have landlord approval for pets</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Have reliable transportation for vet appointments</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Be able to separate foster pets from existing pets if needed</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Have time to provide proper care and attention</li>
                        <li class="list-group-item bg-transparent"><i class="bi bi-check-circle-fill text-success me-2"></i> Be willing to work with the shelter/rescue on the pet's care plan</li>
                    </ul>
                    <p>Don't worry if you're not sure if you qualify. Our team will work with you to determine if fostering is a good fit for your situation.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Foster Success Stories -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Our Top Foster Success Stories</h2>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="image/success.jpeg" class="card-img-top" alt="Success story">
                        <div class="card-body">
                            <h5 class="card-title">Luna's Journey</h5>
                            <p class="card-text">When Luna came to us, she was severely underweight and afraid of people. After two months with her foster mom, Sarah, Luna transformed into a confident, healthy cat who was quickly adopted by a loving family.</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="image/dog.jpeg" class="rounded-circle me-3" width="50" height="50" alt="Foster parent">
                                <div>
                                    <h6 class="mb-0">Sarah Johnson</h6>
                                    <p class="text-muted mb-0">Foster Parent for 2 years</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="image/rabbit.jpeg" class="card-img-top" alt="Success story">
                        <div class="card-body">
                            <h5 class="card-title">Max's Recovery</h5>
                            <p class="card-text">Max was hit by a car and needed extensive surgery and rehabilitation. His foster dad, Michael, provided the care and patience he needed. Now Max is thriving in his forever home with a family who adores him.</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="image/rabbit.jpeg" class="rounded-circle me-3" width="50" height="50" alt="Foster parent">
                                <div>
                                    <h6 class="mb-0">Michael Brown</h6>
                                    <p class="text-muted mb-0">Foster Parent for 3 years</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="success" class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="image/success.jpeg" class="card-img-top" alt="Success story">
                        <div class="card-body">
                            <h5 class="card-title">The Puppy Litter</h5>
                            <p class="card-text">When a pregnant stray dog was brought to the shelter, the Rodriguez family stepped up to foster her. They helped her deliver and raise seven healthy puppies, all of whom found wonderful homes.</p>
                            <div class="d-flex align-items-center mt-3">
                                <img src="image/dog.jpeg" class="rounded-circle me-3" width="50" height="50" alt="Foster parent">
                                <div>
                                    <h6 class="mb-0">Rodriguez Family</h6>
                                    <p class="text-muted mb-0">Foster Family for 1 year</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foster FAQ -->
    <section id="foster-faq" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Frequently Asked Questions</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="fosterFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What expenses am I responsible for as a foster parent?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    Most shelters and rescue organizations cover all medical expenses, food, and basic supplies for foster pets. You may be asked to provide transportation to vet appointments and basic care items like bedding and toys, but this varies by organization. Some foster parents choose to purchase additional items for their foster pets, but this is not required.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long will I need to foster a pet?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    The length of time varies depending on the pet's needs. Some pets may need just a few weeks of care, while others might need several months. When you apply to foster, you can specify your availability and preferences. The organization will work with you to find a fostering situation that fits your schedule.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can I foster if I have other pets?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    Yes, many foster parents have their own pets. The organization will work with you to find a foster pet that is compatible with your existing pets. In some cases, you may need to keep the foster pet separated from your pets, especially during an initial adjustment period or if the foster pet has medical issues.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    What if I want to adopt my foster pet?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    This is called a "foster failure" - but it's actually a success! Many foster parents end up falling in love with their foster pets and deciding to adopt them. Most organizations give foster parents the first opportunity to adopt their foster pets if they wish to do so. Just let the organization know as soon as possible if you're interested in adopting.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What if I need to go out of town while fostering?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    Most organizations have backup foster homes or can temporarily take the pet back into the shelter if you need to travel. It's important to give as much notice as possible so arrangements can be made. Some foster parents also have friends or family members who are approved to care for their foster pets during short absences.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    What if the foster pet has behavioral issues?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#fosterFAQ">
                                <div class="accordion-body">
                                    The organization will provide support and resources to help you address any behavioral issues. This may include training tips, connecting you with a professional trainer, or in some cases, finding a different foster home that's better suited to the pet's needs. Communication is key - always let the organization know about any concerns you have.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Foster Application CTA -->
    <section id="foster-application" class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h2>Ready to Make a Difference?</h2>
                    <p class="lead mb-0">Apply today to become a foster parent and help save lives, one pet at a time.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="foster-application.html" class="btn btn-light btn-lg">Apply to Foster</a>
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