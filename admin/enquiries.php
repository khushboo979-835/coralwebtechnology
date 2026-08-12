<?php
include 'common/config.php';
include 'common/session.php';

// Handle delete
if (isset($_GET['delete_id'])) {
    $delete_id = intval($_GET['delete_id']);
    if ($conn) {
        $stmt = $conn->prepare("DELETE FROM enquiries WHERE id = ?");
        $stmt->bind_param("i", $delete_id);
        $stmt->execute();
        $stmt->close();
    }
    header("Location: enquiries.php");
    exit();
}

// Fetch all enquiries
$enquiries = [];
$total = 0;
if ($conn) {
    // Create table if not exists
    $conn->query("CREATE TABLE IF NOT EXISTS `enquiries` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `name` VARCHAR(255) NOT NULL,
        `email` VARCHAR(255) DEFAULT '',
        `phone` VARCHAR(50) DEFAULT '',
        `service` VARCHAR(255) DEFAULT '',
        `message` TEXT DEFAULT '',
        `source_page` VARCHAR(500) DEFAULT '',
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");

    $result = $conn->query("SELECT * FROM enquiries ORDER BY id DESC");
    if ($result) {
        $total = $result->num_rows;
        while ($row = $result->fetch_assoc()) {
            $enquiries[] = $row;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template-free">
<?php include 'common/head.php'; ?>
<body>
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <?php include 'common/sidebar.php'; ?>
        <div class="layout-page">
            <?php include 'common/header.php'; ?>
            <div class="content-wrapper">
                <div class="container-xxl flex-grow-1 container-p-y">

                    <!-- Header Row -->
                    <div class="row mb-4 align-items-center">
                        <div class="col">
                            <h4 class="fw-bold mb-0">📋 All Enquiries</h4>
                            <p class="text-muted mb-0">Total leads received from all contact forms</p>
                        </div>
                        <div class="col-auto">
                            <span class="badge bg-label-primary fs-6"><?= $total ?> Total</span>
                        </div>
                    </div>

                    <!-- Stats Cards -->
                    <div class="row mb-4 g-3">
                        <?php
                        $services_count = [];
                        foreach ($enquiries as $e) {
                            $svc = $e['service'] ?: 'General';
                            $services_count[$svc] = ($services_count[$svc] ?? 0) + 1;
                        }
                        $colors = ['primary','success','warning','danger','info'];
                        $ci = 0;
                        foreach (array_slice($services_count, 0, 4, true) as $svc => $cnt):
                        ?>
                        <div class="col-md-3 col-6">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h3 class="fw-bold text-<?= $colors[$ci++ % count($colors)] ?>"><?= $cnt ?></h3>
                                    <small class="text-muted"><?= htmlspecialchars($svc) ?></small>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Enquiries Table -->
                    <div class="card shadow">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title mb-0">Enquiries List</h5>
                            <a href="enquiries.php?export=1" class="btn btn-sm btn-success">
                                <i class="bx bx-download me-1"></i> Export CSV
                            </a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Service</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (empty($enquiries)): ?>
                                        <tr>
                                            <td colspan="8" class="text-center py-5 text-muted">
                                                <i class="bx bx-inbox fs-1"></i>
                                                <p class="mt-2">No enquiries yet. Forms submissions will appear here.</p>
                                            </td>
                                        </tr>
                                        <?php else: ?>
                                        <?php foreach ($enquiries as $i => $e): ?>
                                        <tr>
                                            <td><?= $i + 1 ?></td>
                                            <td><strong><?= htmlspecialchars($e['name']) ?></strong></td>
                                            <td>
                                                <a href="tel:<?= htmlspecialchars($e['phone']) ?>" class="text-dark fw-bold">
                                                    📞 <?= htmlspecialchars($e['phone']) ?>
                                                </a>
                                            </td>
                                            <td><?= htmlspecialchars($e['email']) ?></td>
                                            <td>
                                                <span class="badge bg-label-primary"><?= htmlspecialchars($e['service']) ?></span>
                                            </td>
                                            <td>
                                                <span title="<?= htmlspecialchars($e['message']) ?>">
                                                    <?= htmlspecialchars(strlen($e['message']) > 60 ? substr($e['message'], 0, 60) . '...' : $e['message']) ?>
                                                </span>
                                            </td>
                                            <td>
                                                <small class="text-muted"><?= date('d M Y, h:i A', strtotime($e['created_at'])) ?></small>
                                            </td>
                                            <td>
                                                <a href="https://wa.me/91<?= preg_replace('/[^0-9]/', '', $e['phone']) ?>?text=<?= urlencode("Hello {$e['name']}, we received your enquiry for {$e['service']}. How can we help you?") ?>" 
                                                   class="btn btn-sm btn-success me-1" target="_blank" title="WhatsApp">
                                                    <i class="bx bxl-whatsapp"></i>
                                                </a>
                                                <a href="?delete_id=<?= $e['id'] ?>" 
                                                   class="btn btn-sm btn-danger"
                                                   onclick="return confirm('Delete this enquiry?')" title="Delete">
                                                    <i class="bx bx-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
    <div class="layout-overlay layout-menu-toggle"></div>
</div>
<?php include 'common/footer.php'; ?>

<?php
// CSV Export
if (isset($_GET['export'])) {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="enquiries_' . date('Y-m-d') . '.csv"');
    $out = fopen('php://output', 'w');
    fputcsv($out, ['#', 'Name', 'Phone', 'Email', 'Service', 'Message', 'Source Page', 'Date']);
    foreach ($enquiries as $i => $e) {
        fputcsv($out, [
            $i + 1,
            $e['name'],
            $e['phone'],
            $e['email'],
            $e['service'],
            $e['message'],
            $e['source_page'],
            $e['created_at']
        ]);
    }
    fclose($out);
    exit;
}
?>
</body>
</html>
