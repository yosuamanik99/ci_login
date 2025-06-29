<!DOCTYPE html>
<html lang="en">
<head>
    <title><?= htmlspecialchars($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1><?= htmlspecialchars($title) ?></h1>
    <p>Username: <?= htmlspecialchars($user->username) ?></p>
    <p>Nama Lengkap: <?= htmlspecialchars($user->fullname) ?></p>
    <p>Terdaftar sejak: <?= htmlspecialchars($user->created_at) ?></p>

    <a href="<?= base_url('dashboard') ?>" class="btn btn-secondary mt-3">Kembali ke Dashboard</a>
</div>
</body>
</html>
