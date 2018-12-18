<?php
    if(isset($_GET['action'])){
      $action = $_GET['action'];
    }
    else {
      $action = '';
    }

    switch ($action) {
      case 'list':
         include('Controller/Controller_CBGV.php');
         break;
      case 'add':
        include('Controller/Controller_add_cbgv.php');
        break;
        default :
        include('View/layout.php');


    }


 ?>
