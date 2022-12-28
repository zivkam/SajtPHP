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
    <link rel="stylesheet" href="style.css">

    <!-- OWL CAROSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <!-- OWL CAROSEL -->

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


                    <li><a class="active" href="#">Почетна</a></li>

                    <!-- ADMIN MENU -->
                    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == "1") {
                        echo "<li><a href='adminMenu.php'>Админ мени</a></li>";
                    }
                    ?>

                    <?php if (!isset($_SESSION['id'])) {
                        echo "<li><a href='register.php'>Региструј се</a></li>
                        <li><a href='login.php'>Улогуј се</a></li>";
                    }
                    ?>


                    <?php if (isset($_SESSION['id'])) {
                        echo "<li><a href='logout.php'>Излогуј се</a></li>";
                    }
                    ?>

                    <?php if (isset($_SESSION['is_admin']) && $_SESSION['is_admin'] == "0") {
                        echo "<li><a href='vinyls.php'>Плоче</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <div id="home">
        <div class="landing-text">
            <h1>ГрамоФОНија</h1>
            <h3>Направи паузу, паузу која освежава!</h3>
        </div>
    </div>

    <div class="padding">
        <div class="container">
            <div class="row">

                <div class="col-sm-6">
                    <img src="images/онама.jpg">
                </div>

                <div class="col-sm-6 text-center">
                    <h2>О нама</h2>
                    <p class="lead">Музика даје тон, утиче на расположење, повезује људе, документује историју,
                         утиче на културу и једноставно чини живот бољим!
                          Уколико имате недоумице коју грамофонску плочу изабрати,
                        следите наше препоруке и нећете погрешити! ГрамоФОНија је ту за Вас! Олакшавамо Вам проналажење албума које волите 
                        и откривамо скривене класике који ће учинити да Ваша колекција изгледа
                         и звучи боље него икад! 
                    </p>
                
                </div>
            </div>
        </div>
    </div>




    <div class="padding">
        <div class="container">

            

            <div class="container-fluid mb-5">
  <div class="row">
    <div class="col-sm-4 col-md-4 aos-init aos-animate" data-aos="zoom-in">
            <div class="thumbnail" id="STR2">
              
              <div class="caption">
                <h3 class="eppn">10 плоча које треба да набавиш кад купиш грамофон</h3>
                <section id="banner-area">
                        <div class="owl-carousel owl-theme">

                            <div class="item">
                                <h2 class="titleName">Здравко Чолић</h2>
                                <img src="images/чола.jpg" alt="Banner1">
                            </div>
                            <div class="item">
                                <h2 class="titleName">Мајкл Џексон</h2>
                                <img src="images/џексон.jpg" alt="Banner1">
                            </div>
                            <div class="item">
                                <h2 class="titleName">Дино Мерлин</h2>
                                <img src="images/мерлин.jpg" alt="Banner1">
                            </div>
                            <div class="item">
                                <h2 class="titleName">Битлси</h2>
                                <img src="images/битлси.jpg" alt="Banner1">
                            </div>
                            <div class="item">
                                <h2 class="titleName">Магазин</h2>
                                <img src="images/магазин.jpg" alt="Banner1">
                            </div>
                            <div class="item">
                                <h2 class="titleName">Лед зепелин</h2>
                                <img src="images/лед.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Бијело дугме</h2>
                                <img src="images/бијелодугме.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Дејвид Боуи</h2>
                                <img src="images/дејвид.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Прљаво казалиште</h2>
                                <img src="images/казалиште.jpg" alt="Banner1">
                            </div>

                            <div class="item">
                                <h2 class="titleName">Пинк флојд</h2>
                                <img src="images/флојд.jpg" alt="Banner1">
                            </div>
                        </div>
                    </section>
                    <!-- OWL CAROSEL -->
                
              </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 aos-init aos-animate" data-aos="zoom-in">
                <div class="thumbnail" id="STR2">
                    <img src="images/плочее.jpeg" alt="" class="Poruka">
                    <div class="caption">
                      <h4 class="eppn">Реците нам</h4>
                      

<form>
<div class="form-group">
<label for="formGroupExampleInput">Које су Ваше препоруке?</label>
<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Унесите текст">
</div>
<div class="form-group">
<label for="formGroupExampleInput2">Који је Ваш омиљени албум?</label>
<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Унесите текст">
</div>
</form>
                    </div>
                  </div>
            </div>
        <div class="col-sm-4 col-md-4 aos-init aos-animate" data-aos="zoom-in">
                <div class="thumbnail" id="STR2">
                    <img src="images/слепи.jpg" alt="" class="Poruka">
                    <div class="caption">
                      <h4 class="eppn">Да ли сте знали</h4>
                      <p class="epp">Прва грамофонска плоча је имала специфичну улогу – 
                        била је то аудио-књига за слепе. Рана технологија снимања је била
                         веома лоша у репродуковању музике, те компаније које су их производиле
                          нису намеравале да их користе за музику јер су веровале да нико не жели
                           да слуша тако лош квалитет звука. </p>
                     
                    </div>
                  </div>
            </div>
  </div>

  </div>
          
        </div>
    
    </div>
   

    <div id="fixed">
    </div>


    <footer class="container-fluid text-center">
        <div class="row">
            <div class="col-sm-4">
                <h3>Запратите нас</h3>
                 <a href="#" class="fa fa-instagram"></a>
                 <a href="#" class="fa fa-youtube"></a>
                <a href="#" class="fa fa-facebook"></a>
                 <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-linkedin"></a>
               
            </div>
        </div>
    </footer>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <script src="script.js"></script>


</body>

</html>