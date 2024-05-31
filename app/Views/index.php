<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="sirah the way of jannah">
    <meta name="keywords" content="sirah,islamic website,islam,youth islam,sirah organization,jannat,following of islam,ummah,question,answer,islamc question and answer">
    <meta name="author" content="Md Abir Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="<?= base_url()?>/public/css/style.css">
    
</head>

<body>
<div class="header d-flex">

        <div class="primary-link">
            <div class="d-flex justify-content-start">
                <div class="component">
                    <p><img src="<?= base_url()?>/public/img/telephone.png" width="25px" alt=""> +8801986557505</p>
                </div>
            
                <div class="component" id="mail">
                    <p><img src="<?= base_url()?>/public/img/mail.png" width="25px" alt=""> tamamabir@gmail.com</p>
                </div class="component">
            
                <div class="component" id="location">
                    <p><img src="<?= base_url()?>/public/img/location.png" width="25px" alt="">Dhaka,Bangladesh</p>
                </div>
            </div>
        </div>
        <div class="social-link">
            <div class="d-flex justify-content-center">
                <div class="d-flex mt-2">
                        
                        <div class="social-icon">
                            <a href="https://www.facebook.com/aamikobi"><img src="<?= base_url()?>/public/img/facebook.png" width="25px" alt=""></a>
                        </div>
                        <div class="social-icon">
                            <a href="#"><img src="<?= base_url()?>/public/img/twitter.png" width="25px" alt=""></a>
                        </div>
                        <div class="social-icon">
                            <a href="https://www.youtube.com/channel/UCCuCUtf9x0kNbZiWPjLhSsw"><img src="<?= base_url()?>/public/img/youtube.png" width="25px" alt=""></a>
                        </div>
                        <div class="social-icon">
                            <a href="#"><img src="<?= base_url()?>/public/img/instagram.png" width="25px" alt=""></a>
                        </div>
                </div>
            </div>
        </div>
</div>
<div class="container">
    <div class="row mt-2">
        <div class="col-sm-3">
            <div>
                <h3><img src="<?= base_url()?>/public/img/png/logo-no-background.png" width="150px" alt=""></h3>
            </div>
        </div>
        <div class="col-sm-6">
            <div id="navbar">
                <ul class="nav justify-content-start">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?= base_url()?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('eventPost/') ?>">Event</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Leaflet</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Deen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('discussion/') ?>">Discussion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about/') ?>">About</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-sm-3">
            <a href="<?= base_url('auth/register/') ?>" style="text-decoration:none;">
                <button id="donate">Login or Register</button>
            </a>
        </div>
    </div>
    <!-- home page start -->
    <div class="row mt-2" id="header">
        <div class="col-sm-7">
            <div class="main">
                <p id="main"><p>
                <div>
                    <p id="tex">
                        ইসলামিক জ্ঞান ও প্রচারনার জন্য ওয়েবসাইটটি সবার জন্য উন্মুক্ত । দ্বীনকে সবার মাঝে বিকশিত করে একটি সুষ্ঠূ ও গুনাহমুক্ত যুবসমাজ গড়ে তোলাই আমাদের শেষ ও একমাত্র উদ্দেশ্য । আসুন দ্বীনকে ভালোভাবে জানি ও নিজেকে গড়ে তুলি  ...
                    </p>
                </div>

                <a href="<?= base_url('discussion/') ?>" style='text-decoration:none;'>
                    <button role="button" id="donate"><img src="<?= base_url()?>/public/img/arrow.png" width="25px" alt=""> Join Discussion  </button>
                </a> 
            </div>
        </div>
<script>
    var i = 0;
var txt = 'পবিত্র রমাদানের শুভেচ্ছা'; /* The text */
var speed = 400; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("main").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
typeWriter();
</script>
        <div class="col-sm-5">
            <img src="<?= base_url()?>/public/img/man.png" width="100%"  alt="">
        </div>
    </div>
    <br><br>
<div class='row' style="box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2), 0 12px 40px 0 rgba(0, 0, 0, 0.19);">
<style>
/* Slideshow container */
.slideshow-container {
  position: relative;
  background: #E6F8EF;
}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
    text-align: center;
    padding: 20px;
    background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {
    font-style: italic;
    font-size:20px;
    font-weight:bold;

}

/* Add a blue color to the author */
.author {color: cornflowerblue;}
</style>
</head>
<body>

<div class="slideshow-container">
<?php 
    foreach($quote as $key){
?>
<div class="mySlides">
  <q> <?= $key['content'] ?> </q>
  <p class="author">- <?= $key['ref'] ?></p>
</div>
<?php } ?>



<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>

