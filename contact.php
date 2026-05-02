<?php include "includes/header.php"; ?>

<div class="container py-5">
    <!-- Hero Header -->
    <div class="text-center mb-5 py-5 bg-warning rounded-4">
        <h2 class="display-5 fw-bold text-dark">Let's Start a Conversation</h2>
        <p class="lead text-dark">Feel free to reach out for any inquiries or support regarding your bookings.</p>
    </div>

    <?php if (isset($_SESSION['inquiry_success'])): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i> <?php echo $_SESSION['inquiry_success']; unset($_SESSION['inquiry_success']); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>
    <?php if (isset($_SESSION['inquiry_error'])): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="bi bi-exclamation-triangle-fill me-2"></i> <?php echo $_SESSION['inquiry_error']; unset($_SESSION['inquiry_error']); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    <?php endif; ?>

    <div class="row g-5">
        <div class="col-lg-7">
            <div class="card border-0 shadow-lg h-100 rounded-4">
                <div class="card-body p-5">
                    <h4 class="fw-bold mb-4"><i class="bi bi-chat-dots-fill text-warning me-2"></i>Send us a Message</h4>
                    <form action="send_inquiry.php" method="POST">
                        <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Your Name</label>
                                <input type="text" name="name" class="form-control form-control-lg rounded-3" placeholder="John Doe" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Email Address</label>
                                <input type="email" name="email" class="form-control form-control-lg rounded-3" placeholder="name@example.com" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Subject</label>
                                <input type="text" name="subject" class="form-control form-control-lg rounded-3" placeholder="Booking Inquiry">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold">Message</label>
                                <textarea name="message" class="form-control form-control-lg rounded-3" rows="5" placeholder="How can we help you?" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-warning w-100 py-3 fw-bold rounded-3 shadow">
                                    <i class="bi bi-send-fill me-2"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-5">
            <div class="p-5 bg-dark text-white rounded-4 h-100 shadow-lg">
                <h4 class="fw-bold mb-4 text-warning"><i class="bi bi-info-circle-fill me-2"></i>Contact Information</h4>
                <div class="d-flex mb-4">
                    <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="bi bi-geo-alt-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Our Studio</h6>
                        <p class="text-muted mb-0">123 Photo Street, Creative Hub, Colombo, Sri Lanka.</p>
                    </div>
                </div>
                <div class="d-flex mb-4">
                    <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="bi bi-telephone-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Call Us</h6>
                        <p class="text-muted mb-0">+94 112 345 678</p>
                    </div>
                </div>
                <div class="d-flex mb-5">
                    <div class="bg-warning text-dark rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 50px; height: 50px;">
                        <i class="bi bi-envelope-fill fs-5"></i>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Email Support</h6>
                        <p class="text-muted mb-0">info@dreamshots.com</p>
                    </div>
                </div>

                <h5 class="fw-bold mb-3 text-warning"><i class="bi bi-share-fill me-2"></i>Follow Our Work</h5>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-outline-warning btn-lg rounded-circle"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="btn btn-outline-warning btn-lg rounded-circle"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="btn btn-outline-warning btn-lg rounded-circle"><i class="bi bi-twitter-x"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>