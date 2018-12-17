<?php
    //namespace
    namespace ConNguoi;

      class ConNguoi
      {
          private $name = 'Con Người';

          public function getName()
          {
              return $this->name;
          }
      }

      // dịnh danh namespace

      use ConNguoi as People;

      $connguoi = new People\ConNguoi();
      echo $connguoi->getName();
      //kết quả: Con Người


 ?>
