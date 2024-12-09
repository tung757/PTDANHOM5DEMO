<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký đồ án</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 50%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            font-size: 16px;
            margin-bottom: 8px;
            display: block;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
<?php
    include("../connection.php");
?>
<div class="container">
    <h1>Đăng ký đồ án</h1>
    <form action="#" method="POST">
        <label for="giang-vien">Chọn giảng viên</label>
        <?php
            $sql="SELECT fullName FROM giangvien";
            $result=$mysqli->query($sql);
            ?><select id="giang-vien" name="giang-vien"><?php
            while($row=$result->fetch_assoc()){
                ?>
                
                    <option value="<?php echo $row['fullName']?>"><?php echo $row['fullName']?></option>
                    
           <?php }
        ?>
        </select>
        <label for="ten-do-an">Tên đồ án</label>
        <input type="text" id="ten-do-an" name="ten-do-an" placeholder="Nhập tên đồ án" required>

        <label for="ten-de-tai">Tên đề tài</label>
        <input type="text" id="ten-de-tai" name="ten-de-tai" placeholder="Nhập tên đề tài" required>

        <label for="ngay-bat-dau">Ngày bắt đầu</label>
        <input type="date" id="ngay-bat-dau" name="ngay-bat-dau" required>

        <button type="submit" name="dangkydetai">Đăng ký</button>
        <?php 
            if(isset($_POST['dangkydetai'])){
                $tendoan=$_POST['ten-do-an'];
                $giangvien=$_POST['giang-vien'];
                $tendetai=$_POST['ten-de-tai'];
                $ngaybatdau=$_POST['ngay-bat-dau'];
                $sql="SELECT iD FROM giangvien WHERE fullName='$giangvien'";
                $result=$mysqli->query($sql);
                while($row=$result->fetch_assoc()){
                     $idgiangvien=$row['iD'];
                }
                $sql="INSERT INTO doan(tenDoAn,tenDeTai, ngayBatDau, iD) VALUES ('$tendoan','$tendetai','$ngaybatdau','$idgiangvien')";
                $mysqli->query($sql);
                $mysqli->close();
                header("Location: gdsinhvien.php");
            }
        ?>
    </form>
</div>

</body>
</html>
