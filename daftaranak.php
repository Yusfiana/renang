<html>
 <head>
  <title>
   Swimming Lessons
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
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
        .container {
            padding: 20px;
        }
        .card {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
        }
        .card img {
            max-width: 1000%;
            height: auto;
        }
        .card-content {
            flex: 1;
            padding: 20px;
        }
        .card-content h2 {
            margin-top: 0;
        }
        .card-content p {
            margin: 10px 0;
        }
        .card-content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .card-content table, .card-content th, .card-content td {
            border: 1px solid #ccc;
        }
        .card-content th, .card-content td {
            padding: 10px;
            text-align: left;
        }
        .card-content .buttons {
            display: flex;
            gap: 10px;
        }
        .card-content .buttons button {
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        .card-content .buttons button:first-child {
            background-color: #ccc;
        }
        .card-content .buttons button:last-child {
            background-color: #3b5998;
            color: white;
        }
        .footer {
            background-color: #f1f1f1;
            padding: 20px;
            text-align: center;
        }
        .footer img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }
        .footer .contact-info {
            margin-top: 10px;
        }
        .footer .contact-info p {
            margin: 5px 0;
        }
        .footer .contact-info a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #3b5998;
            color: white;
            text-decoration: none;
        }
        @media (max-width: 768px) {
            .card {
                flex-direction: column;
            }
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
 <header class="header">
        <div class="logo">SwimNew🥽</div>
        <nav>
            <a href="menu.php">HOME</a>
            <a href="daftaranak.php">DAFTAR</a>
            <a href="jadwal.php">JADWAL</a>
            <a href="lokasi.php">LOKASI</a>
            <a class="cta" href="login.php">Log in</a>
        </nav>
        
    </header>
  <div class="container">
   <div class="card">
    <img alt="Image of private swimming lessons" height="150" src="https://storage.googleapis.com/a1aa/image/C4byahaHXJ67JhQDqSgtnrRqMbvXtm9dfEFFdYPudKgbOf6TA.jpg" width="500"/>
    <div class="card-content">
     <h2>
      Les Renang Privat
     </h2>
     <p>
     Les renang private adalah jenis pelatihan renang yang dilakukan secara personal, di mana seorang pelatih renang memberikan perhatian dan instruksi langsung kepada satu siswa atau kelompok kecil, biasanya terdiri dari 2–3 orang. Dalam les renang private, metode pengajaran dan latihan dapat disesuaikan dengan kebutuhan, kemampuan, dan tujuan siswa
     </p>
     <table>
      <tr>
       <th>
        Jenis Program
       </th>
       <td>
        Les Privat
       </td>
      </tr>
      <tr>
       <th>
        Harga
       </th>
       <td>
        3.500.000
       </td>
      </tr>
      <tr>
       <th>
        Sesi
       </th>
       <td>
        1 Jam x 5xSemalam
       </td>
      </tr>
      <tr>
       <th>
        Waktu/Kurikulum
       </th>
       <td>
        Pilihan Terbaik
       </td>
      </tr>
      <tr>
       <th>
        Jadwal
       </th>
       <td>
        Fleksibel
       </td>
      </tr>
     </table>
     <div class="buttons">

      <button class="btn daftar">
      <a href="login.php">Daftar</a>
      </button>
     </div>
    </div>
   </div>
   <div class="card">
    <img alt="Image of group swimming lessons" height="150" src="https://storage.googleapis.com/a1aa/image/W8mfz9TSg4VpSqRua6Kzdt6hCFjD6fyC1WUwYSU0oWc1ce1nA.jpg" width="500"/>
    <div class="card-content">
     <h2>
      Les Renang Kelompok
     </h2>
     <p>
     Les renang kelompok adalah pelatihan renang yang dilakukan secara bersama-sama dalam kelompok yang terdiri dari beberapa siswa, biasanya sekitar 5–15 orang per sesi, tergantung kapasitas kolam renang dan jumlah pelatih yang tersedia. Pelatihan ini umumnya cocok untuk berbagai usia dan tingkatan kemampuan, mulai dari pemula hingga lanjutan
     </p>
     <table>
      <tr>
       <th>
        Jenis Program
       </th>
       <td>
        Les Kelompok
       </td>
      </tr>
      <tr>
       <th>
        Harga
       </th>
       <td>
        2.500.000
       </td>
      </tr>
      <tr>
       <th>
        Sesi
       </th>
       <td>
        1 Jam x 5xSemalam
       </td>
      </tr>
      <tr>
       <th>
        Waktu/Kurikulum
       </th>
       <td>
        Pilihan Terbaik
       </td>
      </tr>
      <tr>
       <th>
        Jadwal
       </th>
       <td>
        Fleksibel
       </td>
      </tr>
     </table>
     <div class="buttons">

     <button class="btn daftar">
     <a href="login.php">Daftar</a>
     </div>
    </div>
   </div>
  </div>
  <footer class="footer">
   <img alt="Profile picture of the contact person" height="50" src="https://storage.googleapis.com/a1aa/image/8waHKu9iSEJ8EFmIrhByxhD9XaqJ89KEZnw3TQGWNwvNnveJA.jpg" width="50"/>
   <div class="contact-info">
    <p>
     Email: lesrenang@gmail.com
    </p>
    <p>
     Alamat: Jl. Dewi, Kalibokor, Wonoseco
    </p>
    <a href="#">
     Hubungi Kami
    </a>
   </div>
  </footer>
 </body>
</html>
