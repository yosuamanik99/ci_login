<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <?php if(!empty($error)): ?>
        <div style="color:red;"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="<?= site_url('auth/register_process') ?>">
        <label>Nama Lengkap:</label><br>
        <input type="text" name="fullname" required><br><br>

        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <label>Konfirmasi Password:</label><br>
        <input type="password" name="passconf" required><br><br>

        <button type="submit">Register</button>
    </form>

    <p>Sudah punya akun? <a href="<?= site_url('auth') ?>">Login di sini</a></p>
</body>
</html>
