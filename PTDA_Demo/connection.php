<?php
  $mysqli = new mysqLi("localhost","root","","quanlydoan");
  // Check connection
  if($mysqli)
    {
        mysqli_query($mysqli,"SET NAMES 'utf8' ");
    }
    else
    {
        echo 'Kết nối thất bại';
    }
?>