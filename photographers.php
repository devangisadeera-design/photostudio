<?php
include 'includes/header.php';
global $pdo;
$defaultPhAvatar = 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png';
$rows = $pdo->query(
    "SELECT p.photographer_id, p.name, p.specialization, u.avatar AS user_avatar
     FROM photographers p
     LEFT JOIN users u ON p.user_id = u.user_id
     WHERE p.status = 'approved'
     ORDER BY p.name"
)->fetchAll(PDO::FETCH_ASSOC);
$bookUrl = url('modules/customer/booking.php');
$portfolioPageUrl = url('photographer_portfolio.php');
?>

<!-- Page Header -->
<div class="container pt-5">
    <div class="text-center mb-5">
        <h6 class="text-warning fw-bold text-uppercase letter-spacing">Our Team</h6>
        <h2 class="display-5 fw-bold">Meet the Artists</h2>
        <p class="text-muted">Talented photographers behind DreamShots</p>
    </div>
</div>

<div class="row g-4">
    <?php foreach ($rows as $row): ?>
        <?php
        $avatarUrl = userAvatarPublicUrl(isset($row['user_avatar']) ? (string) $row['user_avatar'] : null);
        $imgSrc = $avatarUrl !== null ? $avatarUrl : $defaultPhAvatar;
        ?>
    <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-lg h-100 text-center p-4 hover-lift">
            <!-- Circular image with gradient border -->
            <div class="position-relative mx-auto mb-4" style="width: 160px; height: 160px;">
                <div class="rounded-circle overflow-hidden border border-4 border-warning h-100 w-100">
                    <img src="<?php echo htmlspecialchars($imgSrc); ?>"
                         class="img-fluid"
                         alt="<?php echo htmlspecialchars($row['name']); ?>"
                         style="object-fit: cover; height: 100%; width: 100%;">
                </div>
            </div>
            <h4 class="fw-bold mb-2"><?php echo htmlspecialchars($row['name']); ?></h4>
            <span class="badge bg-warning text-dark mb-3 py-2 px-3 fs-6">
                <?php echo htmlspecialchars($row['specialization']); ?>
            </span>
            <p class="text-muted mb-4">
                Expert in capturing stunning <?php echo strtolower(htmlspecialchars($row['specialization'])); ?> moments with creativity and passion.
            </p>
            <div class="d-flex justify-content-center flex-wrap gap-2 mt-auto">
                <a href="<?php echo htmlspecialchars($portfolioPageUrl . '?id=' . (int) $row['photographer_id']); ?>"
                   class="btn btn-outline-dark px-3">
                   <i class="bi bi-images me-2"></i>Portfolio
                </a>
                <a href="<?php echo htmlspecialchars($bookUrl . '?photographer_id=' . (int) $row['photographer_id']); ?>"
                   class="btn btn-warning px-4">
                   <i class="bi bi-calendar-check me-2"></i>Book
                </a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<style>
    .letter-spacing {
        letter-spacing: 2px;
    }
    .hover-lift {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 1rem;
    }
    .hover-lift:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 40px rgba(0,0,0,0.12) !important;
    }
</style>

<?php include "includes/footer.php"; ?>