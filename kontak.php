<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kirim Pesan - Formspree</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            width: 100%;
            max-width: 400px;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }
        input, textarea, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background: #007BFF;
            color: #fff;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Kirim Pesan</h1>
        <form action="https://formspree.io/f/xbljvgav" method="POST" target="_blank">
            <form id="contactForm" action="https://formspree.io/f/xbljvgav" method="POST">
    <input type="text" name="name" placeholder="Nama Anda" required>
    <input type="email" name="email" placeholder="Email Anda" required>
    <textarea name="message" placeholder="Tulis pesan Anda di sini..." rows="5" required></textarea>
    <button type="submit">Kirim Pesan</button>
</form>

<script>
    const form = document.getElementById('contactForm');
    form.addEventListener('submit', function (e) {
        e.preventDefault();
        const formData = new FormData(form);
        fetch(form.action, {
            method: form.method,
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                alert("Pesan berhasil dikirim!");
                form.reset();
            } else {
                alert("Terjadi kesalahan. Silakan coba lagi.");
            }
        }).catch(error => {
            alert("Terjadi masalah jaringan. Silakan coba lagi.");
        });
    });
</script>

