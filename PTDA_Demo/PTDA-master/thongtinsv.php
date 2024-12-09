
<?php
    include("../connection.php");
?>
<style>
  .table {
  width: 100%;
  border-collapse: collapse;
  .table-hover tbody tr:hover {
  background-color: rgba(0, 0, 0, 0.075);
}

.table-bordered th,
.table-bordered td {
  border: 1px solid #dee2e6;
}

.table th,
.table td {
  padding: 1rem;
}

.table.table-hover.table-bordered.js-copytextarea {
  margin-bottom: 1rem;
  width: 100%;
}

#sampleTable {
  width: 100%;
  border-collapse: collapse;
}
/* Bỏ gạch chân và đổi màu cho breadcrumb */
.app-breadcrumb.breadcrumb.side .breadcrumb-item a {
  text-decoration: none; /* Bỏ gạch chân */
}
}
</style>
<table id="sampleTable" class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="1"
              id="sampleTable">
              <thead>
                <tr>
                  <th height="50">Mã sinh viên</th>
                  <th width="300">Họ và tên</th>
                  <th >Giới tính</th>
                  <th width="200">Địa chỉ</th>
                  <th>Lớp</th>
                  <th>Khoá</th>
                  <th>Khoa</th>
                  <th width="150">Số điện thoại</th>
                  <th width="100">Tính năng</th>
                </tr>
                <?php
                    $sqlkk="SELECT * FROM user";
                    $result=$mysqli->query($sqlkk);
                    while($row=$result->fetch_assoc()){
                ?>
                <tr>
                  <td style="padding-left: 20px;" height="50"><?php echo($row['iD'])?></td>
                  <td style="padding-left: 20px;"><?php  echo($row['fullName'])?></td>
                  <td style="padding-left: 20px;"><?php  echo($row['gender'])?></td>
                  <td style="padding-left: 20px;"><?php  echo($row['address'])?></td>
                  <td style="padding-left: 20px;"><?php  echo($row['class'])?></td>
                  <td style="padding-left: 20px;"><?php  echo($row['sttKhoa'])?></td>
                  <td style="padding-left: 20px;"><?php  echo($row['khoa'])?></td>
                  <td style="padding-left: 20px;"><?php  echo($row['sDt'])?></td>
                  <td style="align-items: center; text-align: center;" width="100">
                    <Button >Xem chi tiet</Button>
                  </td>
                </tr>
                
                <?php
              }?>
              </thead>
            </table>

