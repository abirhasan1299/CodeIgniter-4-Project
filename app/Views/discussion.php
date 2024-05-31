<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
        <meta name="description" content="discussion page of sirah">
    <meta name="keywords" content="discussion,question,answer,writer,post,all post,reply,knowing,see post,islamic post,fiqh of islam,fiqh,all islamic question,famous question,famous islamic question">
    <meta name="author" content="Md Abir Hasan">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discussion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/discussion.css">
    <style>
    @font-face {
        font-family:kalpurush;
        src: url('<?= base_url('public/font/Kalpurush/kalpurush.ttf') ?>') format('truetype');
    }
    body{
        user-select:none;
        font-family:sans-serif,kalpurush;
    }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        
        <div class="col-sm-6">
            <p class="display-1" id='title'></p>
        </div>

    </div>
<script>
    var i = 0;
var txt = 'Discussion'; /* The text */
var speed = 400; /* The speed/duration of the effect in milliseconds */

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("title").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
typeWriter();
</script>
 
    <div class="row">
        <div class="col-sm-7">
            <?php 
                foreach ($data as $key) {
                    
                helper('text');

            ?>
                <div class="box mt-3">
                    <div class="content">
                        <p class="display-6" style='color:steelblue;font-weight:bolder;'><?= $key['title'] ?>  </p>
                
                        <p id="body" style='color:grey;'>
                            <?= word_limiter($key['des'], 30) ?>
                        </p>
                        <div class="d-flex justify-content-left">
                            <div id="x">
                                <a href="<?= base_url('page/') ?><?= $key['pid'] ?>/" style='text-decoration:none;'>
                                    <button id="Read">Read More</button>
                                </a>
                            </div>
                            <div id="x">
                                <div class="d-flex justify-content-around">
                                    <div class="eye">
                                        <img src="<?= base_url()?>/public/img/eyes.png" width="10px" alt=""><span style="font-size:10px;"> <?= $key['name'] ?></span>
                                    </div>
                                    <div class="time">
                                        <img src="<?= base_url()?>/public/img/clock.png" width="10px" alt=""> <span style="font-size:15px;" ><?php 
                                                $time = CodeIgniter\I18n\Time::parse($key['created_at'] , 'Asia/Dhaka');
                                                echo $time->humanize();
                                            ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
                <?php } ?>
        </div>
        <div class="col-sm-5">
            
            <div class="search">
                    <h3>Search Question ?</h3>
                    <input type="search" name="search"  placeholder="Search">
            </div>
            
            <div class="recent">
                <div class="recent_title">
                    <h3>Recent Trend</h3>
                
                </div>

                <?php
                    foreach ($meta as $key) {
                ?>
                <div class="recent_box">
                    <div class="d-flex justify-content-left">
                        <div class="image">
                                <img src="<?= base_url()?>/public/writerImage/<?= $key['img'] ?>" width="50px" alt="">
                        </div>
                        <div class="title">
                            <a style='font-size:20px;' href="<?= base_url('page/') ?><?= $key['pid'] ?>/"><?= $key['title']; ?> </a>
                        </div>
                    </div>
                </div>

                <?php } ?>


                
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    </body>    
</html>