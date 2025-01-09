<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
                body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color:rgb(225, 225, 225);
        }
                .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #12448e;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            
        }
        .header .logo {
            font-size: 1.5em;
            font-weight: bold;
        }
        .header nav {
            display: flex;
            gap: 25px;
        }
        .header nav a {
            text-decoration: none;
            color: white;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            transition: color 0.3s;
            font-size: 1em;
            padding: 10px 20px; 
            
        }
        .header nav a:hover {
        background-color:rgb(13, 48, 100); /* Change this color on hover */
    color: #fff; /* Change text color on hover */
    border-color: #6c757d; /* Change border color on hover */
    
    border-radius: 5px;
        }
        .header nav a:hover {
            color: #63c5da;
        }
        .header .cta {
            padding: 8px 15px;
            background-color: #FFFF;
            color: #12448e;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        .header .cta:hover {
            background-color: white;
            color: #63c5da;
        }
        
    </style>
</head>
<body>
    <header>
    <header class="header">
        <div class="logo">SwimNew🥽</div>
        <nav>
            <a href="menu.php">HOME</a>
            <a href="daftaranak.php">DAFTAR</a>
            <a href="jadwal.php">JADWAL</a>
            <a href="lokasi.php">LOKASI</a>
            <a class="cta" href="login.php">Log In</a>
        </nav>
        
    </header>
    </header>
    <div class="lokasi-1">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d771.0517276471408!2d109.89870049312367!3d-7.350008539751518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa15206330021%3A0x928e99d4d2f3bf66!2sGelanggang%20Renang%20Mangli!5e1!3m2!1sid!2sid!4v1734229826026!5m2!1sid!2sid" width="100%" height="1000" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</body>
</html>