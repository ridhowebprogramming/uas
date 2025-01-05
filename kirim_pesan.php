<?php
// Tambahkan library PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Autoload PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $pesan = htmlspecialchars($_POST['pesan']);

    if (!$email) {
        die("Email tidak valid!");
    }

    // Konfigurasi PHPMailer
    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'ridhokurnia533@gmail.com'; // Ganti dengan email Anda
        $mail->Password = 'svvb fbgo dlvf smad'; // Ganti dengan password aplikasi Gmail Anda
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        // Email Pengirim & Penerima
        $mail->setFrom('ridhokurnia533@gmail.com', 'Form Malas Ngoding'); // Ganti dengan email Anda
        $mail->addAddress('ridhokurnia533@gmail.com', 'Admin Website'); // Ganti dengan email tujuan
        $mail->addReplyTo($email, $nama);

        // Konten Email
        $mail->isHTML(true);
        $mail->Subject = "Pesan Baru dari $nama";
        $mail->Body    = "
            <h2>Pesan Baru dari Website Malas Ngoding</h2>
            <p><strong>Nama:</strong> $nama</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Pesan:</strong><br>$pesan</p>
        ";
        $mail->AltBody = "Nama: $nama\nEmail: $email\nPesan: $pesan";

        // Kirim Email
        if ($mail->send()) {
            echo "Pesan berhasil dikirim!";
        } else {
            echo "Pesan gagal dikirim. Silakan coba lagi.";
        }
    } catch (Exception $e) {
        echo "Terjadi kesalahan: {$mail->ErrorInfo}";
    }
} else {
    echo "Form tidak valid!";
}
?>
