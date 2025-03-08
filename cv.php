<?php 
session_start();

if(!isset($_SESSION['email'])){
    header('Location: index.php');
    exit;
}

if (isset($_SESSION['cv'])){
    $cv = $_SESSION['cv'];
} else {
    echo "CV belum tersedia.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Anda</title>
    <style>
        /* Reset margin dan padding untuk seluruh halaman */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Background halaman */
        body {
            font-family: 'Arial', sans-serif;
            background : linear-gradient(135deg,rgb(241, 234, 232),rgb(44, 88, 174));
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Container utama untuk CV */
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 800px;
            text-align: left;
        }

        /* Header */
        h2 {
            font-size: 30px;
            color: #304FFE;
            text-align: center;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Styling untuk bagian Data Pribadi, Pendidikan, Organisasi, Keahlian */
        h3 {
            font-size: 20px;
            color: #304FFE;
            font-weight: bold;
            margin-bottom: 10px;
        }

        /* Desain untuk setiap bagian (Data Pribadi, Pendidikan, dll) */
        .section {
            margin-bottom: 30px;
        }

        .section ul {
            list-style: none;
        }

        .section ul li {
            margin-bottom: 10px;
            font-size: 16px;
        }

        /* Icon berbentuk lingkaran untuk bagian Data Pribadi, Pendidikan, dll */
        .section .icon {
            display: inline-block;
            width: 30px;
            height: 30px;
            background-color: #FEBF44;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-right: 15px;
            font-size: 18px;
        }

        /* Styling untuk text yang berada di dalam section */
        .section p {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
        }

        /* Section Border */
        .section {
            border-left: 4px solid #304FFE;
            padding-left: 15px;
        }

        /* Bagian bawah CV */
        footer {
            text-align: center;
            margin-top: 30px;
            font-size: 14px;
            color: #aaa;
        }

        /* Responsif untuk tampilan layar kecil */
        @media (max-width: 600px) {
            .container {
                padding: 20px;
            }

            h2 {
                font-size: 24px;
            }

            .section {
                margin-bottom: 20px;
            }

            .section ul li {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Curriculum Vitae</h2>
        
        <!-- Data Pribadi -->
        <div class="section">
            <h3>Data Pribadi</h3>
            <ul>
                <li><span class="icon">📧</span><strong>Email:</strong> <?php echo $_SESSION['email']; ?></li>
                <li><span class="icon">👤</span><strong>Nama:</strong> <?php echo $cv['nama']; ?></li>
                <li><span class="icon">📅</span><strong>Tanggal Lahir:</strong> <?php echo $cv['tanggal_lahir']; ?></li>
                <li><span class="icon">🏠</span><strong>Tempat Lahir:</strong> <?php echo $cv['tempat_lahir']; ?></li>
            </ul>
        </div>

        <!-- Pendidikan -->
        <div class="section">
            <h3>Pendidikan</h3>
            <ul>
                <li><span class="icon">🎓</span><strong>Riwayat Pendidikan:</strong> <?php echo $cv['pendidikan']; ?></li>
            </ul>
        </div>


        <!-- Footer -->
        <footer>
            <p>CV</p>
        </footer>
    </div>
</body>
</html>
