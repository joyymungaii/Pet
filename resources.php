<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Resources - PAFS</title>
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
    <header class="hero-section text-white text-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('/image/resource.jpg');">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Pet Care Resources</h1>
                    <p class="lead mb-4">Everything you need to know about caring for your pet. From training guides to health tips, we've got you covered.</p>
                </div>
            </div>
        </div>
    </header>

    <!-- Resource Categories -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Resource Categories</h2>
            <div class="row g-4">
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center resource-card">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-heart-pulse-fill fs-2"></i>
                            </div>
                            <h4>Health & Wellness</h4>
                            <p>Essential information about pet health, nutrition, and preventative care.</p>
                            <a href="#health" class="stretched-link">View Resources</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center resource-card">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-mortarboard-fill fs-2"></i>
                            </div>
                            <h4>Training & Behavior</h4>
                            <p>Guides and tips for training your pet and addressing behavioral issues.</p>
                            <a href="#training" class="stretched-link">View Resources</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center resource-card">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-house-heart-fill fs-2"></i>
                            </div>
                            <h4>New Pet Owners</h4>
                            <p>Essential information for those who recently adopted or are planning to adopt.</p>
                            <a href="#new-owners" class="stretched-link">View Resources</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm text-center resource-card">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-question-circle-fill fs-2"></i>
                            </div>
                            <h4>FAQs</h4>
                            <p>Answers to frequently asked questions about pet adoption, care, and fostering.</p>
                            <a href="#faqs" class="stretched-link">View Resources</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Resources -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">Online Resources</h2>
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/image/dog.jpeg" class="card-img-top" alt="Dog training">
                        <div class="card-body">
                            <span class="badge bg-primary mb-2">Training</span>
                            <h5 class="card-title">Basic Obedience Training for Dogs</h5>
                            <p class="card-text">Learn the essential commands every dog should know and how to teach them effectively.</p>
                            <a href="https://vancouver.ca/files/cov/dog-training-book-rex-in-the-city.pdf" class="btn btn-outline-primary">Read Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/image/cat.jpeg" class="card-img-top" alt="Pet nutrition">
                        <div class="card-body">
                            <span class="badge bg-success mb-2">Nutrition</span>
                            <h5 class="card-title">Nutrition Guide for Cats and Dogs</h5>
                            <p class="card-text">Understanding your pet's nutritional needs and how to choose the right food for their life stage.</p>
                            <a href="https://www.uah-vet.com/guidance-on-balanced-diets-choosing-the-right-pet-food-and-managing-special-dietary-needs/" class="btn btn-outline-primary">Read Article</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <img src="/image/dog.jpeg" class="card-img-top" alt="Pet adoption">
                        <div class="card-body">
                            <span class="badge bg-info mb-2">Adoption</span>
                            <h5 class="card-title">Preparing Your Home for a New Pet</h5>
                            <p class="card-text">A comprehensive checklist to ensure your home is safe and ready for your new furry family member.</p>
                            <a href="https://www.animalcareexperts.com/blog/preparing-to-bring-home-a-new-pet-a-guide.html" class="btn btn-outline-primary">Read Article</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Health & Wellness Section -->
    <section id="health" class="py-5">
        <div class="container">
            <div class="section-header mb-5">
                <h2 class="text-center">Health & Wellness</h2>
                <p class="text-center text-muted">Essential information about pet health, nutrition, and preventative care.</p>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Preventative Care Guide</h5>
                                    <p class="card-text">Learn about vaccinations, parasite prevention, dental care, and other essential preventative measures.</p>
                                    <a href="https://www.uah-vet.com/importance-of-vaccinations-regular-check-ups-parasite-control-fleas-ticks-worms-and-dental-care/#:~:text=Vaccinations%20help%20protect%20pets%20from,health%20by%20preventing%20dental%20disease." class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Senior Pet Care</h5>
                                    <p class="card-text">Special considerations and care tips for aging pets to keep them comfortable and healthy.</p>
                                    <a href="https://www.artcityvets.com/post/senior-pet-care-how-to-keep-your-aging-pet-healthy-and-comfortable" class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Pet First Aid</h5>
                                    <p class="card-text">Basic first aid techniques and how to prepare for pet emergencies.</p>
                                    <a href="https://www.medvet.com/pet-emergency-and-first-aid-tips/" class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 border-0 shadow-sm">
                                <div class="card-body">
                                    <h5 class="card-title">Exercise Requirements</h5>
                                    <p class="card-text">Understanding the exercise needs of different pets and how to keep them physically active.</p>
                                    <a href="https://www.parksidevets.com/pets/exercising-your-pet-tips-to-make-sure-your-cat-or-dog-gets-exercise/#:~:text=Exercising%20Dogs&text=As%20a%20rule%2C%20dogs%20should,working%20dogs)%20needing%20the%20most." class="btn btn-sm btn-outline-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="card border-0 shadow-sm mb-4">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Downloadable Resources</h5>
                            </div>
                            <div class="card-body">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Pet Vaccination Schedule</span>
                                        <a href="/docs/Pet Vaccination Schedule.pdf" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i> PDF</a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Pet First Aid Checklist</span>
                                        <a href="/docs/Pet First Aid Checklist.pdf" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i> PDF</a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Nutrition Guide by Age</span>
                                        <a href="/docs/Nutrition Guide by Age.pdf" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i> PDF</a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <span>Toxic Foods Checklist</span>
                                        <a href="/docs/Toxic Foods Checklist.pdf" class="btn btn-sm btn-outline-primary"><i class="bi bi-download"></i> PDF</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="vet" class="col-lg-4">
                    <div class="card border-0 shadow-sm" style="background-color: #e6f0ff;">
                        <div class="card-body">
                            <h5 class="card-title">Ask a Vet</h5>
                            <p class="card-text">Have a health question about your pet? Submit it to our veterinary team.</p>
                            <form>
                                <div class="mb-3">
                                    <label for="petType" class="form-label">Pet Type</label>
                                    <select class="form-select" id="petType">
                                        <option selected>Select pet type</option>
                                        <option value="dog">Dog</option>
                                        <option value="cat">Cat</option>
                                        <option value="small-animal">Small Animal</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="question" class="form-label">Your Question</label>
                                    <textarea class="form-control" id="question" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit Question</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Training & Behavior Section -->
    <section id="training" class="py-5 bg-light">
        <div class="container">
            <div class="section-header mb-5">
                <h2 class="text-center">Training & Behavior</h2>
                <p class="text-center text-muted">Guides and tips for training your pet and addressing behavioral issues.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Dog Training Basics</h5>
                            <div class="mb-3">
                                <span class="badge bg-primary">Dogs</span>
                                <span class="badge bg-secondary">Beginners</span>
                            </div>
                            <p class="card-text">Learn the fundamentals of positive reinforcement training and basic commands every dog should know.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Sit, Stay, Come commands
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Leash training
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Positive reinforcement techniques
                                </li>
                            </ul>
                            <a href="/docs/Dog Training Basics.pdf" class="btn btn-outline-primary">View Training Guide</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Cat Behavior Solutions</h5>
                            <div class="mb-3">
                                <span class="badge bg-primary">Cats</span>
                                <span class="badge bg-secondary">All Levels</span>
                            </div>
                            <p class="card-text">Understanding common cat behaviors and how to address issues like scratching, litter box problems, and more.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Litter box training
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Scratching solutions
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Multi-cat household harmony
                                </li>
                            </ul>
                            <a href="/docs/Cat Behavior Solutions.pdf" class="btn btn-outline-primary">View Behavior Guide</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">Addressing Problem Behaviors</h5>
                            <div class="mb-3">
                                <span class="badge bg-primary">All Pets</span>
                                <span class="badge bg-secondary">Intermediate</span>
                            </div>
                            <p class="card-text">Strategies for addressing common behavioral issues like separation anxiety, aggression, and destructive behaviors.</p>
                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Separation anxiety
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Excessive barking/meowing
                                </li>
                                <li class="list-group-item bg-transparent px-0">
                                    <i class="bi bi-check-circle-fill text-success me-2"></i> Resource guarding
                                </li>
                            </ul>
                            <a href="/docs/Addressing Problem Behaviors.pdf" class="btn btn-outline-primary">View Behavior Guide</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Pet Owners Section -->
    <section id="new-owners" class="py-5">
        <div class="container">
            <div class="section-header mb-5">
                <h2 class="text-center">New Pet Owners</h2>
                <p class="text-center text-muted">Essential information for those who recently adopted or are planning to adopt.</p>
            </div>
            <div class="row align-items-center mb-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="/image/parent.jpg" alt="New pet owner with dog" class="img-fluid rounded shadow-sm">
                </div>
                <div class="col-lg-6">
                    <h3 class="mb-4">Your First 30 Days</h3>
                    <p>The first month with your new pet is crucial for establishing routines, building trust, and helping them adjust to their new home. Our comprehensive guide covers everything you need to know to make this transition smooth and successful.</p>
                    <div class="accordion" id="firstMonthAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Week 1: Settling In
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#firstMonthAccordion">
                                <div class="accordion-body">
                                    <p>Creating a safe space, establishing basic routines, and allowing your pet to adjust at their own pace.</p>
                                    <a href="/docs/Week 1.pdf" class="btn btn-sm btn-outline-primary">Read Week 1 Guide</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Week 2: Building Trust
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#firstMonthAccordion">
                                <div class="accordion-body">
                                    <p>Bonding activities, positive reinforcement, and beginning basic training.</p>
                                    <a href="/docs/Week 2.pdf" class="btn btn-sm btn-outline-primary">Read Week 2 Guide</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Week 3: Expanding Horizons
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#firstMonthAccordion">
                                <div class="accordion-body">
                                    <p>Introducing new experiences, socialization, and expanding your pet's comfort zone.</p>
                                    <a href="/docs/Week 3.pdf" class="btn btn-sm btn-outline-primary">Read Week 3 Guide</a>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Week 4: Establishing Normalcy
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#firstMonthAccordion">
                                <div class="accordion-body">
                                    <p>Solidifying routines, addressing any remaining issues, and planning for long-term care.</p>
                                    <a href="/docs/Week 4.pdf" class="btn btn-sm btn-outline-primary">Read Week 4 Guide</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="/docs/COMPLETE 30.pdf" class="btn btn-primary">Download Complete 30-Day Guide</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="checklist" class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-cart-fill fs-2"></i>
                            </div>
                            <h5 class="card-title">Essential Supplies</h5>
                            <p class="card-text">Comprehensive checklists of supplies needed for different types of pets.</p>
                            <a href="/docs/Essential Supplies.pdf" class="btn btn-sm btn-outline-primary">View Checklists</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-shield-check fs-2"></i>
                            </div>
                            <h5 class="card-title">Pet-Proofing</h5>
                            <p class="card-text">How to make your home safe and secure for your new pet.</p>
                            <a href="/docs/Pet-Proofing.pdf" class="btn btn-sm btn-outline-primary">View Guide</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-calendar-check fs-2"></i>
                            </div>
                            <h5 class="card-title">Vet Visits</h5>
                            <p class="card-text">What to expect at your first veterinary visit and how to prepare.</p>
                            <a href="/docs/Preparing for the Vet Visit.pdf" class="btn btn-sm btn-outline-primary">View Guide</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body text-center">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-heart-fill fs-2"></i>
                            </div>
                            <h5 class="card-title">Bonding Tips</h5>
                            <p class="card-text">Activities and approaches to build a strong bond with your new pet.</p>
                            <a href="/docs/Bonding Tips.pdf" class="btn btn-sm btn-outline-primary">View Guide</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FAQs Section -->
    <section id="faqs" class="py-5">
        <div class="container">
            <div class="section-header mb-5">
                <h2 class="text-center">Frequently Asked Questions</h2>
                <p class="text-center text-muted">Answers to common questions about pet care, adoption, and fostering.</p>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="accordion" id="resourceFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    How do I know which pet is right for my family?
                                </button>
                            </h2>
                            <div id="faqCollapseOne" class="accordion-collapse collapse show" aria-labelledby="faqHeadingOne" data-bs-parent="#resourceFAQ">
                                <div class="accordion-body">
                                    <p>Choosing the right pet depends on several factors, including your lifestyle, living situation, time availability, and budget. Consider the following:</p>
                                    <ul>
                                        <li><strong>Activity level:</strong> Some pets require more exercise and stimulation than others.</li>
                                        <li><strong>Space:</strong> Consider the size of your home and whether you have outdoor space.</li>
                                        <li><strong>Time commitment:</strong> Different pets require different amounts of attention and care.</li>
                                        <li><strong>Allergies:</strong> Consider any allergies family members might have.</li>
                                        <li><strong>Experience:</strong> Some pets are better suited for first-time owners than others.</li>
                                    </ul>
                                    <p>Our <a href="adoption-application.html">Pet Matching Quiz</a> can help you determine which type of pet might be the best fit for your situation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    How much does it cost to own a pet?
                                </button>
                            </h2>
                            <div id="faqCollapseTwo" class="accordion-collapse collapse" aria-labelledby="faqHeadingTwo" data-bs-parent="#resourceFAQ">
                                <div class="accordion-body">
                                    <p>The cost of pet ownership varies depending on the type of pet, size, breed, and health status. Here's a general breakdown of expenses:</p>
                                    <ul>
                                        <li><strong>Initial costs:</strong> Adoption fees, spay/neuter, initial vaccinations, supplies (bed, crate, litter box, etc.)</li>
                                        <li><strong>Recurring costs:</strong> Food, regular veterinary check-ups, preventative medications, grooming, toys, treats</li>
                                        <li><strong>Potential additional costs:</strong> Training, pet insurance, emergency veterinary care, boarding/pet sitting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    What should I feed my pet?
                                </button>
                            </h2>
                            <div id="faqCollapseThree" class="accordion-collapse collapse" aria-labelledby="faqHeadingThree" data-bs-parent="#resourceFAQ">
                                <div class="accordion-body">
                                    <p>Proper nutrition is essential for your pet's health and wellbeing. The best diet for your pet depends on their species, age, size, activity level, and any health conditions they may have.</p>
                                    <p>For dogs and cats, look for high-quality commercial pet foods that meet AAFCO (Association of American Feed Control Officials) standards. These foods are formulated to provide complete and balanced nutrition.</p>
                                    <p>Consult with your veterinarian for specific recommendations for your pet, especially if they have special dietary needs or health concerns.</p>
                                    <p>For more detailed information, check out our <a href="/docs/Nutrition Guide by Age.pdf">Pet Nutrition Guide</a>.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    How do I prepare for a new pet?
                                </button>
                            </h2>
                            <div id="faqCollapseFour" class="accordion-collapse collapse" aria-labelledby="faqHeadingFour" data-bs-parent="#resourceFAQ">
                                <div class="accordion-body">
                                    <p>Preparing for a new pet involves several steps:</p>
                                    <ol>
                                        <li><strong>Pet-proof your home:</strong> Remove hazards, secure toxic substances, and protect valuable items.</li>
                                        <li><strong>Gather supplies:</strong> Purchase food, bedding, toys, and other necessary items before bringing your pet home.</li>
                                        <li><strong>Find a veterinarian:</strong> Research and select a veterinarian in your area.</li>
                                        <li><strong>Learn about care requirements:</strong> Research the specific needs of the type of pet you're adopting.</li>
                                        <li><strong>Prepare family members:</strong> Discuss responsibilities and rules regarding the new pet.</li>
                                        <li><strong>Create a schedule:</strong> Plan for feeding, exercise, and other care routines.</li>
                                    </ol>
                                    <p>For detailed checklists and guides, visit our <a href="#new-owners">New Pet Owners</a> section.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="faqHeadingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                    How do I know if my pet needs to see a vet?
                                </button>
                            </h2>
                            <div id="faqCollapseFive" class="accordion-collapse collapse" aria-labelledby="faqHeadingFive" data-bs-parent="#resourceFAQ">
                                <div class="accordion-body">
                                    <p>You should take your pet to the vet immediately if you notice any of these signs:</p>
                                    <ul>
                                        <li>Difficulty breathing</li>
                                        <li>Excessive vomiting or diarrhea</li>
                                        <li>Inability to urinate or defecate</li>
                                        <li>Ingestion of toxic substances</li>
                                        <li>Severe injury or bleeding</li>
                                        <li>Seizures</li>
                                        <li>Collapse or inability to stand</li>
                                        <li>Extreme lethargy or unresponsiveness</li>
                                    </ul>
                                    <p>For less urgent concerns, schedule a regular appointment if you notice:</p>
                                    <ul>
                                        <li>Changes in appetite or water consumption</li>
                                        <li>Unexplained weight loss or gain</li>
                                        <li>Changes in behavior or energy level</li>
                                        <li>Persistent coughing or sneezing</li>
                                        <li>Skin issues or hair loss</li>
                                        <li>Limping or difficulty moving</li>
                                    </ul>
                                    <p>When in doubt, it's always better to consult with a veterinarian. For more information, talk to our <a href="#vet">Vet</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="py-5 bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h2>Subscribe to Our Newsletter</h2>
                    <p class="lead">Get the latest pet care tips, resources, and updates delivered to your inbox.</p>
                </div>
                <div class="col-lg-6">
                    <form class="row g-3">
                        <div class="col-md-8">
                            <input type="email" class="form-control form-control-lg" placeholder="Your email address">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-light btn-lg w-100">Subscribe</button>
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
                        <li><a href="#health" class="text-white">Health & Wellness</a></li>
                        <li><a href="#training" class="text-white">Training & Behavior</a></li>
                        <li><a href="#new-owners" class="text-white">New Pet Owners</a></li>
                        <li><a href="#local" class="text-white">Local Resources</a></li>
                        <li><a href="#faqs" class="text-white">FAQs</a></li>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="main.js"></script>
</body>
</html>