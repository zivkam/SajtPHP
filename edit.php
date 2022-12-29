<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ГрамоФОНија</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <!--  -->

    <link rel="stylesheet" href="editStyle.css">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="containter-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=#>
                    <img src="images/логогл.png" class="image-logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-main">
                <ul class="nav navbar-nav navbar-right">


                    <li><a class="active" href="adminMenu.php">Назад</a></li>

                    <!-- ADMIN MENU -->
                    <?php if (!isset($_SESSION['id'])) {
                        echo "<li><a href='register.php'>Регистрација</a></li>
                        <li><a href='login.php'>Логовање</a></li>";
                    }
                    ?>


                    <?php if (isset($_SESSION['id'])) {
                        echo "<li><a href='logout.php'>Излогуј се</a></li>";
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->


    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" id="addVinylForm">
                    <!-- change vinyl -->
                    <?php

                    include_once "adminMenuLogic.php";
                    $model = new Model();
                    $vinyl_id = $_REQUEST['vinyl_id'];
                    $row = $model->edit($vinyl_id);

                    if (isset($_POST['update'])) {
                        if (isset($_POST['vinylname']) && isset($_POST['artist']) && isset($_POST['genre']) && isset($_POST['year'])) {
                            if (!empty($_POST['vinylname']) && !empty($_POST['artist']) && !empty($_POST['genre']) && !empty($_POST['year'])) {

                                $data['vinyl_id']=$vinyl_id;
                                $data['vinyl_name'] = $_POST['vinylname'];
                                $data['artist'] = $_POST['artist'];
                                $data['genre'] = $_POST['genre'];
                                $data['year'] = $_POST['year'];

                                $update=$model->update($data);

                                if($update){
                                    echo "<script>alert('Успешно направљена измена на плочи');</script>";
                                    echo "<script>window.location.href='adminMenu.php';</script>";
                                
                                }else{
                                    echo "<script>alert('Неуспешна измена!');</script>";
                                    echo "<script>window.location.href='edit.php.php';</script>";
                                }
                                

                            } else {
                                echo "<script>alert('empty');</script>";
                                
                            }
                        }
                    }

                    ?>

                    <form class="col-12" method="POST" action="">

                        <div class="form-group">
                            <h1>НАПРАВИ ИЗМЕНУ</h1>
                            <hr class="dbt">
                        </div>

                        <div class="form-group">
                            <h3>Назив плоче</h3>
                            <input type="text" name="vinylname" value="<?php echo $row['vinyl_name']; ?>" class="form-control" placeholder="Назив плоче">
                        </div>

                        <div class="form-group">
                            <h3>Извођач</h3>
                            <input type="text" name="artist" value=" <?php echo $row['artist']; ?>" class="form-control" placeholder="Извођач">
                        </div>

                        <div class="form-group">
                            <h3>Жанр</h3>
                            <input type="text" name="genre" value="<?php echo $row['genre']; ?>" class="form-control" placeholder="Жанр">
                        </div>

                        <div class="form-group">
                            <h3>Година</h3>
                            <input type="text" name="year" class="form-control" value="<?php echo $row['year']; ?>" placeholder="Година">
                        </div>

                        
                         <button type="submit" class="btn" name="update"><i class="fas fa-vinyl"></i>Потврди измене</button>

                    </form>
                    <!-- change vinyl -->
                </div>

                <div class="col-sm-6" id="table">
                    <!-- vinyls database -->
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Документација изабране грамофонске плоче</h1>
                                <hr class="dbt">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 mx-auto">
                                <?php
                                include_once "adminMenuLogic.php";
                                $model = new Model();
                                $book_id = $_REQUEST['vinyl_id'];
                                $row = $model->fetch_single($vinyl_id);
                                if (!empty($row)) {

                                ?>
                                    <div class="card">
                                        <div class="card-body">
                                            <p>Идентификациони број плоче: <?php echo  $row['vinyl_id']; ?></p>
                                            <p>Назив плоче: <?php echo $row['vinyl_name']; ?></p>
                                            <p>Извођач: <?php echo $row['artist']; ?></p>
                                            <p>Жанр: <?php echo $row['genre']; ?></p>
                                            <p>Година: <?php echo $row['year']; ?></p>
                                        </div>
                                    </div>
                                <?php
                                } else {
                                    echo "Нема унетих података!";
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                    <!--vinyl database -->
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="script.js"></script>


</body>

</html>