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
            <div class="form" style="width:60%;margin-top:2%;">
                <form action="<?= base_url('admin/post')?>" method="post" class='form-control' autocomplete="off">
                
                    <input type="text" name="title" placeholder="Title" class="form-control"><br>
                    
                    <select name="w_sk" class="form-control">
                        <option selected disabled>Select Author</option>
                    <?php  
                        foreach ($value as $key) {
                         
                    ?>
                        <option value="<?= $key['wsk'] ?>"><?= $key['name']?></option>
                    
                <?php } ?>
                    </select><br>

                    <input type="hidden" name="psk" value="<?=uniqid()?>" >

                    <textarea class="form-control" name="about" id="about" cols="30" rows="5" placeholder="Details Post"></textarea><br>

                    <input type="submit" name="submit" class="form-control btn btn-danger"><br><br>

                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>