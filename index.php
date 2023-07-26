
<?php

  @$to = $_GET["to"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:title" content="Ngunduh Mantu : Iqbal & Citra">
    <meta property="og:description" content="Minggu, 06 Agustus 2023">
    <meta property="og:type" content="website">

    <!-- my fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,500&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Explora&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Sacramento&display=swap">

    <!-- father icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Lightbox -->
    <link rel="stylesheet" href="css/lightbox.css">
    <title>Ngunduh Mantu : Iqbal & Citra</title>
    <link rel="shortcut icon" href="images/mylogo.JPG" />
    <!-- toastr -->
    <link rel="stylesheet" href="assets/toastr/toastr.min.css">
    <!-- sweaatalert -->
    <link rel="stylesheet" href="assets/sweetalert2/sweetalert2.min.css">
    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>
  <body>
    
    <!-- popup start -->
    <div id="myPopup" class="popup">
      <div class="popup-container">
        <div class="popup-content">
          <h1 data-aos="zoom-in" data-aos-delay="0" data-aos-duration="2000">Iqbal <span> &</span> Citra</h1>

          <p><font size="4rem" face="Verdana" color="white">Kepada Yth Bapak/Ibu/Saudara/i</font></p>
          <br>
          <p><b><strong><font size="4rem" face="Verdana" color="white"><?php echo @$to;?></font></strong></b></p>
          <br>
          <p><font size="3rem" face="Verdana" color="white">Mohon maaf bila ada kesalahan pada penulisan nama/gelar</font></p>
          <br>
          <button data-aos="fade-up" data-aos-delay="800" class="close"><i data-feather="mail" style="vertical-align: middle; "></i> Buka Undangan</button>
          <audio id="popupAudio" src="audio/utsmansong.mp3"></audio> <!-- Ganti dengan path file audio yang sesuai -->
        </div>
      </div>
    </div>
    <!-- popup end -->

    <!-- my Logo  -->
    <!-- Elemen logo -->
      <div id="logo">
      </div>
    <!-- hero section start -->
    <section class="hero" id="home">
      <div class="slider">
        <img src="images/gallery/8.jpg" alt="" class="slide">
        <img src="images/Popup.jpeg" alt="" class="slide">
        <img src="images/gallery/10.JPG" alt="" class="slide">
      </div>
      <div class="content">
        <h1>Iqbal <span> &</span> Citra</h1>
        <a href="">Save The Date | <span>06 . 08 . 2023</span></a>
        <div class="countdown" id="countdown">
          <div class="waktu">
            <h5 id="days"></h5>
            <p>Days</p>
          </div>
          <div class="waktu">
            <h5 id="hours"></h5>
            <p>Hours</p>
          </div>
          <div class="waktu">
            <h5 id="minutes"></h5>
            <p>Minutes</p>
          </div>
          <div class="waktu">
            <h5 id="seconds"></h5>
            <p>Seconds</p>
          </div>
        </div>
      </div>
    </section>
    <!-- hero section end -->

    <!-- section quran start -->
    <section class="quran" id="quran">
      <div class="row">
        <div class="quran-img" data-aos="zoom-in" data-aos-duration="2000">
          <img src="images/quran.png" alt="quran" />
        </div>
        <div class="content">
          <h3 data-aos="fade-up" data-aos-delay="700" data-aos-duration="2000">QS Ar-rum 21</h3>
          <p data-aos="fade-up" data-aos-delay="1000" data-aos-duration="2000">"Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dan jenismu sendiri, agar kamu cenderung dan merasa tentram kepadanya, dan dia menjadikan di antaranya rasa kasih dan sayang"</p>
        </div>
      </div>
    </section>
    <!-- section quran end -->

    <!-- section about start -->
    <section class="about" id="about">
      <div class="row">
        <div class="about-img" data-aos="zoom-in-up">
          <img src="images/yunus.jpg" alt="about" />
        </div>
        <div class="content">
          <h3 data-aos="fade-up" >Iqbal Yunus</h3>
          <p data-aos="fade-up" data-aos-delay="300"  >Putra ke-2 Dari :</p>
          <span data-aos="fade-up" data-aos-delay="300" >Bapak Yulius Zamrani dan Ibu Remasih.</span>
          <a href="https://www.instagram.com/Balee.yns" data-aos="fade-up" data-aos-duration="2000" target="_blank" class="cba"><i data-feather="instagram" style="vertical-align: middle"></i> INSTAGRAM</a>
        </div>
      </div>
    </section>
    <!-- section about end -->

    <!-- section about2 start -->
    <section class="about2" id="about2">
      <div class="row">
        <div class="about2-img" data-aos="zoom-in-up">
          <img src="images/citra.jpg" alt="about2" />
        </div>
        <div class="content">
          <h3 data-aos="fade-up">Citra Siti Aisyah</h3>
          <p data-aos="fade-up" data-aos-delay="300">Putri ke-3 dari :</p>
          <span data-aos="fade-up" data-aos-delay="300">Bapak Sugeng Arianto dan Ibu Inah Rostinah</span>
          <a href="https://www.instagram.com/Citrasitiaisyah" data-aos="fade-up" data-aos-duration="2000" target="_blank" class="cba"><i data-feather="instagram" style="vertical-align: middle"></i> INSTAGRAM</a>
        </div>
      </div>
    </section>
    <!-- section about2 end -->

    <!-- section Story start -->
    <section class="story" id="story">
      <h2 data-aos="zoom-in" >Our Love Story</h2>

      <div class="part">
        <h3 data-aos="fade-up">28 Maret 2021</h3>
        <img src="images/ourstory/28maret2021.jpeg" width="250px" />
        <p >
          Kita firstmeet untuk pertama kalinya disebuah tempat kuliner didaerah Galaxy Bekasi. 
        </p>
      </div>

      <div class="part">
        <h3 data-aos="fade-up">29 Januari 2023</h3>
        <img src="images/ourstory/29januari2023.jpg" width="250px" />
        <p >Kami memutuskan untuk benar-benar serius untuk ke jenjang selanjutnya. Dan akhirnya, pada tanggal 29 Januari 2023 dimana kami mempertemukan 2 keluarga di acara lamaran kami.</p>
      </div>

      <div class="part">
        <h3 data-aos="fade-up">30 Juli 2023</h3>
        <img src="images/ourstory/30juli2023.jpg" width="250px" />
        <p >Hal paling bahagia telah kami laksanakan, yaitu hari pernikahan kami. Semoga Allah SWT. Memberikan keberkahan pernikahan ini. "AMIN"</p>
      </div>

      <div class="part">
        <h3 data-aos="fade-up">06 Agustus 2023</h3>
        <img src="images/gallery/9.JPG" width="250px" />
        <p >Insya Allah, kita akan melaksanakan acara ngunduh mantu tepatnya 06 Agustus 2023</p>
      </div>

    </section>
    <!-- section Story end -->

    <section class="bg-event">
      <main class="event" id="date">
        <h2 data-aos="fade-right"><span>Event Date</span></h2>
  
        <div class="card" data-aos="fade-up-right" data-aos-delay="1000" data-aos-duration="1000">
          <div class="box-img">
            <div class="slider-img">
              <img src="images/event/event.jpg" alt="" class="event-img" />
              <img src="images/event/event1.jpeg" alt="" class="event-img" />
              <img src="images/event/event2.JPG" alt="" class="event-img" />
              
            </div>
          </div>
          <div class="box-date">
            <div class="title-event">
              <h3>NGUNDUH MANTU </h3>
            </div>
            <div class="date-event"> 
              <div class="tgl">
                <h4>06</h4>
              </div>
              <div class="detail">
                <h5>MINGGU</h5>
                <h5>AGUSTUS</h5>
                <h5>2023</h5>
              </div>

              <div class="jam">
                <p><i data-feather="clock" style="color: #000;"></i> 09.00 WIB </p>
                <div class="lokasi">
                  <h5>Lokasi Acara</h5><h1> Mempelai Pria</h1>
                  <p>Jalan Dewi Sartika, Gg Rambutan ll RT 001/RW 007 No.41, Kelurahan Margahayu, Kecamatan Bekasi Timur</p>
                  <a href="https://www.google.com/maps?q=-6.24670490346433,107.0072865486145&z=17&hl=id" target="_blank" class="cbt">Google Maps</a>
               </div>
              </div>
           </div>
        </div>
      </main>

    </section>
    <!-- end Event Section-->

    <!-- Start Galley Section -->
     <div class="bg-gallery">
      <section class="gallery" id="gallery">
        <h2 data-aos="fade-right">Gallery Our Moment</h2>

        <div class="container">
          <div class="img-gallery">
            <a href="images/gallery/1.jpeg" data-lightbox="models" data-title="Caption1">
              <img src="images/gallery/1.jpeg" alt="" class="img">
            </a>
            <a href="images/gallery/2.jpeg" data-lightbox="models" data-title="Caption2">
              <img src="images/gallery/2.jpeg" alt="" class="img">
            </a>
            <a href="images/gallery/3.jpeg" data-lightbox="models" data-title="Caption3">
              <img src="images/gallery/3.jpeg" alt="" class="img">
            </a>
            <a href="images/gallery/4.jpeg" data-lightbox="models" data-title="Caption4">
              <img src="images/gallery/4.jpeg" alt="" class="img">
            </a>
            <a href="images/gallery/5.jpeg" data-lightbox="models" data-title="Caption4">
              <img src="images/gallery/5.jpeg" alt="" class="img">
            </a>
            <a href="images/gallery/6.jpg" data-lightbox="models" data-title="Caption6">
              <img src="images/gallery/6.jpg" alt="" class="img">
            </a>
            <a href="images/gallery/7.jpg" data-lightbox="models" data-title="Caption7">
              <img src="images/gallery/7.jpg" alt="" class="img">
            </a>
            <a href="images/gallery/8.jpg" data-lightbox="models" data-title="Caption8">
              <img src="images/gallery/8.jpg" alt="" class="img">
            </a>
            <a href="images/gallery/9.JPG" data-lightbox="models" data-title="Caption9">
              <img src="images/gallery/9.JPG" alt="" class="img">
            </a>
            <a href="images/gallery/10.JPG" data-lightbox="models" data-title="Caption10">
              <img src="images/gallery/10.JPG" alt="" class="img">
            </a>
        
          </div>
        </div>
      </section>
    </div>
    <!-- End Galley Section-->
    <!-- Start Wedding gift -->
    <section class="gift" id="gift">
      <h2 data-aos="fade-down" >Wedding Gift</h2>
      <p data-aos="fade-up" data-aos-delay="0">Bagi bapak/ibu/saudara/i yang ingin mengirimkan hadiah pernikahan dapat melalui virtual account atau e-wallet di bawah ini:</p>
      <div class="buttom" data-aos="fade-up" >
        <a class="rekening" id="show-cards"> Kilk Disini <i data-feather="arrow-right" style="vertical-align: middle"></i></a>
      </div>
      <div class="card-container" id="card-container">
        <div class="card">
          <img src="images/LogoBCA.jpg" width="100px">
          <h5 id="textSalin">5781029620</h5>
          <p id="yani">Iqbal Yunus</p>
          <button class="salin" id="show-cards" onclick="noUtsman()"> <i data-feather="copy" style="vertical-align: middle"></i> Salin Rek. BCA </button>
        </div>
        <div class="card">
          <img src="images/LogoBCA.jpg" width="100px">
          <h5 id="textSalin2">5780963052</h5>
          <p id="yani">Citra Siti Aisyah</p>
          <button class="salin" onclick="noYani()" id="show-cards"> <i data-feather="copy" style="vertical-align: middle"></i>Salin Rek. BCA </button>
        </div>
    
      </div>
    </section>
    <!-- End Wedding gift -->

    <!-- Start RSVP -->
    <section class="rsvp">
      <div class="row">

        <img src="images/rsvp.JPG" alt="" class="rsvp-img">
        <div class="message" data-aos="fade-down">
          <form id="formMessage"  >
            <div class="input-group">
              <input type="text" name="nama" placeholder="Nama">
            </div>
            <div class="input-group">
              <input type="text" name="hubungan" placeholder="Hubungan (Saudara, Teman Kerja, Teman Sekolah)">
            </div>
            <div class="input-group">
              <textarea  cols="30" rows="10" name="pesan" placeholder="Berikan Ucapan & Doa Terbaik Untuk kedua Mempelai"></textarea>
            </div>
            <button type="submit" class="btn">Send  <i data-feather="arrow-right" data-aos="fade-up" style="vertical-align: middle"></i></button>
          </form>
          <div class="container-card" data-aos="fade-up">
            <div class="card-message">
             
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End RSVP -->

    <!-- Start Doa -->
    <section class="doa" id="home">
  
      <div class="content">
        <h1 >TerimaKasih</h1>
        <h4>Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada kami.</h4>
        <h4 style="margin-top: 8rem;" >KAMI YANG BERBAHAGIA</h4>
        <h3 >Iqbal <span>&</span> Citra</h3>
      </div>
    </section> 
    <!-- End Doa -->

    <!-- father icons -->  
    <script>
      feather.replace();
    </script>
    <!-- jquery -->
    <script src="js/jquery.js"></script>
    <!-- arctext -->
    <script src="js/script.js"></script>
    <!-- Lihgtbox js -->
    <script src="js/lightbox-plus-jquery.js"></script>
    <!-- Message Strorage -->
    <script src="js/strorage.js"></script>
    <!-- toastr -->
    <script src="assets/toastr/toastr.min.js"></script>
    <!-- Aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- arctext -->
    <script src="assets/Arctext/js/jquery.arctext.js"></script>
    <!-- sweetalert -->
    <script src="assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script>
       
        const gallery = document.querySelectorAll('.img');

        gallery.forEach((img, i) => {
            img.dataset.aos = 'fade-down';
            img.dataset.aosDelay = i * 100;
        });
        AOS.init({
          duration: 1500,
          once: true
        });
      </script>
     
  </body>
</html>
