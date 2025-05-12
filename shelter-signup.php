<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shelter Sign Up - PAFS</title>
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
    <header class="hero-section text-white text-center" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('image/resources.jpg');">
        <div class="container py-5">
        
            <div class="row py-5">
                <div class="col-lg-8 mx-auto">
                    <h1 class="display-4 fw-bold mb-4">Join Our Network of Shelters</h1>
                    <p class="lead mb-4">Partner with PAFS to increase your shelter's visibility, streamline adoptions, and help more animals find their forever homes.</p>
                    <a href="#signup-form" class="btn btn-primary btn-lg px-5">Sign Up Now</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Benefits Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5">Why Partner with PAFS?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-graph-up-arrow fs-2"></i>
                            </div>
                            <h4 class="card-title">Increased Visibility</h4>
                            <p class="card-text">Showcase your adoptable pets to thousands of potential adopters in your area and beyond.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-laptop fs-2"></i>
                            </div>
                            <h4 class="card-title">Streamlined Management</h4>
                            <p class="card-text">Access our comprehensive shelter dashboard to manage listings, applications, and communications.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-people-fill fs-2"></i>
                            </div>
                            <h4 class="card-title">Qualified Adopters</h4>
                            <p class="card-text">Connect with pre-screened, serious adopters who are ready to provide loving homes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-file-earmark-text-fill fs-2"></i>
                            </div>
                            <h4 class="card-title">Digital Applications</h4>
                            <p class="card-text">Receive and review adoption applications online, saving time and reducing paperwork.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-megaphone-fill fs-2"></i>
                            </div>
                            <h4 class="card-title">Marketing Support</h4>
                            <p class="card-text">Benefit from our marketing efforts, including social media promotion and featured listings.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="icon-circle bg-primary text-white mb-3">
                                <i class="bi bi-bar-chart-fill fs-2"></i>
                            </div>
                            <h4 class="card-title">Data & Analytics</h4>
                            <p class="card-text">Access detailed reports and insights to optimize your adoption strategies and outcomes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">How It Works</h2>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-number bg-primary text-white">1</div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <h4>Complete the Application</h4>
                                    <p>Fill out our shelter partner application with information about your organization, facilities, and adoption processes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number bg-primary text-white">2</div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <h4>Verification Process</h4>
                                    <p>Our team will review your application and verify your organization's credentials, typically within 2-3 business days.</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number bg-primary text-white">3</div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <h4>Account Setup</h4>
                                    <p>Once approved, you'll receive access to your shelter dashboard where you can customize your profile and settings.</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number bg-primary text-white">4</div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <h4>List Your Pets</h4>
                                    <p>Start adding your adoptable pets with photos, descriptions, and adoption requirements to reach potential adopters.</p>
                                </div>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-number bg-primary text-white">5</div>
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <h4>Manage Adoptions</h4>
                                    <p>Receive and review applications, communicate with potential adopters, and track adoption outcomes through our platform.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Signup Form Section -->
    <section class="py-5" id="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4 p-md-5">
                        <h2 class="text-center mb-4">Shelter Partner Application</h2>
                        <p class="text-center text-muted mb-5">Please complete all sections of this application. Fields marked with an asterisk (*) are required.</p>

                        <form id="shelterSignupForm" class="needs-validation" novalidate action="shelter_applications.php" method="POST">                            
                            <div class="progress mb-4" style="height: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="formProgress"></div>
                            </div>

                            <div class="d-flex justify-content-between mb-4">
                                <button type="button" class="btn btn-outline-primary" id="prevBtn" disabled>Previous</button>
                                <div class="step-indicators">
                                    <span class="step-indicator active" data-step="1"></span>
                                    <span class="step-indicator" data-step="2"></span>
                                    <span class="step-indicator" data-step="3"></span>
                                    <span class="step-indicator" data-step="4"></span>
                                </div>
                                <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
                            </div>

                            <div class="form-step" id="step1">
                                <h4 class="mb-4">Organization Information</h4>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="shelterName" class="form-label">Organization Name *</label>
                                        <input type="text" class="form-control" id="shelterName" name="shelterName" required>
                                        <div class="invalid-feedback">
                                            Please enter your organization name.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="shelterType" class="form-label">Organization Type *</label>
                                        <select class="form-select" id="shelterType" name="shelterType" required>
                                            <option value="" selected disabled>Select Type</option>
                                            <option value="municipal">Municipal Animal Shelter</option>
                                            <option value="nonprofit">Non-Profit Rescue</option>
                                            <option value="sanctuary">Animal Sanctuary</option>
                                            <option value="foster">Foster-Based Rescue</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your organization type.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="yearEstablished" class="form-label">Year Established *</label>
                                        <input type="number" class="form-control" id="yearEstablished" name="yearEstablished" min="1900" max="2023" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid year.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="taxId" class="form-label">Tax ID / EIN (for non-profits) *</label>
                                        <input type="text" class="form-control" id="taxId" name="taxId" required>
                                        <div class="invalid-feedback">
                                            Please enter your Tax ID or EIN.
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <label for="websiteUrl" class="form-label">Website URL</label>
                                        <input type="url" class="form-control" id="websiteUrl" name="websiteUrl" placeholder="https://www.example.org">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="facebookUrl" class="form-label">Facebook Page</label>
                                        <input type="url" class="form-control" id="facebookUrl" name="facebookUrl" placeholder="https://www.facebook.com/yourpage">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="instagramHandle" class="form-label">Instagram Handle</label>
                                        <div class="input-group">
                                            <span class="input-group-text">@</span>
                                            <input type="text" class="form-control" id="instagramHandle" name="instagramHandle">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-step" id="step2" style="display: none;">
                                <h4 class="mb-4">Contact Information</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="contactFirstName" class="form-label">Primary Contact First Name *</label>
                                        <input type="text" class="form-control" id="contactFirstName" name="contactFirstName" required>
                                        <div class="invalid-feedback">
                                            Please enter the contact's first name.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contactLastName" class="form-label">Primary Contact Last Name *</label>
                                        <input type="text" class="form-control" id="contactLastName" name="contactLastName" required>
                                        <div class="invalid-feedback">
                                            Please enter the contact's last name.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contactTitle" class="form-label">Title/Position *</label>
                                        <input type="text" class="form-control" id="contactTitle" name="contactTitle" required>
                                        <div class="invalid-feedback">
                                            Please enter the contact's title.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="contactPhone" class="form-label">Phone Number *</label>
                                        <input type="tel" class="form-control" id="contactPhone" name="contactPhone" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid phone number.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="contactEmail" class="form-label">Email Address *</label>
                                        <input type="email" class="form-control" id="contactEmail" name="contactEmail" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid email address.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="physicalAddress" class="form-label">Physical Address *</label>
                                        <input type="text" class="form-control" id="physicalAddress" name="physicalAddress" required>
                                        <div class="invalid-feedback">
                                            Please enter your physical address.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="city" class="form-label">City *</label>
                                        <input type="text" class="form-control" id="city" name="city" required>
                                        <div class="invalid-feedback">
                                            Please enter your city.
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state" class="form-label">State *</label>
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
                                    <div class="col-md-3">
                                        <label for="zipCode" class="form-label">Zip Code *</label>
                                        <input type="text" class="form-control" id="zipCode" name="zipCode" required>
                                        <div class="invalid-feedback">
                                            Please enter your zip code.
                                        </div>
                                    </div>


                                </div>
                            </div>

                            <div class="form-step" id="step3" style="display: none;">
                                <h4 class="mb-4">Shelter Information</h4>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="facilityType" class="form-label">Facility Type *</label>
                                        <select class="form-select" id="facilityType" name="facilityType" required>
                                            <option value="" selected disabled>Select Type</option>
                                            <option value="physical">Physical Shelter</option>
                                            <option value="foster">Foster-Based Only</option>
                                            <option value="hybrid">Hybrid (Physical & Foster)</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select your facility type.
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="animalCapacity" class="form-label">Animal Capacity *</label>
                                        <input type="number" class="form-control" id="animalCapacity" name="animalCapacity" min="1" required>
                                        <div class="invalid-feedback">
                                            Please enter your animal capacity.
                                        </div>
                                    </div>
                                    <div class="col-12">
                                            <label class="form-label">Animals You Accept/Rescue (Select all that apply) *</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="acceptDogs" name="acceptedAnimals" value="dogs">
                                                <label class="form-check-label" for="acceptDogs">
                                                    Dogs
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="acceptCats" name="acceptedAnimals" value="cats">
                                                <label class="form-check-label" for="acceptCats">
                                                    Cats
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="acceptSmallAnimals" name="acceptedAnimals" value="small">
                                                <label class="form-check-label" for="acceptSmallAnimals">
                                                    Small Animals (rabbits, guinea pigs, etc.)
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="acceptBirds" name="acceptedAnimals" value="birds">
                                                <label class="form-check-label" for="acceptBirds">
                                                    Birds
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="acceptReptiles" name="acceptedAnimals" value="reptiles">
                                                <label class="form-check-label" for="acceptReptiles">
                                                    Reptiles
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="acceptLivestock" name="acceptedAnimals" value="livestock">
                                                <label class="form-check-label" for="acceptLivestock">
                                                    Farm/Livestock Animals
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="acceptOther" name="acceptedAnimals" value="other">
                                                <label class="form-check-label" for="acceptOther">
                                                    Other
                                                </label>
                                            </div>
                                            <div class="invalid-feedback" id="animalsInvalidFeedback">
                                                Please select at least one type of animal.
                                            </div>
                                        </div>


                                    <div class="col-12">
                                        <label for="vetPartners" class="form-label">Veterinary Partners/Providers *</label>
                                        <textarea class="form-control" id="vetPartners" name="vetPartners" rows="2" required></textarea>
                                        <div class="invalid-feedback">
                                            Please enter your veterinary partners.
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <label for="staffCount" class="form-label">Number of Staff/Volunteers *</label>
                                        <input type="number" class="form-control" id="staffCount" name="staffCount" min="1" required>
                                        <div class="invalid-feedback">
                                            Please enter your staff count.
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-step" id="step4" style="display: none;">


                                <div class="col-12 mt-4">
                                    <div class="alert alert-info">
                                        <h5><i class="bi bi-info-circle-fill me-2"></i> Required Documentation</h5>
                                        <p class="mb-2">Please be prepared to provide the following documents during the verification process:</p>
                                        <ul class="mb-0">
                                            <li>501(c)(3) determination letter (for non-profits)</li>
                                            <li>Business license or registration</li>
                                            <li>Proof of insurance</li>
                                            <li>Animal care facility license (if applicable)</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="partner-agreement p-3 border rounded mb-3" style="max-height: 200px; overflow-y: auto;">
                                        <h5>Shelter Partner Agreement</h5>
                                        <p>By submitting this application and checking the box below, you agree to the following terms and conditions:</p>
                                        <ol>
                                            <li>All information provided in this application is true and accurate to the best of your knowledge.</li>
                                            <li>Your organization complies with all applicable local, state, and federal laws and regulations regarding animal care and adoption.</li>
                                            <li>You will maintain accurate and up-to-date listings of your adoptable animals on the PAFS platform.</li>
                                            <li>You will respond to adoption inquiries and applications in a timely manner (within 2 business days).</li>
                                            <li>You will follow up on adoption outcomes and update the status of adopted animals on the platform.</li>
                                            <li>You will maintain appropriate standards of animal care, including providing necessary veterinary care, proper housing, nutrition, and socialization.</li>
                                            <li>You understand that PAFS reserves the right to remove listings or terminate partnerships that do not comply with our policies or standards of animal welfare.</li>
                                            <li>You agree to participate in the PAFS quality assurance program, which may include periodic reviews and site visits.</li>
                                            <li>You will notify PAFS of any significant changes to your organization, including changes in leadership, location, or operational status.</li>
                                            <li>You understand that this partnership can be terminated by either party with 30 days written notice.</li>
                                        </ol>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="agreeTerms" name="agreeTerms" required>
                                        <label class="form-check-label" for="agreeTerms">
                                            I have read and agree to the Shelter Partner Agreement *
                                        </label>
                                        <div class="invalid-feedback">
                                            You must agree to the terms to continue.
                                        </div>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" id="agreeUpdates" name="agreeUpdates">
                                        <label class="form-check-label" for="agreeUpdates">
                                            I would like to receive updates about PAFS features, events, and resources
                                        </label>
                                    </div>
                                </div>
                            </div>
                        

                         <!-- Submit Button (only visible on last step) -->
                         <div class="mt-4 text-center" id="submitButtonContainer" style="display: none;">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Submit Application</button>
                                </div>
                        </form>
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
                    <div class="accordion" id="shelterFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Is there a fee to join PAFS as a shelter partner?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#shelterFAQ">
                                <div class="accordion-body">
                                    <p>No, there is no fee to join PAFS as a shelter partner. Our platform is provided free of charge to qualified animal shelters and rescue organizations. We believe in removing barriers to help as many animals as possible find loving homes.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long does the application and verification process take?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#shelterFAQ">
                                <div class="accordion-body">
                                    <p>The typical application review and verification process takes 2-3 business days. However, it may take longer if additional information or documentation is needed. Once approved, you'll receive an email with instructions to set up your shelter dashboard and begin listing pets.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Can we maintain our own adoption policies and procedures?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#shelterFAQ">
                                <div class="accordion-body">
                                    <p>Yes, absolutely. PAFS respects that each organization has its own adoption policies and procedures. You maintain full control over your adoption requirements, screening processes, and final adoption decisions. Our platform simply helps connect you with potential adopters and streamlines the application process.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    How do we manage adoption applications through PAFS?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#shelterFAQ">
                                <div class="accordion-body">
                                    <p>PAFS provides a comprehensive dashboard where you can view, sort, and respond to adoption applications. You can customize your application form, set automatic screening criteria, communicate with applicants through our messaging system, and track the status of each application. The system also allows you to export application data and generate reports.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    What kind of support does PAFS provide to shelter partners?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#shelterFAQ">
                                <div class="accordion-body">
                                    <p>PAFS provides comprehensive support to our shelter partners, including:</p>
                                    <ul>
                                        <li>Dedicated partner support team available via email, phone, and chat</li>
                                        <li>Detailed onboarding and training resources</li>
                                        <li>Regular webinars on best practices for digital adoption programs</li>
                                        <li>Marketing support and promotional opportunities</li>
                                        <li>Technical assistance with the platform</li>
                                        <li>Community forums to connect with other shelter partners</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Can we integrate PAFS with our existing shelter management software?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#shelterFAQ">
                                <div class="accordion-body">
                                    <p>Yes, PAFS offers integration capabilities with several popular shelter management systems, including Shelterluv, PetPoint, and Shelter Buddy. Our API also allows for custom integrations if you use a different system. This integration can help automate the process of listing animals and updating their status, saving your staff valuable time.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-primary text-white text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h2 class="mb-4">Ready to Help More Animals Find Homes?</h2>
                    <p class="lead mb-4">Join our network of shelter partners today and expand your reach to thousands of potential adopters.</p>
                    <a href="#signup-form" class="btn btn-light btn-lg px-5">Apply Now</a>
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

    <!-- Custom CSS for timeline and step indicators -->
    <style>
        .timeline {
            position: relative;
            padding-left: 50px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 20px;
            width: 2px;
            background-color: #dee2e6;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        
        .timeline-number {
            position: absolute;
            left: -50px;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            z-index: 1;
        }
        
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
                
                // Special validation for checkboxes in step 3
                if (currentStep === 2) {
                    const animalCheckboxes = document.querySelectorAll('input[name="acceptedAnimals"]');
                    const anyChecked = Array.from(animalCheckboxes).some(cb => cb.checked);
                    
                    if (!anyChecked) {
                        document.getElementById('animalsInvalidFeedback').style.display = 'block';
                        isValid = false;
                    } else {
                        document.getElementById('animalsInvalidFeedback').style.display = 'none';
                    }
                }
                
                // Password match validation in step 4
                if (currentStep === 3) {
                    const password = document.getElementById('password');
                    const confirmPassword = document.getElementById('confirmPassword');
                    
                    if (password.value !== confirmPassword.value) {
                        confirmPassword.classList.add('is-invalid');
                        isValid = false;
                    } else {
                        confirmPassword.classList.remove('is-invalid');
                    }
                }
                
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
            
            // Toggle password visibility
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');
            
            togglePassword.addEventListener('click', function() {
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                togglePassword.innerHTML = type === 'password' ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
            });
            


            
            // Initialize the form
            showStep(currentStep);
            });
    </script>
</body>
</html>