<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
        font-family: Arial, sans-serif;
        background: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-image: url(https://tuyensinh.haui.edu.vn/static/uploads/albumImages/1523862552207.png);
        }
        .container {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        width: 300px;
        padding: 20px;
        }
        .form-container {
            background: rgba(255, 255, 255, 0.8); 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        .form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        input {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ddd;
            border-radius: 5px;
            outline: none;
        }

        input:focus {
            border-color: #007bff;
        }

        button {
            padding: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        p {
            font-size: 14px;
            text-align: center;
        }

        p a {
            color: #007bff;
            text-decoration: none;
        }

        p a:hover {
            text-decoration: underline;
        }

        .form-container p {
            margin-top: 15px;
        }
    </style>  

</head>
<body>
    <?php
    include("./connection.php");
    ?>
<div class="container">
    <form id="login-form" class="form" method="POST">
        <h2>Đăng Nhập</h2>
        <input name="username" type="text" placeholder="Tên đăng nhập" required>
        <input name="password"  type="password" placeholder="Mật khẩu" required>
        <button name="login" type="submit">Đăng Nhập</button>
        <?php
            if(isset($_POST["login"]))
            {
                $b=1;
                $username=$_POST['username'];
                $password=$_POST['password'];
                if($username=="admin" || $password=="12345"){
                    header("Location: ./PTDA/index.php");
                    $b=2;
                }
                $sql = "SELECT * FROM User Where username='$username' and password='$password' "; 
                $result = $mysqli->query($sql);
                if($result->num_rows==1){
                    header("Location: ./PTDA-master/gdsinhvien.php");
                    $b=2;
                }
                $sql="SELECT * FROM giangvien WHERE username='$username' and password='$password' ";
                $result = $mysqli->query($sql);
                if($result->num_rows==1){
                    header("Location: ./PTDA-master/TrangChuGiangVien.php");
                    $b=2;
                }
                if($b==1){
                    echo "Tai khoan khong chinh xac";
                }
            }
                $mysqli->close();
        ?>
        <p>Chưa có tài khoản? <a href="#">Đăng Ký</a></p>
      </form>
</div>
</body>
</html>




