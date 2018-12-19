<?php
include('database.php');
    class M_qlgv extends Database {
        function getQLGV() {
          $sql = "select * from giaovien";
          $this->setQuery($sql);
		        return $this->loadAllRows();
        }

        function addData($name,$date,$country,$luongcung,$luongthuong,$luongphat,$luongthuclinh)
        {
          $sql = "insert into giaovien(id,name,date,country,luongcung,luongthuong,luongphat,luongthuclinh) values(null,?,?,?,?,?,?,?)";
          $this->setQuery($sql);
          $result = $this->execute(array($name,$date,$country,$luongcung,$luongthuong,$luongphat,$luongthuclinh));

        }

    }

 ?>
