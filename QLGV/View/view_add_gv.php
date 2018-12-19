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
  
  $db = new C_add_qlgv();

  if($name != NULL && $date != NULL && $country != NULL && $luongcung != NULL )
  {
  $db->c_addData($name,$date,$country,$luongcung,$luongthuong,$luongphat,$luongthuclinh);
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



 ?>


<div class="container">
<form action="" method="POST">
  <h3> Them thong tin </h3>
<table class="table table-bordered">

      <tr>
            <td>Name : </td>
            <td><input type="text" name="hoten"></td>
      </tr>

      <tr>
            <td>Date : </td>
            <td><input type="date" name="ngaysinh"></td>
      </tr>

      <tr>
            <td>Country : </td>
            <td><input type="text" name="quequan"></td>
      </tr>

      <tr>
            <td>Lương cứng : </td>
            <td><input type="text" name="luongcung"></td>
      </tr>

      <tr>
            <td>Lương thưởng </td>
            <td><input type="text" name="luongthuong"></td>
      </tr>


      <tr>
            <td>Lương phat </td>
            <td><input type="text" name="luongphat"></td>
      </tr>

      <tr>
            <td></td>
            <td><input type="submit" value="Them thong tin" name="add_cbgv"></td>
      </tr>
</table>
</form>
      <a href="index.php"> Quay lại trang chủ </a>
</div>
