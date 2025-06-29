# Sistem Login CI - Tugas Kuliah

## Cara Setup Database
1. Buka phpMyAdmin di http://localhost/phpmyadmin
2. Buat database baru dengan nama `ci_login`
3. Import file `ci_login.sql` (file backup database yang kamu punya)
4. Pastikan tabel `users` sudah ada dan berisi data user

## Cara Jalankan Aplikasi
1. Pastikan XAMPP sudah running (Apache dan MySQL aktif)
2. Tempatkan folder `ci_login` di `C:\xampp\htdocs\`
3. Buka browser, akses http://localhost/ci_login/auth
4. Masukkan username dan password untuk login

## Username & Password Default
- Username: admin  
- Password: admin123

## Catatan
- Pastikan konfigurasi database di `application/config/database.php` sudah sesuai dengan username dan password MySQL kamu.
- Jika ada masalah login, cek kembali database dan password hash.

---

**Terima kasih!**
