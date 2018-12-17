
<?php
    if(isset($_POST['add_user'])) {
      $name = $_POST['name_user'];
      $date = $_POST['date_user'];
      $country = $_POST['country_user'];
      if($name != null && $date != null && $country != null)
      {
      $db->addData($name,$date,$country);
        echo "<div class='alert alert-success'>
    <strong>Success!</strong> Dữ liệu bạn nhập đã được insert thành công
    </div>";
        header('location:index.php?controller=thanh-vien&action=list');
      }
      else {
        echo "<div class='alert alert-danger'>
    <strong>Danger!</strong>Vui lòng kiểm tra lại thông tin.
    </div>";
    header('location:View/thanhvien/layout.php');
      }
    }
     include('View/thanhvien/view_add_user.php');



 ?>
