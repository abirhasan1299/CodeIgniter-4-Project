<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quotes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
@font-face{
    font-family:kalpurush;
    src:url('<?= base_url('../../../public/fonts/Kalpurush/kalpurush.ttf') ?>') format('truetype');
}
body{
    font-family:kalpurush;
}
</style>
</head>
<body>

<div class="container">
    <div class="row">
        <?php include 'navbar.php'; ?>
    </div>

<div class="row">
    <div class="d-flex justify-content-center">

        <div class="form" style="width:50%;margin-top:5%;">
                
            <form class="form-control" action="<?= base_url('admin/quote-post')?>" method="post" autocomplete="off">

                <input class="form-control" type="text"  name="ref" placeholder="Reference" required><br>

                
                <textarea name="content" cols="30" rows="10" class="form-control" placeholder="Content" required></textarea> <br>

                <input type="submit" value="Quotes Include" class="form-control btn btn-primary" name="submit">
                <br>
            </form>
        </div>
    </div>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>