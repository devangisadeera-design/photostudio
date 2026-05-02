<?php
declare(strict_types=1);

include 'includes/header.php';

global $pdo;

$pid = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$ph = null;
$items = [];

if ($pid > 0) {
    $st = $pdo->prepare(
        "SELECT photographer_id, name, specialization FROM photographers WHERE photographer_id = ? AND status = 'approved'"
    );
    $st->execute([$pid]);
    $ph = $st->fetch(PDO::FETCH_ASSOC);
    if ($ph) {
        $q = $pdo->prepare('SELECT id, image_url, caption FROM portfolio WHERE photographer_id = ? ORDER BY id DESC');
        $q->execute([$pid]);
        $items = $q->fetchAll(PDO::FETCH_ASSOC);
    }
}

$backUrl = url('photographers.php');
$bookUrl = url('modules/customer/booking.php');
?>

<div class="container pt-5 pb-5">
    <?php if ($pid < 1 || !$ph): ?>
        <div class="alert alert-warning shadow-sm rounded-3">
            <i class="bi bi-exclamation-triangle me-2"></i> Photographer not found or unavailable.
        </div>
        <a href="<?php echo htmlspecialchars($backUrl); ?>" class="btn btn-warning">← Back to photographers</a>
    <?php else: ?>
        <div class="mb-4">
            <a href="<?php echo htmlspecialchars($backUrl); ?>" class="text-decoration-none text-muted small"><i class="bi bi-arrow-left"></i> All photographers</a>
            <h1 class="display-6 fw-bold mt-2"><?php echo htmlspecialchars($ph['name']); ?></h1>
            <p class="text-muted mb-0">
                <span class="badge bg-warning text-dark"><?php echo htmlspecialchars($ph['specialization']); ?></span>
            </p>
        </div>

        <div class="d-flex flex-wrap gap-2 mb-4">
            <a href="<?php echo htmlspecialchars($bookUrl . '?photographer_id=' . $pid); ?>" class="btn btn-warning px-4">
                <i class="bi bi-calendar-check me-2"></i>Book this photographer
            </a>
        </div>

        <?php if (count($items) === 0): ?>
            <div class="card border-0 shadow-sm rounded-4 p-5 text-center text-muted">
                <i class="bi bi-images display-4 d-block mb-3 opacity-50"></i>
                <p class="mb-0">No portfolio images have been added yet. Check back soon.</p>
            </div>
        <?php else: ?>
            <div class="row g-4">
                <?php foreach ($items as $it): ?>
                    <?php
                    $src = $it['image_url'] ?? '';
                    $imgHref = $src !== '' ? url(ltrim($src, '/')) : '';
                    ?>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card border-0 shadow-sm h-100 overflow-hidden rounded-4">
                            <?php if ($imgHref !== ''): ?>
                                <a href="<?php echo htmlspecialchars($imgHref); ?>" target="_blank" rel="noopener" class="d-block bg-light">
                                    <img src="<?php echo htmlspecialchars($imgHref); ?>"
                                         class="w-100 rounded-top"
                                         style="height: 220px; object-fit: cover;"
                                         alt="<?php echo htmlspecialchars($it['caption'] ?: $ph['name'] . ' portfolio'); ?>">
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($it['caption'])): ?>
                                <div class="card-body py-2">
                                    <p class="card-text small text-muted mb-0"><?php echo htmlspecialchars((string) $it['caption']); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>

<?php include 'includes/footer.php';
