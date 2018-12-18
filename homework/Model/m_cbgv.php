<?php
  include('db-config.php');
      class m_cbgv extends Configdatabase{
            public function addData($table,$colum,$record){
              private $table = "giaovien";
              private $colum = array('id','name','date','country','luongcung','luongthuong','luongphat','luongthuclinh');
              
                // return $this->execute($sql);
            }
      }
 ?>
