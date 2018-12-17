
<?php

    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $table = "thanhvien";
      $data= $db->getDataID($table,$id);
    }
      include('View/thanhvien/view_edit_user.php');



 ?>
