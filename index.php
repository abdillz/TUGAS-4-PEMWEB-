<?php 
session_start();

// Proses login saat form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password']; 

    // Validasi domain email (password harus sesuai dengan domain email)
    $emailDomain = substr(strrchr($email, "@"), 1);  // Mendapatkan domain email
    if ($password == $emailDomain) {  // Membandingkan password dengan domain email
        $_SESSION['email'] = $email;  // Menyimpan email di sesi
        header("Location: form.php");  // Redirect ke form jika login sukses
        exit();
    } else {
        $error = "Password tidak sesuai dengan domain email.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: linear-gradient(45deg,rgb(229, 224, 234), #2575fc);
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }


        h2 {
            font-size: 30px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Form input */
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 15px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }

        /* Fokus input ketika diklik */
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #2575fc;
        }

        /* Tombol Submit */
        button {
            width: 100%;
            padding: 15px;
            background-color: #2575fc;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s;
        }

        /* Hover efek pada tombol */
        button:hover {
            background-color: #6a11cb;
        }

        /* Pesan error */
        .error {
            color: #e74c3c;
            margin-bottom: 15px;
        }

        /* Responsif untuk tampilan layar kecil */
        @media (max-width: 480px) {
            .container {
                padding: 30px;
            }

            h2 {
                font-size: 20px;
            }

            input[type="email"],
            input[type="password"],
            button {
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <!-- Tampilkan pesan error jika ada -->
        <?php if (isset($error)) {
            echo "<p class='error'>$error</p>";
        } ?>
        <!-- Form untuk input email dan password -->
        <form action="index.php" method="post">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br><br>

            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
