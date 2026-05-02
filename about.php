<?php include "includes/header.php"; ?>

<!-- Page Header -->
<div class="container pt-5">
    <div class="position-relative overflow-hidden mb-5">
        <div class="bg-warning p-5 text-center rounded-4">
            <h1 class="display-4 fw-bold text-dark">About DreamShots</h1>
            <p class="lead text-dark">Where passion meets photography</p>
        </div>
    </div>

    <!-- Story Section -->
    <div class="row align-items-center mb-5 py-4">
        <div class="col-md-6">
            <h6 class="text-warning fw-bold text-uppercase letter-spacing">Who We Are</h6>
            <h2 class="display-5 fw-bold mb-4">Our Passion for Photography</h2>
            <p class="lead text-muted">Founded in 2010, DreamShots Photo Studio has been dedicated to capturing life's most precious moments with professional excellence.</p>
            <p>Our studio is equipped with the latest technology to ensure every shot is a masterpiece. Whether it's a wedding, a portrait, or a corporate event, our team of expert photographers is here to tell your story.</p>
            <a href="photographers.php" class="btn btn-warning btn-lg px-5 mt-3 shadow-sm"><i class="bi bi-people-fill me-2"></i>Meet Our Team</a>
        </div>
        <div class="col-md-6">
            <div class="position-relative">
                <img src="https://images.unsplash.com/photo-1554048612-b6a482bc67e5?auto=format&fit=crop&w=600&q=80" 
                     class="img-fluid rounded-4 shadow-lg" 
                     alt="Our Studio">
                <div class="position-absolute bottom-0 start-0 bg-warning p-3 m-3 rounded-3 shadow">
                    <h4 class="fw-bold mb-0 text-dark">15+</h4>
                    <p class="small mb-0 fw-bold">Years Experience</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats / Features -->
    <div class="row g-4 text-center mt-5">
        <div class="col-md-4">
            <div class="p-5 bg-white rounded-4 shadow-lg h-100 hover-lift">
                <div class="bg-warning rounded-circle d-inline-flex p-4 mb-4">
                    <i class="bi bi-camera-reels fs-1 text-dark"></i>
                </div>
                <h5 class="fw-bold mb-3">Professional Gear</h5>
                <p class="text-muted">We use high-end cameras and lighting equipment to deliver top-notch quality.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-5 bg-white rounded-4 shadow-lg h-100 hover-lift">
                <div class="bg-warning rounded-circle d-inline-flex p-4 mb-4">
                    <i class="bi bi-person-check fs-1 text-dark"></i>
                </div>
                <h5 class="fw-bold mb-3">Expert Team</h5>
                <p class="text-muted">Our photographers are specialists in weddings, portraits, and events.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-5 bg-white rounded-4 shadow-lg h-100 hover-lift">
                <div class="bg-warning rounded-circle d-inline-flex p-4 mb-4">
                    <i class="bi bi-award fs-1 text-dark"></i>
                </div>
                <h5 class="fw-bold mb-3">Award Winning</h5>
                <p class="text-muted">Recognized for excellence in photography and customer service.</p>
            </div>
        </div>
    </div>
</div>

<style>
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.15) !important;
    }
    .letter-spacing {
        letter-spacing: 2px;
    }
</style>

<?php include "includes/footer.php"; ?>