// Pet Adoption and Foster System - Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Initialize pet search functionality
    initPetSearch();

    // Initialize pet filtering
    initPetFiltering();

    // Load featured pets on homepage
    if (document.getElementById('featured-pets')) {
        loadFeaturedPets();
    }

    // Load pet listings on pets page
    if (document.getElementById('pet-listings')) {
        loadPetListings();
    }
});

// Pet Search Functionality
function initPetSearch() {
    const quickSearchForm = document.getElementById('quick-search-form');
    if (quickSearchForm) {
        quickSearchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form values
            const petType = document.getElementById('pet-type').value;
            const location = document.getElementById('location').value;
            const distance = document.getElementById('distance').value;
            
            // Redirect to pets page with search parameters
            window.location.href = `pets.html?type=${petType}&location=${encodeURIComponent(location)}&distance=${distance}`;
        });
    }

    const petSearchForm = document.getElementById('pet-search-form');
    if (petSearchForm) {
        petSearchForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // In a real application, this would filter the pets based on the search criteria
            // For this demo, we'll just show a message
            alert('Search functionality would filter pets based on your criteria.');
            
            // Scroll to pet listings
            document.getElementById('pet-listings').scrollIntoView({ behavior: 'smooth' });
        });
    }
}

// Pet Filtering Functionality
function initPetFiltering() {
    const sortBySelect = document.getElementById('sort-by');
    if (sortBySelect) {
        sortBySelect.addEventListener('change', function() {
            // In a real application, this would sort the pet listings
            // For this demo, we'll just show a message
            console.log(`Sorting pets by: ${this.value}`);
            
            // Here you would call a function to sort and redisplay the pets
            // sortPets(this.value);
        });
    }
}

// Load Featured Pets
function loadFeaturedPets() {
    // In a real application, this would fetch data from an API
    // For this demo, we're using the hardcoded pets in the HTML
    console.log('Featured pets loaded');
}

// Load Pet Listings
function loadPetListings() {
    // In a real application, this would fetch data from an API
    // For this demo, we're using the hardcoded pets in the HTML
    console.log('Pet listings loaded');
    
    // Parse URL parameters for search filters
    const urlParams = new URLSearchParams(window.location.search);
    const petType = urlParams.get('type');
    const location = urlParams.get('location');
    const distance = urlParams.get('distance');
    
    // Apply filters if they exist
    if (petType || location) {
        console.log(`Filtering by: Type=${petType}, Location=${location}, Distance=${distance}`);
        
        // In a real application, you would filter the pet listings based on these parameters
        // For this demo, we'll just update the filter form values
        if (petType && document.getElementById('pet-type')) {
            document.getElementById('pet-type').value = petType;
        }
        
        if (location && document.getElementById('location')) {
            document.getElementById('location').value = location;
        }
        
        if (distance && document.getElementById('distance')) {
            document.getElementById('distance').value = distance;
        }
    }
}

// Shelter Dashboard Functions
function initShelterDashboard() {
    // Initialize charts and statistics for shelter dashboard
    if (document.getElementById('adoption-stats-chart')) {
        renderAdoptionStatsChart();
    }
    
    if (document.getElementById('pet-status-chart')) {
        renderPetStatusChart();
    }
}

function renderAdoptionStatsChart() {
    // In a real application, this would use a charting library like Chart.js
    console.log('Adoption statistics chart rendered');
}

function renderPetStatusChart() {
    // In a real application, this would use a charting library like Chart.js
    console.log('Pet status chart rendered');
}

// User Dashboard Functions
function initUserDashboard() {
    // Initialize user dashboard functionality
    const applicationStatusBtns = document.querySelectorAll('.view-application-btn');
    if (applicationStatusBtns.length > 0) {
        applicationStatusBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const applicationId = this.getAttribute('data-application-id');
                viewApplicationDetails(applicationId);
            });
        });
    }
}

function viewApplicationDetails(applicationId) {
    // In a real application, this would fetch the application details from an API
    console.log(`Viewing application details for ID: ${applicationId}`);
    
    // Show application details modal
    const applicationModal = new bootstrap.Modal(document.getElementById('application-details-modal'));
    applicationModal.show();
}

// Pet Management Functions for Shelters
function initPetManagement() {
    const addPetForm = document.getElementById('add-pet-form');
    if (addPetForm) {
        addPetForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // In a real application, this would submit the form data to an API
            alert('Pet added successfully!');
            
            // Reset form
            this.reset();
        });
    }
    
    const editPetBtns = document.querySelectorAll('.edit-pet-btn');
    if (editPetBtns.length > 0) {
        editPetBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const petId = this.getAttribute('data-pet-id');
                editPet(petId);
            });
        });
    }
}

function editPet(petId) {
    // In a real application, this would fetch the pet details from an API
    console.log(`Editing pet with ID: ${petId}`);
    
    // Redirect to edit pet page
    window.location.href = `edit-pet.html?id=${petId}`;
}

// Application Management Functions for Shelters
function initApplicationManagement() {
    const applicationStatusBtns = document.querySelectorAll('.update-status-btn');
    if (applicationStatusBtns.length > 0) {
        applicationStatusBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const applicationId = this.getAttribute('data-application-id');
                const status = this.getAttribute('data-status');
                updateApplicationStatus(applicationId, status);
            });
        });
    }
}

function updateApplicationStatus(applicationId, status) {
    // In a real application, this would update the application status via an API
    console.log(`Updating application ${applicationId} to status: ${status}`);
    
    // Show confirmation message
    alert(`Application status updated to: ${status}`);
}

// Messaging Functions
function initMessaging() {
    const messageForm = document.getElementById('message-form');
    if (messageForm) {
        messageForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get message content
            const messageContent = document.getElementById('message-content').value;
            const recipientId = document.getElementById('recipient-id').value;
            
            // Send message
            sendMessage(recipientId, messageContent);
            
            // Reset form
            this.reset();
        });
    }
}

function sendMessage(recipientId, content) {
    // In a real application, this would send the message via an API
    console.log(`Sending message to ${recipientId}: ${content}`);
    
    // Add message to conversation (for demo purposes)
    const messagesContainer = document.getElementById('messages-container');
    if (messagesContainer) {
        const messageElement = document.createElement('div');
        messageElement.className = 'message outgoing';
        messageElement.innerHTML = `
            <div class="message-content">
                <p>${content}</p>
                <small class="text-muted">Just now</small>
            </div>
        `;
        messagesContainer.appendChild(messageElement);
        
        // Scroll to bottom of messages container
        messagesContainer.scrollTop = messagesContainer.scrollHeight;
    }
}