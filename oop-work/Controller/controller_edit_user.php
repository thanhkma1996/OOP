
<?php

    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $table = "thanhvien";
      $data= $db->getDataID($table,$id);

      if(isset($_POST['update_user'])) {
        $name = $_POST['name_user'];
        $date = $_POST['date_user'];
        $country = $_POST['country_user'];

        if($db->updateData($id,$name,$date,$country)){
          header('location:index.php?controller=thanh-vien&action=list');
        }
      }
    }

    include('View/thanhvien/view_edit_user.php');




 ?>
