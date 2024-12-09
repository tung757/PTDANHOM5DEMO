<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao Diện Giảng Viên</title>
    <link rel="stylesheet" href="stylecsss/menugv.css">
</head>

<body>
        <?php
            include("../connection.php");
        ?>
    <Script>
        function showContent(contentId) {
            const contents = document.querySelectorAll('.content');
            
            contents.forEach(content => {
                content.style.display = 'none';
            });

            const selectedContent = document.getElementById(contentId);
            selectedContent.style.display = 'block';
        }
    </Script>
    <div class="sidebar">
        <h2>Giảng Viên</h2>
        <ul>
            <li><a href="#" onclick="showContent('student-management')">Quản lý sinh viên</a></li>
            <li><a href="#" onclick="showContent('thesis-approval')">Duyệt đồ án</a></li>
            <li><a href="#" onclick="showContent('dsdoan')">Quản lý đồ án</a></li>
            <li><a href="../login.php" >Đăng xuất</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div id="student-management" class="content">
            <p style="padding: 10px; font-size: 30px; color: green;">Danh sách sinh viên</p>
            <?php
                include("thongtinsv.php");
            ?>
        </div>
        <div id="thesis-approval" class="content">
        <p style="padding: 10px; font-size: 30px; color: green;">Danh sách đồ án cần duyệt</p>
            <?php 
            include("duyetdoan.php");
                      
            ?>
        </div>
        <div id="dsdoan" class="content">
            <p style="padding: 10px; font-size: 30px; color: green;">Danh sách đồ án</p>
            <?php
                include("thongtindoan.php");
            ?>
        </div>
        
    </div>
</body>
</html>