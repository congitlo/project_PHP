<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <style>
    body {
      margin: 0;
      padding: 0;
      background-image: url('./images/itachi-uchiha.jpg'); /* Replace with the path to your background image */
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .form-container {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 10px;
      width: 300px;
    }

    .form-container input[type="text"],
    .form-container input[type="password"] {
      margin-bottom: 10px;
    }

    .form-container input[type="submit"] {
      background-color: #28a745;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      width: 100%;
    }
  </style>
</head>
<body>

<div class="form-container">
  <form id="form_reg" class="p-4 my-3" action="reg.php" method="post">
    <h1 class="text-center">Đăng nhập</h1>
    <div class="mb-3">
      <!-- Tên đăng nhập -->
      <div class="bg-light mb-6 mt-2">
        <input type="text" class="bg-light form-control" id="username" name="username" placeholder="Số di động hoặc email" required>
      </div>
      <!-- Mật khẩu -->
      <div class="mb-3 mt-2">
        <input type="password" class="bg-light form-control" id="password" name="password" placeholder="Mật khẩu" required>
      </div>
      <!-- Nút Đăng nhập -->
      <div class="text-center">
        <input type="submit" name="btn-reg" class="btn btn-success" value="Đăng nhập">
      </div>
    </div>
  </form>
</div>


<!-- Thêm Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
