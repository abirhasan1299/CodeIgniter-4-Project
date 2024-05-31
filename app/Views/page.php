<!DOCTYPE html>
<?php 

    foreach ($meta as $key) {
        
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $key['title']?>">
    <meta name="keywords" content="<?= $key['title']?>">
    <meta name="author" content="<?= $key['name']?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $key['title']?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
@font-face {
        font-family:kalpurush;
        src: url('<?= base_url('public/font/Kalpurush/kalpurush.ttf') ?>') format('truetype');
    }
     body{
            user-select:none;
            font-family:sans-serif,kalpurush;
        }
    #title{
        color:#4b5563;
        font-weight:bolder;
        font-size:4rem;
        padding:20px;
    }
    .author a{
        text-decoration:none;
    }
    .author strong{
        font-size:15px;
    }
    .author img{
        border-radius: 50%;
    }
    .des{
        padding:40px;
    }
    .des p{
        text-align: justify;
        font-size:25px;
    
    }
@media screen and (max-width: 600px) {
    .des p{
        font-size:20px;
    }
  #title{
      font-size:2rem;
  }
  
}
</style>
</head>
<body>

<div class="container">

<div class="row">
                                                        
    <p id="title"> <?= $key['title'] ?> </p>
    
    <div class="extra d-flex justify-content-around">
        <div class="author">
            <a href="<?= base_url('writer/')?><?= $key['wsk']?>/">
                <img src="<?= base_url()?>/public/writerImage/<?= $key['img']?>" width="80px" alt="">
                <strong> <?= $key['name']?> </strong>
            </a>
        </div>
        <div class="">
            <img src="<?= base_url() ?>/public/img/wall-clock.png" width="30px" alt=""> 
            <span> <?php 
                $time = CodeIgniter\I18n\Time::parse($key['created_at'] , 'Asia/Dhaka');
                echo $time->humanize();
            ?> </span>
        </div>
    </div>

    <div class="des">
        <p>
            <?= nl2br($key['des']) ?>
        </p>
    </div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
<?php 
    }
?>