<?php include "includes/header.php"; ?>

<!-- Hero Section with Animated Gradient Overlay -->
<section class="hero-section d-flex align-items-center text-white position-relative overflow-hidden">
    <div class="container text-center position-relative z-3">
        
        <h1 class="display-2 fw-bold mb-4 animate__animated animate__fadeInDown" style="animation-delay: 0.1s;">DreamShots Studio</h1>
        <p class="fs-3 fw-light mb-5 animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">Where every moment becomes a masterpiece</p>
        <div class="d-flex flex-wrap justify-content-center gap-3 animate__animated animate__fadeIn" style="animation-delay: 0.3s;">
            <a href="<?php echo htmlspecialchars(url('modules/customer/booking.php')); ?>" class="btn btn-gradient btn-lg px-5 py-3 fw-bold shadow-lg">Book a Session</a>
            <a href="gallery.php" class="btn btn-outline-light btn-lg px-5 py-3 fw-bold">View Gallery</a>
            <a href="<?php echo htmlspecialchars(url('auth/photographer_register.php')); ?>" class="btn btn-outline-warning btn-lg px-4 py-3 fw-bold">Join as Photographer</a>
        </div>
    </div>
    <!-- Scroll indicator -->
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 z-3 animate__animated animate__fadeInUp animate__infinite animate__slower">
        <a href="#about" class="text-white fs-2"><i class="bi bi-chevron-down"></i></a>
    </div>
</section>

<!-- About / Welcome Section with Glass Cards -->
<section id="about" class="container my-5 py-5">
    <div class="row align-items-center g-5">
        <div class="col-lg-6">
            <span class="badge bg-warning text-dark px-3 py-2 mb-3">Welcome to DreamShots</span>
            <h2 class="display-5 fw-bold mb-4">Capturing life's emotions with artistry</h2>
            <p class="lead text-secondary mb-4">With over 15 years of experience, we specialize in wedding, portrait, and event photography that tells your unique story. Our team of passionate photographers uses state-of-the-art equipment to deliver timeless images you'll cherish forever.</p>
            <div class="row mt-5 g-4">
                <div class="col-6">
                    <div class="glass-card-horizontal d-flex align-items-center p-3">
                        <div class="icon-circle bg-warning me-3">
                            <i class="bi bi-camera text-dark fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0">Professional Gear</h5>
                            <p class="small text-secondary">High-end cameras & lighting</p>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="glass-card-horizontal d-flex align-items-center p-3">
                        <div class="icon-circle bg-warning me-3">
                            <i class="bi bi-people text-dark fs-4"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-0">Expert Team</h5>
                            <p class="small text-secondary">Award-winning photographers</p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="about.php" class="btn btn-gradient btn-lg px-5 mt-4 shadow-sm">Discover More</a>
        </div>
        <div class="col-lg-6 position-relative">
            <div class="glass-card-image p-3">
                <img src="https://images.unsplash.com/photo-1554048612-b6a482bc67e5?auto=format&fit=crop&w=800&q=80" 
                     class="img-fluid rounded-4 shadow-lg" 
                     alt="Photographer at work">
            </div>
            <!-- Floating badge -->
            <div class="floating-badge bg-warning text-dark rounded-4 p-3 shadow-lg d-none d-lg-block">
                <i class="bi bi-camera-fill me-2"></i>
                <span class="fw-bold">15+ years</span>
            </div>
        </div>
    </div>
</section>

