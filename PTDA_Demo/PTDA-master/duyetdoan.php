
<!-- <?php
    include("../connection.php");
    ?> -->
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
    <script>
        function vetrangchu(){
          location.reload();
        }
    </script>
    <table id="sampleTable" class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0" border="1"
                  id="sampleTable">
                  <thead>
                    <tr>
                      <th height="50">Mã đồ án</th>
                      <th width="100">Tên đồ án</th>
                      <th width="300">tên đề tài</th>
                      <th width="200">Trạng thái</th>
                      <th width="150">Ngày bắt đầu</th>
                      <th>Tính năng</th>
                    </tr>
                    <tr>
                    <?php
                    $sql="SELECT * FROM doan WHERE trangThai=0";
                    $result=$mysqli->query($sql);
                    while($row=$result->fetch_assoc()){
                        ?>
                        <tr>
                        <td style="padding-left: 20px;" height="50"><?php echo($row['maDoAn'])?></td>
                        <td style="padding-left: 20px;"><?php echo($row['tenDoAn'])?></td>
                        <td style="padding-left: 20px;"><?php echo($row['tenDeTai'])?></td>
                        <td style="padding-left: 20px;"><?php echo($row['trangThai'])?></td>
                        <td style="padding-left: 20px;"><?php  echo($row['ngayBatDau'])?></td>
                        <td style="align-items: center; text-align: center;" width="100">
                            <form method="POST">
                            <Button type="submit" name="duyet" onclick="vetrangchu()" value='<?php echo $row['maDoAn']; ?>'>Duyệt</Button>
                            </form>
                            
                        </td>
                        </tr>
                        
                        <?php
                    }?>
                    </tr>
                    <?php
                      if(isset($_POST['duyet'])){
                        $mada=$_POST['duyet'];
                        $sqlduyet="UPDATE doan SET trangThai=1 WHERE maDoAn='$mada'";
                        $mysqli->query($sqlduyet);
                        
                      }
                      ?>
                  </thead>
                </table>
    
    