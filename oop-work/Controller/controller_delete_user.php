<?php
if(isset($_GET['id'])){
  $id = $_GET['id'];
  $table = "thanhvien";
 $db->delete($id,$table);

  if($db->delete($id,$table)) {
      header('location:index.php?controller=thanh-vien&action=list');
  }
}


?>
