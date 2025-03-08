<?php 
session_start();

if(!isset($_SESSION['email'])){
    header('Location : index.php');
    exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$_SESSION['cv'] = [
    'nama' => $_POST['nama'],
    'tanggal_lahir' => $_POST['tanggal_lahir'],
    'tempat_lahir' => $_POST['tempat_lahir'],
    'pendidikan' => $_POST['pendidikan']
];
header ('Location: cv.php');
exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input CV</title>
    <!-- Link ke Google Fonts untuk font keren -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Background halaman */
body {
    background: linear-gradient(135deg,rgb(241, 234, 232),rgb(44, 88, 174));
    font-family: 'Poppins', sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    color: #333;
}

/* Container utama */
.container {
    background: #fff;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 10px 30px rgba(216, 207, 207, 0.1);
    width: 100%;
    max-width: 500px;
    text-align: center;
    margin-top: 20px;
    margin-left: 20px; /* Menambahkan margin kiri untuk memberikan jarak */
    margin-right: 20px; /* Menambahkan margin kanan untuk memberikan jarak */
}

/* Judul */
h2 {
    font-size: 28px;
    margin-bottom: 50px;
    color: #333;
    font-weight: 600;
    margin-right : 50px;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius : 20px;
    background-color :rgb(237, 229, 229)
}

/* Form input */
input[type="text"],
input[type="date"],
textarea {
    width: 100%;
    padding: 15px;
    margin: 12px 0; /* Menambahkan margin antar input */
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
    outline: none;
    transition: 0.3s;
    background-color: #f9f9f9;
}

/* Fokus input ketika diklik */
input[type="text"]:focus,
input[type="date"]:focus,
textarea:focus {
    border-color: #feb47b;
    background-color: #fff;
}

/* Tombol Submit */
button {
    width: 100%;
    padding: 15px;
    background:linear-gradient(135deg,rgb(241, 234, 232),rgb(44, 88, 174));;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

/* Hover efek pada tombol */
button:hover {
    background-color: #ff7e5f;
}

/* Pesan error */
.error {
    color: #e74c3c;
    margin-bottom: 15px;
}

/* Responsif untuk tampilan layar kecil */
@media (max-width: 480px) {
    .container {
        padding: 20px;
    }

    h2 {
        font-size: 22px;
    }

    input[type="text"],
    input[type="date"],
    textarea,
    button {
        padding: 12px;
    }
}
    </style>
</head>
<body>
    <h2>Form Input CV</h2>
    <form method="POST">
    <input type="text" name="nama" placeholder = "Nama" required><br><br>
    <input type="text" name="tempat_lahir" placeholder ="Tempat Lahir" required><br><br>
    <input type="date" name="tanggal_lahir" placeholder="Tanggal Lahir" required><br><br>
    <textarea name="pendidikan" placeholder="Riwayat Pendidikan" required></textarea><br><br>
    <button type="submit">Simpan CV</button>
    </form>
</body>
</html>