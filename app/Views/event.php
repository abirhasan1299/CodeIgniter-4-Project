<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Event of Sirah">
    <meta name="keywords" content="event,post,new event,upcoming event,all event">
    <meta name="author" content="sirah">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Event</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
     @font-face {
        font-family:kalpurush;
        src: url('<?= base_url('public/font/Kalpurush/kalpurush.ttf') ?>') format('truetype');
    }
    body{
        user-select:none;
        font-family:sans-serif,kalpurush;
    }
        .p h1{
            font-size: 4rem;
            color:green;
            font-family: cursive;
        }
        #third{
            background-color: #E6F8EF;
        }
        #first{
            padding:20px;
        }
        .video img{
            width:100%;
            object-fit: cover;
        }
        #more{
            background-color: #E6F8EF;
            padding:20px;
        }
        
        .more h1{
            color:teal;
            font-size: 4rem;
        }
        #time{
            font-size:2rem;
            padding:20px;
            color:red;
            font-weight: bolder;
        }
    </style>
</head>
<body>
<?php 
    foreach ($data as $key ) {
        # code...
    
?>
<div class="container">
    <div class="row" id="first">
        <div class="col-sm-6">
            <div class="p">
                <h1 id='title'></h1>
            </div>
        </div>
        <div class="col-sm-6">
            
        </div>
    </div>
    <script>
// Set the date we're counting down to
var countDownDate = new Date("<?= $key['date']?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("time").innerHTML = days + "Day " + hours + "Hour "
  + minutes + "Min " + seconds + "s";
 
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("time").innerHTML = "Expired";
  }
}, 1000);
</script>
    <div class="row" id="third">
    <center>
    <div id="time"></div>        
    </center> 
            <div class="d-flex justify-content-end">
                <div class="video">
                    <img src="<?= base_url('public/eventImage') ?>/<?= $key['img'] ?>" alt="">
                </div>
            </div>
        
</div>
    <div class="row" id="more">
        
            <div class="more">
                <br>
                <h1><?= $key['title'] ?></h1>
                <h6 style='text-align:center;padding:5px;color:purple;' class='bg-warning'>Location: <?= $key['place'] ?></h6>
                <div class="mt-4">
                    <p style='font-size:25px;'>
                        <?php  
                            echo nl2br($key['des']);
                        ?>
                    </p>
<script>
   
var i = 0;
var txt = 'Upcoming Event'; /* The text */
var speed = 200; /* The speed/duration of the effect in milliseconds */
function typeWriter() {
     
  if (i < txt.length) {
    document.getElementById("title").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}
typeWriter();
</script>
                </div>
                
            </div>
        
    </div>
<?php  } ?>
   
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
    integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
    crossorigin="anonymous"></script>
</body>

</html>