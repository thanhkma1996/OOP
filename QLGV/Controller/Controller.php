<?php
class Controller{

    public function returnView($loadView,$data=array())
    {
        include('View/layouts.php');
    }

}
?>
