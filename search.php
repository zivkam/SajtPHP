<?php 

    require_once 'adminMenuLogic.php';
    $model = new Model();

    if(isset($_POST['search'])){        
        $vinyls = $model->searchVinyls($_POST['search']);
        echo json_encode($vinyls);
    }
    