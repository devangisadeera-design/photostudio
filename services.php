<?php
include 'includes/header.php';
global $pdo;
$serviceRows = $pdo->query('SELECT * FROM services ORDER BY name')->fetchAll(PDO::FETCH_ASSOC);
$bookUrl = url('modules/customer/booking.php');
?>
<div class="row g-4">
    <?php foreach ($serviceRows as $row): ?>
        <div class="col-md-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3"><?php echo htmlspecialchars($row['name']); ?></h5>
                    <h4 class="text-warning mb-3">$<?php echo number_format($row['price'], 2); ?></h4>
                    <p class="small text-muted mb-2"><i class="bi bi-clock me-2"></i><?php echo htmlspecialchars($row['duration']); ?></p>
                    <p class="card-text"><?php echo htmlspecialchars($row['description']); ?></p>
                    <a href="<?php echo htmlspecialchars($bookUrl); ?>" class="btn btn-outline-warning w-100 mt-3">Book Now</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php include "includes/footer.php"; ?>