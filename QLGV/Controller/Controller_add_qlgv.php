<?php
      include('Model/m_qlgv.php');
      include ('Controller/Controller.php');
      class C_add_qlgv extends Controller{
        public function c_addData($name,$date,$country,$luongcung,$luongthuong,$luongphat,$luongthuclinh){
          $m_add = new M_qlgv();
          $add = $m_add->addData($name,$date,$country,$luongcung,$luongthuong,$luongphat,$luongthuclinh);
        }

       public function addqlgv()
        {
            $this->returnView('view_add_gv');
        }
      }

 ?>
