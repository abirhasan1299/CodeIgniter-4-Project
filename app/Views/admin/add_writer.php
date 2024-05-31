<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <div class="row">
        <?php include 'navbar.php'; ?>
    </div>

<div class="row">
    <div class="d-flex justify-content-center">

        <div class="form" style="width:50%;margin-top:5%;">
                
            <form class="form-control" action="<?= base_url()?>/admin/add_writer" method="post" autocomplete="off" enctype="multipart/form-data">

                

                <input class="form-control" type="text" id="name" name="name" placeholder="Writer Name"><br>

                <input class="form-control" type="text" id="educaiton" name="education" placeholder="Educational Qualification"><br>

                <input class="form-control" type="text" id="nationality" name="nationality" placeholder="Nationality"><br>

                <textarea name="des" id="des" cols="30" rows="5" class="form-control" placeholder="About Description"></textarea> <br>

                <label for="img" style='color:red;'>**choose profile image**</label>
                <input class="form-control" type="file" name="img" id="img"><br>
                
                <input type="hidden" value="<?= uniqid()?>" name='wsk'>

                <input type="submit" value="Done" class="form-control btn btn-primary" name="submit">
                <br><br><br>
            </form>
        </div>
    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>