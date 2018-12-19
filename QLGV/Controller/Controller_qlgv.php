<?php
include('Model/m_qlgv.php');
include('Controller/Controller.php');
      class c_qlgv extends Controller{
       function index(){
          $m_qlgv = new m_qlgv();
          $qlgv = $m_qlgv->getQLGV();
          $arrayName = array('qlgv'=>$qlgv);
         $this->returnView('listinfor',$arrayName);
        }
      }

 ?>
