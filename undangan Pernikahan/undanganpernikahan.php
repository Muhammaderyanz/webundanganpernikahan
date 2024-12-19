<?php
$namapengantin ="Nanang Supriatna & Ani Ceiin ";
$untuktamu ="Fulan&Fulani";
$story="Kami Pertama Kali Bertemu Di Tol Buntu , Dan Sejak Saat Itu Saya Mulai Mengenal Satu Sama Lain. 
                        Setelah Beberapa Kali Bertemu Dan Mengobrol, kami sadar bahwa cinta tumbuh di antara kami.
                        Hari ini, kami sangat bahagia untuk membagikan kisah ini dengan Anda.";
$tanggal ="10-Desember-2024";
$tamukhususwanita ="Bapak Eryan";
$tamukhususpria = "Ibu Rina";
$tamukhususkeluarga = "Pak Joko";
$namapria ="Nanang Supriatna";
$namawanita ="Ani Ceiin";
$lokasi= "Hotel Santika";
$usiapria= "23Tahun,";
$usiawanita= "24Tahun";
$NomerRekening = "[Nomer Rekening= 72661969]";
$tanggallokasi = "Tanggal & Lokasi";
$orangtuapriapengantin ="Ibu Mempelai pria";
$orangtuawanitapengantin ="Ayah Mempelai Wanita";
$temandekatpengantin ="Teman Keluarga Dekat";
$tulispesanpengantin ="Tulis Pesan untuk Pengantin";
$ucapanmakasih ="Terima kasih atas kedatangan dan Menyempatkan waktunya. Kami sangat menghargainya!";
$profilpengantin ="Profil Pengantin";
$quotes ="Quotes";
$gambargalery1="nikah.jpg";
$gambargalery2="oke.jpg";
$gambargalery3= "pengantin.jpg";
$vidiogallery= "./Assets/-vidio/videoplayback.mp4";
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link rel="stylesheet" href="Assets/-css/styles.css">
</head>
<body>
   
    <header>
        <nav>
            <ul>
                <li><a href="#cover">Home</a></li>
                <li><a href="#quotes">Quotes</a></li>
                <li><a href="#about">Profil Pengantin</a></li>
                <li><a href="#date">Tanggal & Lokasi</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#special-guests">Tamu Khusus</a></li>
                <li><a href="#rsvp">RSVP</a></li>
                <li><a href="#gifts">Kirim Hadiah</a></li>
                <li><a href="#pesan-pengantin">Pesan untuk Pengantin</a></li>
                <li><a href="#story">Story</a></li>
            </ul>
        </nav>
    </header>

   
     
    

    <!-- Cover Section -->
     <div id="section-1">
         
    <div id="cover" class="cover">
        <div class="cover-content">
            <h1>Undangan Pernikahan</h1>
            <img class="post-tl" src="./Assets/-img/pinggiran.png"> 
            <h2> <?php echo $namapengantin ?></h2>
            <h3><?php echo $untuktamu ?></h3>
            <button onclick="window.location.href='#about'" class="cover-button">Buka Undangan</button>
        </div>
        </div>
    </div>

    
    <hr color="green">

    <section class="story">
        <div id="story">
        <div class="container">
            <h2>Our Story</h2>
            <div class="story-content">
                <div class="story-text">
                    <p>
                         <?php echo $story ?>
                    </p>
                </div>
                <div class="story-image">
                    <img src="./Assets/-img/pengantin-img.jpeg" alt="Pengantin">
                </div>
            </div>
        </div>
    </section>
