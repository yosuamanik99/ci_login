<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(!empty($error)): ?>
        <div style="color:red;"><?= $error ?></div>
    <?php endif; ?>
    <?php if($this->session->flashdata('success')): ?>
        <div style="color:green;"><?= $this->session->flashdata('success') ?></div>
    <?php endif; ?>

    <form method="POST" action="<?= site_url('auth/login_process') ?>">
        <label>Username:</label><br>
        <input type="text" name="username" required><br><br>

        <label>Password:</label><br>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p>Belum punya akun? <a href="<?= site_url('auth/register') ?>">Register di sini</a></p>
</body>
</html>
