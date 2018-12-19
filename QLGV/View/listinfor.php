<?php
      $qlcbgv = $data['qlgv'];
 ?>

<div class="container">
<form action="" method="POST">
  <h3> Thông tin lương CBNV </h3>
  <button class="btn btn-primary" type="submit"><a href='add.php' style="color:#fff;">Thêm mới</a></button>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Họ tên</th>
      <th scope="col">Ngày sinh</th>
      <th scope="col">Quê Quán</th>
      <th scope="col">Lương cứng(VND)</th>
      <th scope="col">Lương thưởng(VND) </th>
      <th scope="col">Lương phạt(VND)</th>
      <th scope="col">Lương thực lĩnh(VND)</th>
    </tr>
  </thead>
  <tbody>
    <?php
        foreach($qlcbgv as $datas)
        {
    ?>
    <tr>
      <th scope="row"><?php echo $datas->id; ?></th>
        <td><?php echo $datas->name; ?></td>
        <td><?php echo $datas->date; ?></td>
        <td><?php echo $datas->country; ?></td>
        <td><?php echo $datas->luongcung; ?></td>
        <td><?php echo $datas->luongthuong; ?></td>
        <td><?php echo $datas->luongphat; ?></td>
        <td><?php echo $datas->luongthuclinh; ?></td>
    </tr>
  <?php } ?>
  </tbody>
</table>
</form>
</div>
