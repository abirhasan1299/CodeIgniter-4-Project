<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <style>
  	body {
  margin: 0;
  padding: 0;
  font-family: 'Roboto', sans-serif;
  background-color: #f8f9fa;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

.login-container {
  background-color: #343a40;
  border-radius: 10px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  overflow: hidden;
}

.login-box {
  padding: 40px;
  text-align: center;
  color: #fff;
}

.login-heading {
  margin-bottom: 30px;
  font-size: 28px;
  font-weight: 700;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  width: 100%;
  padding: 10px;
  border: none;
  border-radius: 5px;
  outline: none;
  background-color: #495057;
  color: #fff;
}

.btn-primary {
  background-color: #007bff;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  outline: none;
  font-size: 16px;
  font-weight: 700;
  transition: background-color 0.3s;
}

.btn-primary:hover {
  background-color: #0056b3;
}


  </style>
</head>
<body>

<div class="login-container">
  <div class="login-box">
    <?php 
        if (session()->getFlashdata('admin')) {
            echo '<h3 style="color:red;font-family:cursive;">'.session()->getFlashdata('admin').'</h3>';
        }
    ?>
    <h2 class="login-heading">Admin Verification</h2>
    <form id="loginForm" method="post" action="<?= base_url('admin/login') ?>" autocomplete="off">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Login">
    </form>
  </div>
</div>

</body>
</html>
