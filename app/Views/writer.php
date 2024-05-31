<!DOCTYPE html>
<?php 

    foreach ($data as $key) {
        
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?= $key['name']?>">
    <meta name="keywords" content="author biography">
    <meta name="author" content="<?= $key['name']?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $key['name']?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    @font-face {
        font-family:kalpurush;
        src: url('<?= base_url('public/font/Kalpurush/kalpurush.ttf') ?>') format('truetype');
    }
    body{
        user-select: none;
        font-family:sans-serif,kalpurush;
    }
    .box{
        background: #019147;
        border-radius: 10px;
        padding: 30px;
    }
    .detail,.image{
        margin-top:5%;

    }
    .detail{
        padding:20px;
    }
    .detail p{
        font-weight: bolder;
        font-size:2rem;
        color:whitesmoke;
        text-align: center;
    }
    
    .image #profile{
        width: 100%;
    }
    .image{
        padding:20px;
    }
    .des cite{
        color:#d4d4d4;
        text-align: justify;
        
    }
    .list a{
        font-size:20px;
        font-weight:lighter;
        font-family:kalpurush;
        color:#fcd34d;
    }
</style>
</head>
<body>

<div class="container">

    <div class="row box mt-3 p-3">
        
                <div class="col-sm-6 image">
                    <img id="profile" src="<?= base_url() ?>/public/writerImage/<?= $key['img'] ?>" alt="">
                    <br>
                    <br>
                    <span style="font-weight:bolder;"> <img src="<?= base_url() ?>/public/img/feather-pen.png" width="50px" alt=""> মোট লেখা : <i> 
                    
                    <?php 
                        echo $meta;
                    ?>
                    </i> </span>
                    <br>
                    <hr>
                    <div class='list'>

                    <ol>
                        
                    
                        <?php 
                            foreach ($write as $data) {
                        ?>
                            <li id='list'><a href="<?= base_url('page/')?><?= $data['pid'] ?>/"> <?= $data['title'] ?> </a></li>    

                        <?php }?>
                    </ol>    
                    </div>
                </div>

                <div class="col-sm-6 detail">
                    <p><?= $key['name'] ?> </p>
                    <div class="d-flex justify-content-around">
                        <span class="badge text-bg-danger"><?= $key['edu'] ?></span>
                        <span class="badge text-bg-primary"><?= $key['nat'] ?></span>
                    </div>
                    <br><br>
                    <div class="des">
                        <cite>
                            <?= nl2br($key['about']) ?>
                        </cite>
                    </div>
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