<!-- Featured Work / Gallery Preview -->
<section class="bg-light-gradient py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-warning text-dark px-4 py-2 mb-3">Our Portfolio</span>
            <h2 class="display-6 fw-bold">Recent masterpieces</h2>
            <p class="text-secondary">Browse some of our latest work</p>
        </div>
        <div class="row g-4">
            <?php
            $images = [
                'https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1511285560929-80b456fea0bc?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1519225421980-715cb0215aed?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1504198266287-1659872e6590?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&w=800&q=80'
            ];
            $categories = ['Wedding', 'Portrait', 'Event', 'Fashion', 'Engagement', 'Corporate'];
            for ($i = 0; $i < 6; $i++):
            ?>
            <div class="col-md-4">
                <div class="gallery-card glass-card p-2">
                    <div class="overflow-hidden rounded-4">
                        <img src="<?php echo $images[$i]; ?>" class="card-img-top" alt="Portfolio" style="height: 280px; object-fit: cover; transition: transform 0.5s;">
                    </div>
                    <div class="card-body text-center p-3">
                        <span class="badge bg-warning text-dark mb-2"><?php echo $categories[$i]; ?></span>
                        <h6 class="fw-bold">DreamShots <?php echo $categories[$i]; ?></h6>
                    </div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
        <div class="text-center mt-5">
            <a href="gallery.php" class="btn btn-gradient btn-lg px-5 fw-bold">View Full Gallery</a>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="container my-5 py-5">
    <div class="text-center mb-5">
        <span class="badge bg-warning text-dark px-4 py-2 mb-3">Why us</span>
        <h2 class="display-6 fw-bold">The DreamShots difference</h2>
        <p class="text-secondary">What sets us apart</p>
    </div>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="feature-card glass-card text-center p-4 h-100">
                <div class="icon-circle-large bg-warning mx-auto mb-4">
                    <i class="bi bi-camera-reels-fill text-dark fs-1"></i>
                </div>
                <h5 class="fw-bold">Creative Approach</h5>
                <p class="text-secondary mb-0">We don't just take photos – we tell stories with a unique artistic vision.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card glass-card text-center p-4 h-100">
                <div class="icon-circle-large bg-warning mx-auto mb-4">
                    <i class="bi bi-calendar-check-fill text-dark fs-1"></i>
                </div>
                <h5 class="fw-bold">Flexible Booking</h5>
                <p class="text-secondary mb-0">Easy online scheduling and availability checks – book your session in minutes.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="feature-card glass-card text-center p-4 h-100">
                <div class="icon-circle-large bg-warning mx-auto mb-4">
                    <i class="bi bi-heart-fill text-dark fs-1"></i>
                </div>
                <h5 class="fw-bold">Client Love</h5>
                <p class="text-secondary mb-0">Hundreds of happy couples and families trust us with their memories.</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Carousel (modern minimal) -->
<section class="bg-dark-gradient text-white py-5">
    <div class="container">
        <div class="text-center mb-5">
            <span class="badge bg-warning text-dark px-4 py-2 mb-3">Testimonials</span>
            <h2 class="display-6 fw-bold">What our clients say</h2>
        </div>
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <div class="testimonial-card glass-card p-5">
                                <i class="bi bi-quote display-1 text-warning opacity-50"></i>
                                <p class="lead fst-italic mb-4">"DreamShots captured our wedding day perfectly. Every photo tells a story, and we relive the emotions every time we look at them."</p>
                                <h5 class="fw-bold">— Sarah & Michael</h5>
                                <span class="text-warning">Wedding 2025</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <div class="testimonial-card glass-card p-5">
                                <i class="bi bi-quote display-1 text-warning opacity-50"></i>
                                <p class="lead fst-italic mb-4">"The team made our family portrait session so much fun. The photos are stunning – natural, vibrant, and exactly what we wanted."</p>
                                <h5 class="fw-bold">— The Perera Family</h5>
                                <span class="text-warning">Portrait Session</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-8 text-center">
                            <div class="testimonial-card glass-card p-5">
                                <i class="bi bi-quote display-1 text-warning opacity-50"></i>
                                <p class="lead fst-italic mb-4">"From initial booking to final delivery, everything was seamless. The photos captured the energy of our corporate event perfectly."</p>
                                <h5 class="fw-bold">— ABC Corporation</h5>
                                <span class="text-warning">Corporate Event</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Minimal controls -->
            <div class="d-flex justify-content-center gap-3 mt-4">
                <button class="btn btn-outline-light rounded-circle" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="btn btn-outline-light rounded-circle" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action with Pulse Animation -->
