<?php
    if(isset($_GET['action'])){
      $action = $_GET['action'];
    }
    else {
      $action = '';
    }

    switch ($action) {
      case 'add_user':
          include ('Controller/controller_add_user.php');
          break;
      case 'edit_user':
        include('Controller/controller_edit_user.php');
          break;

      case 'delete':
        include('Controller/controller_delete_user.php');
        break;
      case 'list':
         include('Controller/controller_list.php');
         break;
      case 'tim-kiem':
        include('Controller/controller_search.php');
        break;
        default :
        include('View/thanhvien/layout.php');


    }


 ?>
