<?php

include_once "loginLogic.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма за логовање</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" type="text/css" href="loginStyle.css">
    <!-- copied links from index.php  -->

    <!-- copied links from index.php  -->
</head>

<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">

                <div class="col-12 user-img">
                    <img src="https://fitnesscentarshark.rs/slike/kontakt.png" alt="">
                </div>

                <form class="col-12" method="POST" action="loginLogic.php">


                    <?php if (isset($_GET['error'])) { ?>
                        <?php if ($_GET['error'] == "PasswordError") {
                            echo '<p class="error">Молимо Вас унесите шифру</p>';
                        } else if ($_GET['error'] == "UserNameError") {
                            echo '<p class="error">Молимо Вас унесите мејл</p>';
                        } else if($_GET['error'] == "UserNamePasswordError")
                        echo '<p class="error">Неисправан мејл или шифра!</p>';
                        ?>
                    <?php } ?>



                    <div class="form-group">
                        <input type="text" name="uname" class="form-control" placeholder="Унесите корисничко име">
                    </div>

                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Унесите шифру">
                    </div>

                    <button type="submit" class="btn"><i class="fas fa-sign-in-alt"></i>Улогуј се</button>

                </form>

                <div class="col-12 forgot">
                    <a href="index.php">Врати се на почетну страницу</a>
                </div>

            </div> <!-- End of modal content -->
        </div>
    </div>

</body>

</html>