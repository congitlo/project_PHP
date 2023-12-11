<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register_SNC</title>
    <!-- Thêm Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
      background-image: url('./images/itachi-uchiha.jpg'); /* Replace 'path/to/your/image.jpg' with the actual path to your image */
      background-size: cover; /* Adjust the background size as needed */
      background-position: center; /* Center the background image */
      background-repeat: no-repeat; /* Do not repeat the background image */
    }
    </style>
<body>
<div class="container mt-5">
  <div class="row justify-content-center">    
    <div class="col-md-5">
      <form id="form_reg" class="p-4 my-3" action="reg.php" method="post" >
      <h1>Đăng ký tài khoản</h1>
      <div class="mb-3">
        <div class="row">
            <!-- Họ -->
            <div class="col-md-6">
                <input type="text" class="bg-light form-control" id="ho" name="ho" placeholder="Họ" required>
            </div>
            <!-- Tên -->
            <div class="col-md-6">
                <input type="text" class="bg-light form-control" id="ten" name="ten" placeholder="Tên" required>
            </div>
        </div>

        <!-- Tên đăng nhập -->
        <div class="bg-light mb-6 mt-2">
          <input type="text" class="bg-light form-control" id="username" name="username" placeholder="Số di động hoặc email"required>
        </div>

        <!-- Mật khẩu -->
        <div class="mb-3 mt-2">
          <input type="password" class="bg-light form-control" id="password" name="password" placeholder="Tạo mật khẩu"required>
        </div>

        <!-- Ngày sinh -->
        <div class="mb-3">
        <div class="row">
            <label class="form-label">Ngày sinh:</label><br>
                <!-- Ngày -->
                <div class="col-md-3">
                    <select class="form-select" aria-label="Ngày" name="birthday_day" id="day" title="Ngày">
                        <option value="1" selected="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option></select>
                </div>
            <!-- Tháng -->
            <div class="col-md-3">
                    <select class="form-select" aria-label="Tháng" name="birthday_month" id="month" title="Tháng">
                        <option value="1" selected="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        </select>
            </div>
            <!-- Năm -->
            <div class="col-md-3">
                    <select class="form-select" aria-label="Năm" name="birthday_year" id="year" title="Năm">
                        <option value="2023" selected="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2021</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                        </select>
                </div>         
            </div>
        </div>
        
        

        <!-- Giới tính -->
        <div class="mb-3">
        <label class="form-label">Giới tính:</label>
            <div class="row">
                <div class="col-auto">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                        <label class="form-check-label" for="nam">Nam</label>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="nu">Nữ</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Nút Đăng ký -->
        <div class="text-center">
            <input type="submit" name="btn-reg" class="btn btn-success" value="Đăng ký">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Thêm Bootstrap JS và Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>