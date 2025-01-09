<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SwimNew - Your Swimming Training Partner</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: rgb(225, 225, 225);
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
            background-color: rgb(13, 48, 100);
            color: #63c5da;
            border-radius: 5px;
        }
        .header .cta {
            padding: 8px 15px;
            background-color: white;
            color: #12448e;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        .header .cta:hover {
            background-color: #12448e;
            color: white;
        }
        .carousel {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            overflow: hidden;
            border-radius: 10px;
        }
        .carousel-inner {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .carousel-item {
            min-width: 100%;
            height: 400px;
            position: relative;
        }
        .carousel-text {
    position: absolute;
    bottom: 10%;
    left: -100%; /* Start off-screen */
    font-size: 2em;
    color: white;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
    padding: 10px 20px;
    border-radius: 10px;
    animation: slideIn 5s infinite; /* Animates continuously */
    white-space: nowrap; /* Prevents text from wrapping */
}
@keyframes slideIn {
    0% {
        left: -100%; /* Start off-screen */
    }
    50% {
        left: 10%; /* Fully visible */
    }
    100% {
        left: 110%; /* Move off-screen */
    }
}
        .carousel-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .carousel-controls {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .carousel-controls button {
            background: rgba(0, 0, 0, 0.5);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }
        .about {
            text-align: center;
            padding: 20px;
            background: #fff;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .about img {
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .about h2 {
            margin-bottom: 10px;
            color: #12448e;
        }
        .about p {
            margin-bottom: 10px;
        }
        .about .btn {
            display: inline-block;
            padding: 10px 20px;
            color: #12448e;
            text-decoration: none;
            border: 1px solid #12448e;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }
        .about .btn:hover {
            background-color: #12448e;
            color: white;
        }
        footer {
            background-color: #12448e;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
        footer a {
            color: #63c5da;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <!-- Header -->
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

    <!-- Carousel -->
    <div class="carousel">
    <div class="carousel-inner">
        <div class="carousel-item">
            <img src="image/SIMPLE.jpg" alt="Slide 1">
            <div class="carousel-text">Welcome to SwimNew!</div>
        </div>
        <div class="carousel-item">
            <img src="image/swimmer.jpg" alt="Slide 2">
            <div class="carousel-text">Train with the Best</div>
        </div>
        <div class="carousel-item">
            <img src="image/images.jpg" alt="Slide 3">
            <div class="carousel-text">Achieve Your Goals</div>
        </div>
    </div>
    <div class="carousel-controls">
        <button id="prevBtn">&#10094;</button>
        <button id="nextBtn">&#10095;</button>
    </div>
</div>

    <!-- About Section -->
    <section class="about">
        <img src="image/amba.jpg" alt="Mas Amba" width="150" height="150">
        <h2>Mas Amba</h2>
        <p>Founder of SwimNew</p>
        <a href="https://sameleiren.fandom.com/wiki/Dreamybull" class="btn">View Details &raquo;</a>
    </section>

    <section class="about">
        <img src="image/gibran-24.jpg" alt="Mas Fafa" width="150" height="150">
        <h2>Mas Fafa</h2>
        <p>CEO of SwimNew</p>
        <a href="https://id.wikipedia.org/wiki/Gibran_Rakabuming_Raka" class="btn">View Details &raquo;</a>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 SwimNew. All rights reserved. <a href="#">Privacy Policy</a></p>
    </footer>

    <script>
        const carouselInner = document.querySelector('.carousel-inner');
        const carouselItems = document.querySelectorAll('.carousel-item');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');

        let currentSlide = 0;

        function updateCarousel() {
            const offset = -currentSlide * 100;
            carouselInner.style.transform = `translateX(${offset}%)`;
        }

        prevBtn.addEventListener('click', () => {
            currentSlide = (currentSlide > 0) ? currentSlide - 1 : carouselItems.length - 1;
            updateCarousel();
        });

        nextBtn.addEventListener('click', () => {
            currentSlide = (currentSlide < carouselItems.length - 1) ? currentSlide + 1 : 0;
            updateCarousel();
        });

        setInterval(() => {
            currentSlide = (currentSlide < carouselItems.length - 1) ? currentSlide + 1 : 0;
            updateCarousel();
        }, 3500);
    </script>
</body>
</html>
