<!DOCTYPE html>
<html lang="en">

<head>
  <title>Danh sách Sinh Viên | Quản trị Admin</title>
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
        <li class="breadcrumb-item active"><a href="#"><b>Danh sách sinh viên</b></a></li>
      </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="tile">
          <div class="tile-body">

            <div class="row element-button">
              <div class="col-sm-2">

                <a class="btn btn-add btn-sm" href="form-add-sinh-vien.php" title="Thêm"><i class="fas fa-plus"></i>
                  Tạo mới Sinh Viên</a>
              </div>
            <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="0"
              id="sampleTable">
              <thead>
                <tr>
                  <th>Mã Sinh Viên</th>
                  <th width="150">Họ và tên</th>
                  <th width="300">Địa chỉ</th>
                  <th>Ngày sinh</th>
                  <th>Giới tính</th>
                  <th>SĐT</th>
                  <th>Mật khẩu</th>
                  <th width="100">Tính năng</th>
                </tr>
                <?php
                  $sql="SELECT * FROM user";
                  $result=$mysqli->query($sql);
                  $i=0;
                  while($row=$result->fetch_assoc()){
                    ?>
                    <tr>
                      <td><?php echo($row['iD']); ?></td>
                      <td><?php echo($row['fullName']); ?></td>
                      <td><?php echo($row['address']); ?></td>
                      <td>ngaysinh</td>
                      <td><?php echo($row['gender']); ?></td>
                      <td><?php echo($row['sDt']); ?></td>
                      <td><?php echo($row['password']); ?></td>
                      <td>
                        <form method="POST">
                          <button type="submit" name="xoa" value='<?php echo $row['iD']; ?>'> Xoa</button>
                        </form>
                        <form method="POST" action ="form-sua.php">
                          <button type="submit" name="sua" value='<?php echo $row['iD']; ?>'> Sua</button>
                        </form>
                      </td>
                    </tr>
                  <?php }
                ?>
                <?php
                  if(isset($_POST['xoa'])){
                    $gt=$_POST['xoa'];
                    $sqlxoa="DELETE FROM user WHERE iD=$gt";
                    $mysqli->query($sqlxoa);
                    header("Location: quanlysinhvien.php");
                    $mysqli->close();
                  }
                ?>
                  <?php
                    if(isset($_POST['sua'])){
                      header("Location: form-add-sinh-vien.php");
                    }
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