<?php
    if(isset($_GET['key'])){
      $key = $_GET['key'];
      $table = "thanhvien";
      $data_search = $db->SearchData($table,$key);
    }
      include('View/thanhvien/search_user.php');


 ?>
