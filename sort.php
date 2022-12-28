<?php 

    require_once 'adminMenuLogic.php';
    $model = new Model();

    if($_POST['sortType']){
        
        $vinyl = $model->sortVinylsByTitle();
        echo json_encode($vinyl);

    }
    