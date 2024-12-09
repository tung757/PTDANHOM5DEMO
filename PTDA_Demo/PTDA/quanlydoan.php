<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản lý Đồ Án | Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php
  include("../connection.php");
?>
<body class="app sidebar-mini rtl">
  <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
  <aside class="app-sidebar">
    <div class="app-sidebar__user">
      <div>
        <p class="app-sidebar__user-name"><b>Admin</b></p>
        <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
      </div>
    </div>
    <hr>
    <ul class="app-menu">
      <li><a class="app-menu__item " href="quanlysinhvien.php"><i class='app-menu__icon bx bx-id-card'></i> <span
            class="app-menu__label">Quản lý Sinh Viên</span></a></li>
      <li><a class="app-menu__item" href="quanlydoan.php"><i class='app-menu__icon bx bx-task'></i><span
            class="app-menu__label">Quản lý Đồ án</span></a></li>
      <li><a class="app-menu__item" href="../login.php"><i class='app-menu__icon bx bx-task'></i><span
              class="app-menu__label">Đăng xuất</span></a></li>
    </ul>
    </aside>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách đồ án</b></a></li>
      </ul>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th>Tên Đồ Án</th>
                  <th width="150">Khoa</th>
                  <th width="300">Tên Đề Tài</th>
                  <th>Họ Tên Sinh Viên</th>
                  <th>Mã Sinh Viên</th>
                  <th>Giáo Viên Hướng Dẫn</th>
                  <th>Ngày Thực Hiện</th>
                  <th width="100">Tính năng</th>
                </tr>
                <?php
                  
                  $sql="SELECT doan.tenDoAn, user.khoa, doan.tenDeTai, user.fullName as tensv, user.iD as masv, giangvien.fullName as tengv, doan.ngayBatDau as ngayth FROM doan JOIN giangvien ON doan.iD = giangvien.iD JOIN user ON user.maDoAn=doan.maDoAn WHERE doan.trangThai=1";
                  $result=$mysqli->query($sql);
                  while($row=$result->fetch_assoc()){
                    ?>
                    <tr>
                      <td><?php echo($row['tenDoAn']); ?></td>
                      <td><?php echo($row['khoa']); ?></td>
                      <td><?php echo($row['tenDeTai']); ?></td>
                      <td><?php echo($row['tensv']); ?></td>
                      <td><?php echo($row['masv']); ?></td>
                      <td><?php echo($row['tengv']); ?></td>
                      <td><?php echo($row['ngayth']); ?></td>
                    </tr>
                  <?php }
                ?>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>