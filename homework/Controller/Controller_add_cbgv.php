<?php

    if(isset($_POST['add_cbgv'])) {
      $name = $_POST['hoten'];
      $date = $_POST['ngaysinh'];
      $country = $_POST['quequan'];
      $luongcung = $_POST['luongcung'];
      $luongphat = $_POST['luongphat'];
      $luongthuong = $_POST['luongthuong'];
      $sum = $luongcung + $luongthuong ;
      $luongthuclinh = $sum - $luongphat;
      if($name != null && $date != null && $country != null && $luongcung !== null)
      {
      $db->addData($name,$date,$country,$luongcung,$luongthuong,$luongphat,$luongthuclinh);
        echo "<div class='alert alert-success'>
    <strong>Success!</strong> Dữ liệu bạn nhập đã được insert thành công
    </div>";
      }
      else {
        echo "<div class='alert alert-danger'>
    <strong>Danger!</strong>Vui lòng kiểm tra lại thông tin.
    </div>";
      }
    }
     include('View/view_add_cbgv.php');



 ?>
