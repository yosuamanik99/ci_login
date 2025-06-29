<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background: #f9f9f9; }
        a.logout { float: right; background: #dc3545; color: white; padding: 6px 12px; text-decoration: none; border-radius: 4px; }
        a.logout:hover { background: #b52a35; }
        table { width: 100%; border-collapse: collapse; margin-top: 25px; background: white; }
        table, th, td { border: 1px solid #bbb; }
        th, td { padding: 12px; text-align: left; }
        th { background: #f5f5f5; }
        .msg { margin:


10px 0; padding: 10px; border-radius: 4px; }
.success { background: #d4edda; color: #155724; }
.error { background: #f8d7da; color: #721c24; }
</style>

</head> <body>
<div>
    <h2>Selamat datang, <?= htmlspecialchars($username) ?></h2>
    <a href="<?= site_url('auth/logout') ?>" class="logout">Logout</a>
</div>

<?php if (!empty($success)) echo '<div class="msg success">'.$success.'</div>'; ?>
<?php if (!empty($error)) echo '<div class="msg error">'.$error.'</div>'; ?>

<h3>Tambah Produk</h3>
<form method="post" action="<?= site_url('dashboard/insert') ?>">
    <label>Nama Produk:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Harga:</label><br>
    <input type="number" name="price" required><br><br>

    <button type="submit">Tambah</button>
</form>

<h3>Daftar Produk</h3>
<table>
    <tr>
        <th>ID</th>
        <th>Nama Produk</th>
        <th>Harga</th>
        <th>Tanggal Dibuat</th>
    </tr>
    <?php foreach ($products as $p): ?>
    <tr>
        <td><?= $p->id ?></td>
        <td><?= htmlspecialchars($p->name) ?></td>
        <td>Rp <?= number_format($p->price, 0, ',', '.') ?></td>
        <td><?= $p->created_at ?></td>
    </tr>
    <?php endforeach; ?>
</table>
</body> </html> ```