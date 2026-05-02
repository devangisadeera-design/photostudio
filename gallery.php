<?php include "includes/header.php"; ?>

<div class="container py-5">
    <!-- Header -->
    <div class="text-center mb-5" data-aos="fade-up">
        <span class="badge bg-warning text-dark px-3 py-2 mb-3">Portfolio</span>
        <h2 class="display-5 fw-bold">Our Masterpieces</h2>
        <p class="text-muted">Explore our work by categories</p>
        
        <!-- Filter buttons modern -->
        <div class="filter-buttons mt-4 d-flex justify-content-center gap-2 flex-wrap">
            <button type="button" class="btn btn-warning active filter-btn" data-filter="all">All</button>
            <button type="button" class="btn btn-outline-warning filter-btn" data-filter="wedding">Wedding</button>
            <button type="button" class="btn btn-outline-warning filter-btn" data-filter="portrait">Portrait</button>
            <button type="button" class="btn btn-outline-warning filter-btn" data-filter="fashion">Fashion</button>
        </div>
    </div>

    <!-- Masonry Gallery -->
    <div class="row g-4 gallery-container">
        <?php 
        $categories = ['wedding', 'portrait', 'fashion', 'wedding', 'portrait', 'fashion'];
        for($i=1; $i<=6; $i++): 
        ?>
        <div class="col-md-4 gallery-item" data-category="<?php echo $categories[$i-1]; ?>" data-aos="zoom-in" data-aos-delay="<?php echo $i * 50; ?>">
            <div class="card border-0 shadow-sm overflow-hidden gallery-card">
                <img src="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=500&q=60" 
                     class="img-fluid gallery-img" 
                     alt="Gallery Image">
                <div class="gallery-overlay d-flex align-items-center justify-content-center">
                    <a href="https://images.unsplash.com/photo-1519741497674-611481863552?auto=format&fit=crop&w=800&q=80" 
                       class="btn btn-warning btn-lg rounded-circle" 
                       data-lightbox="gallery" 
                       data-title="Beautiful Moment">
                        <i class="bi bi-arrows-fullscreen"></i>
                    </a>
                </div>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</div>

<!-- Lightbox CSS and JS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
<!-- AOS -->
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init({ duration: 600, once: true });

    // Filter functionality with animation
    document.querySelectorAll('.filter-btn').forEach(button => {
        button.addEventListener('click', function() {
            let filter = this.dataset.filter;
            
            // Update active button
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('btn-warning', 'active');
                btn.classList.add('btn-outline-warning');
            });
            this.classList.remove('btn-outline-warning');
            this.classList.add('btn-warning', 'active');
            
            // Filter items with fade effect
            document.querySelectorAll('.gallery-item').forEach(item => {
                if(filter === 'all' || item.dataset.category === filter) {
                    item.style.display = 'block';
                    item.style.animation = 'fadeIn 0.5s';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
</script>

<style>
    .filter-buttons .btn {
        border-radius: 50px;
        padding: 0.5rem 1.8rem;
        font-weight: 500;
        transition: all 0.3s;
    }
    .filter-buttons .btn:hover {
        transform: translateY(-2px);
    }
    .gallery-card { 
        position: relative; 
        border-radius: 1.5rem;
        overflow: hidden;
        cursor: pointer;
    }
    .gallery-img { 
        transition: transform 0.5s ease; 
        height: 300px;
        object-fit: cover;
    }
    .gallery-card:hover .gallery-img { 
        transform: scale(1.1); 
    }
    .gallery-overlay {
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0,0,0,0.5);
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .gallery-card:hover .gallery-overlay { 
        opacity: 1; 
    }
    .gallery-overlay .btn {
        transform: scale(0.8);
        transition: transform 0.3s ease;
    }
    .gallery-card:hover .gallery-overlay .btn {
        transform: scale(1);
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
</style>

<?php include "includes/footer.php"; ?>