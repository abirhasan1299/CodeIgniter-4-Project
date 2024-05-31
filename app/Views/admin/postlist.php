<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post List</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <style>
            table{
                margin-top: 2%;
            }
        </style>
</head>
<body>

<div class="container">
    <div class="row">
        <?php include 'navbar.php'; ?>
    </div>
    <p class='display-2'>Post Manager</p>
    <br>
    <table class='table table-hover'>
        <tr>
            <th>SL</th>
            <th>Title</th>
            <th>Action</th>
        </tr>
        <tbody>
            <?php 
                foreach ($data as $key) {
                
            
            ?>
            <tr>
                <td><?= $key['pid'] ?></td>
                <td><?= $key['title'] ?></td>
                <td>
                    <div class="d-flex justify-content-around">
                        <a href="<?= base_url('admin/post-edit')?>/<?= $key['pid'] ?>" role="button" class="btn btn-primary">Edit</a>
                        <a href="<?= base_url('admin/post-delete')?>/<?= $key['pid'] ?>" role="button" class="btn btn-danger">Trash</a>
                    </div>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>