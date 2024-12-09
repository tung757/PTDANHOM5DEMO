<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giao Diện Sinh Viên</title>
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
        <h2>Sinh Viên</h2>
        <ul>
            <li><a href="#" onclick="showContent('student-management')">Đăng ký đồ án</a></li>
            <li><a href="#" onclick="showContent('thesis-approval')">Xem danh sách đồ án</a></li>
            <li><a href="#" onclick="showContent('nopdo')">Nộp đồ án</a></li>
            <li><a href="../login.php" >Đăng xuất</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div id="student-management" class="content">
            <p style="padding: 10px; font-size: 30px; color: green;">Đăng ký đồ án</p>
            <?php
                include('gddangkydoan.php')
            ?>
        </div>
        <div id="thesis-approval" class="content">
        <p style="padding: 10px; font-size: 30px; color: green;">Xem danh sách đồ án</p>
                <?php
                    include("thongtindoan.php");
                ?>
        </div>
        <div id="nopdo" class="content">
        <p style="padding: 10px; font-size: 30px; color: green;">Nộp đồ án</p>
            <form action="">
                <input type="file">
                <input type="submit" value="Nộp">
            </form>
        </div>
    </div>
    
</body>
</html>