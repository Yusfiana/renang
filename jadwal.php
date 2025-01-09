<html>
 <head>
  <title>
   Schedule
  </title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <style>
   body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            border: 1px solid #000;
            padding: 10px;
        }
        .row {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #000;
            padding: 10px 0;
        }
        .row:last-child {
            border-bottom: none;
        }
        .image {
            flex: 1;
            text-align: center;
        }
        .image img {
            max-width: 100px;
            height: auto;
        }
        .details {
            flex: 3;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .details h3 {
            margin: 0;
            text-align: center;
        }
        .schedule {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
        }
        .schedule div {
            flex: 1;
            text-align: center;
            border: 1px solid #000;
            padding: 10px;
        }
        @media (max-width: 768px) {
            .row {
                flex-direction: column;
            }
            .schedule {
                flex-direction: column;
            }
            .schedule div {
                margin-bottom: 10px;
            }
            .schedule div:last-child {
                margin-bottom: 0;
            }
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
 <header class="header">
        <div class="logo">SwimNew🥽</div>
        <nav>
            <a href="menu.php">HOME</a>
            <a href="daftaranak.php">DAFTAR</a>
            <a href="jadwal.php">JADWAL</a>
            <a href="lokasi.php">LOKASI</a>
            <a class="cta" href="l.php">Log in</a>
        </nav>
        
    </header>
  <div class="container">
   <div class="row">
    <div class="image">
     <img alt="Image of a person wearing a white t-shirt with a red V logo" height="100" src="https://storage.googleapis.com/a1aa/image/42zfa1SIuAVmCayr106oISqoheVF0ULMRrRVZvlgpRTfY91nA.jpg" width="100"/>
    </div>
    <div class="details">
     <h3>
      Les Private: Mas Fuad
     </h3>
     <div class="schedule">
      <div>
       <strong>
        Senin
       </strong>
       <br/>
       Mulai: 08.00 - 10.00
       <br/>
       Lokasi: Mangkli kolam nomer 1
      </div>
      <div>
       <strong>
        Rabu
       </strong>
       <br/>
       Mulai: 13.00 - 16.00
       <br/>
       Lokasi: Mangkli kolam nomer 2
      </div>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="image">
     <img alt="Image of a person wearing a black suit and bow tie" height="100" src="https://storage.googleapis.com/a1aa/image/Vg0PkPHS965sFJJTFwAhvhTqpTZYPj2Uil1e4B3tbqfgse1nA.jpg" width="100"/>
    </div>
    <div class="details">
     <h3>
      Les Private: Mas Amba
     </h3>
     <div class="schedule">
      <div>
       <strong>
        Selasa
       </strong>
       <br/>
       Mulai: 08.00 - 10.00
       <br/>
       Lokasi: Mangkli kolam nomer 1
      </div>
      <div>
       <strong>
        Kamis
       </strong>
       <br/>
       Mulai: 13.00 - 16.00
       <br/>
       Lokasi: Mangkli kolam nomer 2
      </div>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="image">
     <img alt="Image of a person wearing a blue cap with a KC logo" height="100" src="https://storage.googleapis.com/a1aa/image/zvZnEvMxPe0cVCpzWGna78TVtj4GZStb7nuG6JeZWGxjse1nA.jpg" width="100"/>
    </div>
    <div class="details">
     <h3>
      Les Kelompok: Mas Rusdi
     </h3>
     <div class="schedule">
      <div>
       <strong>
        Jumat
       </strong>
       <br/>
       Mulai: 08.00 - 10.00
       <br/>
       Lokasi: Mangkli kolam nomer 1
      </div>
      <div>
       <strong>
        Minggu
       </strong>
       <br/>
       Mulai: 13.00 - 16.00
       <br/>
       Lokasi: Mangkli kolam nomer 2
      </div>
     </div>
    </div>
   </div>
   <div class="row">
    <div class="image">
     <img alt="Image of a person wearing a dark shirt" height="100" src="https://storage.googleapis.com/a1aa/image/cvYQcSnArjbrEhZ2BZGdFRUBC07etxobfiN7pgoQly8hse1nA.jpg" width="100"/>
    </div>
    <div class="details">
     <h3>
      Les Kelompok: Mas Fafa
     </h3>
     <div class="schedule">
      <div>
       <strong>
        Sabtu
       </strong>
       <br/>
       Mulai: 08.00 - 10.00
       <br/>
       Lokasi: Mangkli kolam nomer 2
      </div>
      <div>
       <strong>
        Minggu
       </strong>
       <br/>
       Mulai: 13.00 - 16.00
       <br/>
       Lokasi: Mangkli kolam nomer 1
      </div>
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
