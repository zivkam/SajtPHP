<?php

    include "adminMenuLogic.php";
    $model=new Model();
    $vinyl_id=$_REQUEST['vinyl_id'];
    $delete=$model->delete($vinyl_id);

    if($delete){
        echo "<script>alert('успешно обрисано');</script>";
        echo "<script>window.location.href='adminMenu.php';</script>";
    }


?>