<section class="container my-5 py-5">
    <div class="cta-gradient rounded-5 p-5 text-center position-relative overflow-hidden">
        <div class="position-relative z-3">
            <h2 class="display-5 fw-bold text-dark mb-4">Ready to capture your moments?</h2>
            <p class="lead text-dark mb-5">Book your session today and let's create magic together.</p>
            <a href="booking.php" class="btn btn-dark btn-lg px-5 py-3 fw-bold shadow me-3">Book Now</a>
            <a href="contact.php" class="btn btn-outline-dark btn-lg px-5 py-3 fw-bold">Contact Us</a>
        </div>
        <!-- Animated circles -->
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
    </div>
</section>

<!-- Add Animate.css & Custom Styles -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700&display=swap');

    body {
        font-family: 'Inter', sans-serif;
        overflow-x: hidden;
    }

    /* Hero Section */
    .hero-section {
        min-height: 100vh;
        background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.4) 100%), url('https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?auto=format&fit=crop&w=1600&q=80') center/cover fixed no-repeat;
        position: relative;
    }
    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(45deg, #f5af19 0%, #f12711 100%);
        opacity: 0.2;
        animation: gradientShift 10s ease infinite;
    }
    @keyframes gradientShift {
        0% { opacity: 0.1; }
        50% { opacity: 0.3; }
        100% { opacity: 0.1; }
    }

    /* Glass Card */
    .glass-card {
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(16px) saturate(180%);
        -webkit-backdrop-filter: blur(16px) saturate(180%);
        border-radius: 2rem;
        border: 1px solid rgba(255, 255, 255, 0.5);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .glass-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 50px rgba(0, 0, 0, 0.2);
    }

    .glass-card-horizontal {
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(8px);
        border-radius: 1.5rem;
        border: 1px solid rgba(255, 255, 255, 0.5);
        transition: all 0.3s;
    }
    .glass-card-horizontal:hover {
        background: rgba(255, 255, 255, 0.9);
    }

    .glass-card-image {
        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(8px);
        border-radius: 2rem;
        display: inline-block;
    }

    /* Buttons */
    .btn-gradient {
        background: linear-gradient(135deg, #f5af19, #f12711);
        border: none;
        color: white;
        font-weight: 600;
        border-radius: 3rem;
        transition: all 0.3s;
        box-shadow: 0 8px 20px rgba(241, 39, 17, 0.3);
    }
    .btn-gradient:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 30px rgba(241, 39, 17, 0.4);
        background: linear-gradient(135deg, #f5b41a, #e01e0b);
        color: white;
    }

    /* Icons */
    .icon-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .icon-circle-large {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Floating Badge */
    .floating-badge {
        position: absolute;
        bottom: -20px;
        left: -20px;
        animation: float 3s ease-in-out infinite;
    }
    @keyframes float {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }

    /* Gallery Card */
    .gallery-card {
        overflow: hidden;
        border: none;
        transition: all 0.3s;
        cursor: pointer;
    }
    .gallery-card:hover img {
        transform: scale(1.1);
    }

    /* Feature Card */
    .feature-card {
        transition: all 0.3s;
    }

    /* Testimonial Card */
    .testimonial-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
    }

    /* CTA Gradient */
    .cta-gradient {
        background: linear-gradient(135deg, #f5af19, #f12711);
        position: relative;
    }
    .circle {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.2);
        z-index: 1;
    }
    .circle1 {
        width: 200px;
        height: 200px;
        top: -50px;
        left: -50px;
        animation: pulse 5s infinite;
    }
    .circle2 {
        width: 300px;
        height: 300px;
        bottom: -100px;
        right: -100px;
        animation: pulse 7s infinite;
    }
    @keyframes pulse {
        0% { transform: scale(1); opacity: 0.3; }
        50% { transform: scale(1.2); opacity: 0.5; }
        100% { transform: scale(1); opacity: 0.3; }
    }

    /* Background gradients */
    .bg-light-gradient {
        background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
    }
    .bg-dark-gradient {
        background: linear-gradient(135deg, #1e1e2f, #2d2d44);
    }

    /* Carousel controls */
    .carousel-control-prev, .carousel-control-next {
        position: static;
        width: auto;
        opacity: 1;
    }
</style>

<?php include "includes/footer.php"; ?>