</div>

    <hr color="green">

    <!-- Quotes Section -->
    <div id="section-2">
    <section id="quotes">
        <h2><?php echo $quotes ?></h2>
        <blockquote>
            <p class="arabic-quote">“وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُمْ مِنْ أَنفُسِكُمْ أَزْوَاجًا لِتَسْكُنُوا إِلَيْهَا”</p>
            <p>Dan di antara tanda-tanda kekuasaan-Nya ialah Dia menciptakan untukmu isteri-isteri dari jenismu sendiri, supaya kamu cenderung dan merasa tenteram kepadanya, dan dijadikan-Nya diantaramu rasa kasih dan sayang. Sesungguhnya pada yang demikian itu benar-benar terdapat tanda-tanda bagi kaum yang berfikir.</p>
            <footer>- Surat Ar-Rum 30:21</footer>
            <audio controls loop>
                <source src="../undangan Pernikahan/Assets/-audio/audio.mpeg" type="audio/mpeg">
                Audio tidak dapat diputar
            </audio>
        </blockquote>
    </section>
    </div>

    <hr color="green">

    <!-- Profil Pengantin Section -->
   <div id="section-3">
    <section id="about">
        <h2><?php echo $profilpengantin ?></h2>
        <div class="profil-pengantin">
            <img src="../undangan Pernikahan/Assets/-img/pengantin.jpg" alt="Profil Nanang" class="pengantin-img">
            <div>
               <b><p class="tulisan"><?php echo $namapria ?>, <?php echo $usiapria ?>  <p><a href="https://instagram.com/erwin_yani244" target="_blank"><img src="./Assets/-img/ig.webp" width="40" height="40"></a></b>
                <b><p class="tulisan"><?php echo $namawanita ?>, <?php echo $usiawanita ?>  <p><a href="https://instagram.com/erwin_yani244" target="_blank"><img src="Assets/-img/ig.webp" width="40" height="40" ></a></b>
                    
                </div>
            </div>
        </div>
    </section>

    <hr color="green">

    <!-- Tanggal & Lokasi Section -->
     <div id="section-4">
    <section id="date">
        <h2><?php echo $tanggallokasi ?></h2>
        <p>Akad: <?php echo $tanggal ?> </p>
        <p>Resepsi: <?php echo $lokasi ?> </p>
      <p> <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63460.1864009231!2d106.9205749518305!3d-6.229195102337329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698c3a996f3b5d%3A0x66c176db22e380fa!2sHotel%20Santika%20Mega%20City%20Bekasi!5e0!3m2!1sid!2sid!4v1728107964479!5m2!1sid!2sid"
        target="-blank"><img src="./Assets/-img/gmaps.png" width="110" height="40" alt=""></a></p>
    </div>
    </section>

    <hr color="green">

    <!-- Gallery Section -->
     <div id="section-5">
    <section id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-container">
            <img src= "../undangan Pernikahan/Assets/-img/<?php echo $gambargalery1 ?>" alt="Gambar Pernikahan 1">
            <img src= "../undangan Pernikahan/Assets/-img/<?php echo $gambargalery2 ?>" alt="Gambar Pernikahan 2">
            <img src= "../undangan Pernikahan/Assets/-img/<?php echo $gambargalery3 ?>" alt="Gambar Pernikahan 3">
            <video controls>
                <source  src= <?php echo $vidiogallery ?> type="video/mp4">
                Video tidak dapat diputar
            </video>
        </div>
        </div>
    </section>

    <hr color="green">

    <!-- Tamu Khusus Section -->
    <div id="section-6">
    <section id="special-guests">
        <h2>Tamu Khusus</h2>
        <table class="guest-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Relation</th>
                    <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $tamukhususwanita ?> </td>
                    <td><?php echo $orangtuawanitapengantin ?> </td>
                    <td>Kami Harap Anda Hadir Di Acara Ini</td>
                </tr>
                <tr>
                    <td><?php echo $tamukhususpria ?></td>
                    <td><?php echo $orangtuapriapengantin ?></td>
                    <td>Semoga Anda Bahagia Setiap Hari</td>
                </tr>
                <tr> 
                    <td><?php echo $tamukhususkeluarga ?></td>
                    <td><?php echo $temandekatpengantin ?></td>
                    <td>kami harap anda dapat hadir.</td>
                </tr>
            </tbody>
        </table>
    </section>
    </div>

    <hr color="green">

    <!-- RSVP Section -->
     <div id="section-7">
    <section id="rsvp">
        <h2>RSVP</h2>
        <form>
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="attending">Apakah Anda akan hadir?</label>
            <div>
                <label><input type="radio" name="attendance" value="yes" required> Ya</label>
                <label><input type="radio" name="attendance" value="no"> Tidak</label>
            </div>

            <label for="guests">Jumlah Tamu</label>
            <input type="number" id="guests" name="guests" min="1" value="1">

            <label for="message">Pesan untuk Pengantin</label>
            <textarea id="message" name="message" rows="4" placeholder="Tuliskan pesan Anda"></textarea>

            <button type="submit">Kirim</button>
        </form>
    </section>
    </div>

    <hr color="green">

    <!-- Kirim Hadiah Section -->
    <div id="section-8">
    <section id="gifts">
        <h2>Kirim Hadiah</h2>
        <p>Transfer & Kado</p>
        <img src="./Assets/-img/scan.jpeg" alt="Kirim Hadiah" class="gift-img">
        <p>Silakan kirim hadiah Anda Ke Rekening : <?php echo $NomerRekening ?> </p>
    </section> 
</div>

    <hr color="green">

    <!-- Pesan untuk Pengantin Section -->
    <div id="pesan-pengantin">
    <div class="pesan-pengantin">
        <h2><?php echo $tulispesanpengantin ?></h2>
        <form>
            <label for="pesan">Pesan Anda:</label>
            <textarea id="pesan" name="pesan" rows="6" placeholder="Tulis pesan Anda di sini..."></textarea>
            
            <label for="pengirim">Nama Pengirim:</label>
            <input type="text" id="pengirim" name="pengirim" placeholder="Nama Anda">
            
            <button type="submit">Kirim Pesan</button>
        </form>
    </div>
</div>

    <hr color="green">

    <!-- Ucapan Terima Kasih Section -->
    <section>
        <h2>Ucapan Terima Kasih</h2>
        <p><?php echo $ucapanmakasih ?> </p>
    </section>
</p>
<div id="kotak-musik">

    <audio  id ="lagu">
     <source src="./Assets/-audio/wedding-172018.mp3">
     
    </audio> 


    <div id="tombol-musik" onclick="putarLagu()">
     <img id="kontrol"  src="./Assets/-img/—Pngtree—mute icon isolated on abstract_5068446.png">

 </div>
</body>
</html>

<script src="./Assets/-js/undangan.js"></script>