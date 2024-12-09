<!DOCTYPE html>
<html lang="en">

<head>
  <title>Sua thong tin | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="main.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    form {
      max-width: 600px;
      margin: 0 auto;
    }

    form div {
      margin-bottom: 15px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    input, select, button {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      cursor: pointer;
      background-color: #4CAF50;
      color: white;
      font-weight: bold;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<?php
  include("../connection.php");
?>
<body>
  <main>
    <h3>Thêm Sinh Viên</h3>
    <form method="POST">
      <div>
        <label for="studentId">Mã Sinh Viên</label>
        <input type="text" name="studentIdn" id="studentId" value='<?php echo $_POST['sua']?>' placeholder="Nhập mã sinh viên">
      </div>
      <div>
        <label for="fullName">Họ và Tên</label>
        <input type="text" name="fullNamen" id="fullName"  placeholder="Nhập họ và tên" required>
      </div>
      <div>
        <label for="address">Địa chỉ thường trú</label>
        <input type="text" name="addressn" id="address" placeholder="Nhập địa chỉ" required>
      </div>
      <div>
        <label for="username">Username</label>
        <input type="text" name="usernamen" id="username">
      </div>
      <div>
        <label for="gender">Giới tính</label>
        <select name="gendern"  id="gender" required>
          <option value="">-- Chọn giới tính --</option>
          <option value="Nam">Nam</option>
          <option value="Nu">Nữ</option>
        </select>
      </div>
      <div>
        <label for="phone">Số điện thoại</label>
        <input type="text" name="phonen" id="phone" placeholder="Nhập số điện thoại" required>
      </div>
      <div>
        <label for="password">Mật khẩu</label>
        <input type="password" name="passwordn" id="password" placeholder="Nhập mật khẩu" required>
      </div>
      <div>
        <input type="submit" name='suamoi' value="LUU LAI">
        <button type="reset">Hủy bỏ</button>
      </div>
    </form>
    <?php 
        if(isset($_POST['suamoi'])){
            $masv=$_POST["studentIdn"];
            $tensv=$_POST["fullNamen"];
            $diachi=$_POST["addressn"];
            $gioitinh=$_POST["gendern"];
            $phone=$_POST["phonen"];
            $username=$_POST["usernamen"];
            $password=$_POST["passwordn"];
            $sql="UPDATE user SET fullName='$tensv', address='$diachi',gender='$gioitinh', sDt='$phone', username='$username', password='$password' WHERE iD='$masv'";
            $mysqli->query($sql);
            
            header("Location: quanlysinhvien.php");
            $mysqli->close();
          }
    ?>
  </main>
</body>

</html>