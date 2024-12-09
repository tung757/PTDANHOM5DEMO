<!DOCTYPE html>
<html lang="en">

<head>
  <title>Quản trị Admin</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Main CSS-->
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body onload="time()" class="app sidebar-mini rtl">
  <!-- Navbar-->
  <!-- Sidebar menu-->
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
</body>

</html>