<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span> 
 

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
</div>
    <div class="row">
        <div class="col-sm-6">
            <h1 class="mt-5 prayer">Our Dashboard</h1>
            <div class="box">
                <div class="content">
                   
                    <?php  
                        foreach($data as $key){
                    ?>
                    <p id="body">

                        <?= $key['text'] ?>
                    </p>
                     <!---button id="Read"--->
                         <?php 
                    //         $time = CodeIgniter\I18n\Time::parse($key['time'] , 'Asia/Dhaka');
                    //         echo $time->humanize();
                    //     ?>
                     <!--/button-->
                <?php } ?>
                </div>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="d-flex justify-content-end mt-5">
                <select name="selec" id="select">
                    <option selected disabled>Select Location</option>
                    <option value="Dhaka">Dhaka</option>
                    <option value="Dhaka">Chittagoang</option>
                    <option value="Dhaka">Barisal</option>
                </select>
            </div>            
            <div class="box mt-3">
                <div class="time">
                    <table class="table">
                        
                            <tr>
                                <td>
                                    <img src="<?= base_url()?>/public/img/praying.png" width="60px" alt="">
                        
                                </td>
                                <td>
                                    <img src="<?= base_url()?>/public/img/adzan.png" width="60px" alt="">
                        
                                </td>
                                <td>
                                    <img src="<?= base_url()?>/public/img/sujud.png" width="60px" alt="">
                        
                                </td>
                            </tr>
                            <tr id="tableData">
                                <th>Salat Name</th>
                                <th>Ajan Time</th>
                                <th>Prayer Time</th>
                            </tr>
                            
                            <tr id="tableData">
                                <td><img src="<?= base_url()?>/public/img/fajr.png" width="30px" alt=""> Fajr</td>
                                <td>5.45 am</td>
                                <td>5.58 am</td>
                            </tr>
                            <tr id="tableData">
                                <td><img src="<?= base_url()?>/public/img/duhr.png" width="30px" alt=""> Duhar</td>
                                <td>1.00 pm</td>
                                <td>1.30 pm</td>
                            </tr>
                            <tr id="tableData">
                                <td><img src="<?= base_url()?>/public/img/asr.png" width="30px" alt=""> Asar</td>
                                <td>4.45 pm</td>
                                <td>5.00 pm</td>
                            </tr>
                            <tr id="tableData">
                                <td><img src="<?= base_url()?>/public/img/magrib.png" width="30px" alt=""> Magrib</td>
                                <td>6.13 pm</td>
                                <td>6.20 pm</td>
                            </tr>
                            <tr id="tableData">
                                <td><img src="<?= base_url()?>/public/img/esha.png" width="30px" alt=""> Esha</td>
                                <td>7.45 pm</td>
                                <td>8.00 pm</td>
                            </tr>
                            <tr id="tableData">
                                <td><img src="<?= base_url()?>/public/img/jummah.png" width="30px" alt=""> Jummah</td>
                                <td>12.45 pm</td>
                                <td>1.30 pm</td>
                            </tr>
                        
                    </table>
                   
                </div>
                
            </div>
        </div>
    </div>

    <div class="row" id="third">
    <?php
    helper('text');
        foreach($meta as $key){
    ?>
        <div class="col-sm-6">
            <div class="d-flex justify-content-end">
                <div class="video">
                    
                    <img src="<?= base_url('public/eventImage')?>/<?= $key['img'] ?>" style='width:550px; height:450px;padding:20px;'>
                </div> 
            </div>
        </div>

        <div class="col-sm-6">
    
            <div class="more">
                <h1><?= $key['title'] ?></h1>
                <div class="mt-4">
                    <p>
                        <?= word_limiter($key['des'],50); ?>     
                    </p>
                </div>
                <a style='text-decoration:none;'  href='<?= base_url('eventPost/') ?>'>
                    <button id="Read">বিস্তারিত পড়ুন</button>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="row" id="fourth">
       <div id="footer">
            <div class="d-flex justify-content-center">
            
                <div class="service">
                    <h1 class="service">Goal & Destination</h1>
                </div>
            </div>
            <div class="para">
                <p>The ultimate destination in preaching Islam is to guide individuals towards attaining closeness to Allah, achieving salvation in the hereafter, and fostering a just and harmonious society based on Islamic values. It emphasizes the importance of faith, righteous actions, and compassion towards others as a means to attain eternal happiness and fulfillment. </p>
            </div>
       </div>
        <div class="d-flex justify-content-center">

            <div class="column">
                <img src="<?= base_url()?>/public/img/quran.png" width="60px" alt="">
                <h4>Quran Learning</h4>
                <p>
                    First attempt to all muslim learn and read Quran Purely. 
                </p>
                <a href="#" id="LearnMore">Learn More</a>
            </div>

            <div class="column">
                <img src="<?= base_url()?>/public/img/alert.png" width="60px" alt="">
                <h4>Alert From Sins</h4>
                <p>
                    We create awareness from sin that people do knowing it doing good. 
                </p>
                <a href="#" id="LearnMore">Learn More</a>
            </div>

            <div class="column">
                <img src="<?= base_url()?>/public/img/preaching.png" width="60px" alt="">
                <h4>Preaching Islam</h4>
                <p>
                    Peaching Islam to everyone that they can know and understand islam properly.
                </p>
                <a href="#" id="LearnMore">Learn More</a>
            </div>

            <div class="column">
                <img src="<?= base_url()?>/public/img/poor.png" width="60px" alt="">
                <h4>Helping Poor</h4>
                <p>
                    Helping poor people will be a major oppurtunity to get Sawab.
                </p>
                <a href="#" id="LearnMore">Learn More</a>
            </div>

        </div>
        
    </div>
    
</div>
<div class="bottom">
    <p> Copyright &copy; 2024 by Organization</p>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>
</html>