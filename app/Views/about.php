<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
      <meta name="description" content="about of sirah">
    <meta name="keywords" content="sirah,about,founder,co-founder,builder,about of sirah">
    <meta name="author" content="about page">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>About Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <style>
    #demo{
        color:teal;
        font-weight:bold;
    }
    body {
      background-color: #019147;
    }

    .about-section {
      padding: 80px 0;
      background-color: #ffffff;
    }

    .about-heading {
      font-size: 3rem;
      margin-bottom: 40px;
    }

    .about-content {
      font-size: 18px;
      line-height: 1.6;
    }

    .team-section {
      background-color: #019147;
      padding: 60px 0;
    }

    .team-member {
      text-align: center;
      margin-bottom: 30px;
    }

    .team-member img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
      margin-bottom: 20px;
      object-fit: cover;
      border: 5px solid #ffffff;
    }

    .team-member h3 {
      font-size: 20px;
      margin-bottom: 10px;
    }

    .team-member p {
      color: #6c757d;
    }
  </style>
</head>

<body>

  <div class="container-fluid about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="about-heading">About Us</h2>
          <p class="about-content">
            <cite>"Guidance in the Light of Quran: Nurturing Souls on the Path of Islam"</cite>
            <br>
            <br>
            <div id="demo"></div>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container team-section">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="about-heading">Our Team</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 team-member">
        <img src="<?= base_url()?>/public/img/menk.webp" alt="Team Member 1">
        <h3>Abu Bakar Zakaria</h3>
        <p style="color:white;">Co-Founder</p>
      </div>
      <div class="col-md-4 team-member">
        <img src="<?= base_url()?>/public/img/sudais.jpeg" alt="Team Member 2">
        <h3>Sheikh Al-Sudais</h3>
        <p style="color:white;">Founder</p>
      </div>
      <div class="col-md-4 team-member">
        <img src="<?= base_url()?>/public/img/abubakar.jpeg" alt="Team Member 3">
        <h3>Dr. Abu Bakar Zakaria</h3>
        <p style="color:white;">Developer</p>
      </div>
    </div>
  </div>
<script>
var i = 0;
var txt = 'Embark on a transformative journey through the profound teachings of the Quran, exploring the beauty of Islam and its timeless guidance. Join us as we delve into the wisdom of the Holy Book, seeking enlightenment, peace, and a deeper connection with the Creator. This Islamic preaching series aims to inspire and empower individuals to lead a purposeful life guided by the principles of Islam, fostering spiritual growth and understanding. Let the divine words illuminate your heart and mind, bringing clarity, tranquility, and a renewed sense of purpose to your journey as a believer. Together, let us navigate the enriching path of Islam and embrace its teachings for a harmonious and fulfilling life.';
var speed = 20;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("demo").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
typeWriter();
</script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  </body>
  </html>