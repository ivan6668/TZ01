<?php

require_once('connect.php');

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/slick.css" />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <section class="header">
        <div class="container-main">
            <div class="header__inner">
                <a class="logo" href="#">
                    <img class="logo__link" src="images/logo/lg.svg" alt="">
                </a>
                <nav class="menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__list-link" href="">Тарифы</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__list-link" href="">Калькулятор</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__list-link" href="">Скачать</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__list-link" href="">Галлерея</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__list-link" href="">Партнеры</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__list-link" href="">Контакты</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__list-link signin" href="">Вход/Регистрация</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>


    <section class="header-bg">
        <div class="container-main">
            <div class="header-bg__inner">
                <?php
                $sql = 'SELECT * FROM tariffs';
                $result = mysqli_query($connect, $sql);
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="header-bg__block">
                        <h1 class="header-bg__title"><?php echo $row['title']; ?></h1>
                        <div class="header-bg__text"><?php echo $row['state']; ?></div>
                        <div class="header-bg__discription"><?php echo $row['descrip']; ?></div>
                        <div class="tariffs__btn" style="margin-left: 21px;">
                            <a class="tariffs__btn-link modal-btn" data-toggle="modal" data-target="#myModal<?php echo $row['id'] ?>">Купить</a>
                        </div>
                    </div>

                    <div id="myModal<?php echo $row['id'] ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">X</button>
                                </div>
                                <div class="modal-body">
                                    <h2 style="color: #000;">Название: <?php echo $row['title']; ?></h2>
                                    <h3 style="color: #000;">Описание: <?php echo $row['state']; ?></h3>
                                    <p style="color: #000; ">Характеристика: <?php echo $row['descrip']; ?></p>


                                    <form method="POST">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">ФИО</label>
                                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Телефон</label>
                                            <input name="phone" type="text" class="form-control tel" id="exampleInputPassword1">
                                            <div id="emailHelp" class="form-text">*Введите телефон</div>
                                        </div>
                                        <div class="mb-3 form-check">
                                
                                        </div>
                                        <button name="save" type="submit" class="btn btn-primary">Отправить</button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $i++;
                }
                ?>
            </div>
        </div>
    </section>



    <section class="slider">
       
        <div class="container-main">
            <div class="slider__inner">
                <div class="slider__content">
                    <h1 class="slider__title">НОВОСТИ</h1>

                    <div class="slider__main">
                        <div class="slider__box">
                            <h2 class="slider__text-slogan">Скидки новым клиентам!</h2>
                            <div class="slider__block">
                                <div class="slider__descrip">В честь открытия новой супер платформы, наша компания
                                    объявляет
                                    аукцион невиданной щедрости!</div>
                                <div class="slider__group-text">
                                    <li>Всем клиентам купившим подписку до 07.07.2022 скидка 1% !!!</li>
                                    <li>Старые клиенты получают самое большое ни-че-го</li>
                                    <li>Рожденным в СССР доступ к ГАЗ - Волга - бесплатен!!</li>
                                </div>
                            </div>

                            <div class="slider__time">01.07.2021</div>
                        </div>


                        <div class="slider__box">
                            <h2 class="slider__text-slogan">Скидки новым клиентам!</h2>
                            <div class="slider__block">
                                <div class="slider__descrip">В честь открытия новой супер платформы, наша компания
                                    объявляет
                                    аукцион невиданной щедрости!</div>
                                <div class="slider__group-text">
                                    <li>Всем клиентам купившим подписку до 07.07.2022 скидка 1% !!!</li>
                                    <li>Старые клиенты получают самое большое ни-че-го</li>
                                    <li>Рожденным в СССР доступ к ГАЗ - Волга - бесплатен!!</li>
                                </div>
                            </div>

                            <div class="slider__time">01.07.2021</div>
                        </div>


                        <div class="slider__box">
                            <h2 class="slider__text-slogan">Скидки новым клиентам!</h2>
                            <div class="slider__block">
                                <div class="slider__descrip">В честь открытия новой супер платформы, наша компания
                                    объявляет
                                    аукцион невиданной щедрости!</div>
                                <div class="slider__group-text">
                                    <li>Всем клиентам купившим подписку до 07.07.2022 скидка 1% !!!</li>
                                    <li>Старые клиенты получают самое большое ни-че-го</li>
                                    <li>Рожденным в СССР доступ к ГАЗ - Волга - бесплатен!!</li>
                                </div>
                            </div>
                            <div class="slider__time">01.07.2021</div>
                        </div>


                        <div class="slider__box">
                            <h2 class="slider__text-slogan">Скидки новым клиентам!</h2>
                            <div class="slider__block">
                                <div class="slider__descrip">В честь открытия новой супер платформы, наша компания
                                    объявляет
                                    аукцион невиданной щедрости!</div>
                                <div class="slider__group-text">
                                    <li>Всем клиентам купившим подписку до 07.07.2022 скидка 1% !!!</li>
                                    <li>Старые клиенты получают самое большое ни-че-го</li>
                                    <li>Рожденным в СССР доступ к ГАЗ - Волга - бесплатен!!</li>
                                </div>
                            </div>
                            <div class="slider__time">01.07.2021</div>
                        </div>
                    </div>
                </div>
                <div class="slider__bg-img">
                    <img class="slider__img" src="images/slider/sl.svg" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="tariffs">
        <div class="container-main">
            <div class="tariffs__inner">
                <h1 class="tariffs__title">ТАРИФЫ</h1>
                <p class="tariffs__text">Вы можете выбрать подходящий
                    именно вам тарифный план </p>
            </div>

            <div class="tariffs__inner-group">
                <?php
                $sql = 'SELECT * FROM tariffsv2';
                $result = mysqli_query($connect, $sql);
                $i = 1;
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="tariffs__box">
                        <div class="tariffs__content-top">
                            <div class="tarrifs__title-top"><?php echo $row['title']; ?></div>
                            <div class="tariffs__descr-top"><?php echo $row['state']; ?></div>
                        </div>
                        <div class="tariffs__content-bot">
                            <div class="tariffs__money"><?php echo $row['price']; ?></div>
                            <p class="tariffs__enum"><?php echo $row['text1']; ?></p>
                            <p class="tariffs__enum"><?php echo $row['text2']; ?></p>
                            <p class="tariffs__enum"><?php echo $row['text3']; ?></p>
                            <p class="tariffs__enum"><?php echo $row['text4']; ?></p>
                            <div class="tariffs__btn">
                                <a class="tariffs__btn-link modal-btn" data-toggle="modal" data-target="#myModal_two<?php echo $row['id'] ?>">Купить</a>
                            </div>

                        </div>
                    </div>

                    <div id="myModal_two<?php echo $row['id'] ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">X</button>
                                </div>
                                <div class="modal-body">
                                    <h2 style="color: #000;">Название: <?php echo $row['title']; ?></h2>
                                    <h3 style="color: #000;">Описание: <?php echo $row['state']; ?></h3>
                                    <div class="tariffs__money"><p>Цена:</p>  <?php echo $row['price']; ?></div>
                                    <p><?php echo $row['text1']; ?></p>
                                    <p><?php echo $row['text2']; ?></p>
                                    <p><?php echo $row['text3']; ?></p>
                                    <p><?php echo $row['text4']; ?></p>











                                    <form method="POST">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">ФИО</label>
                                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Телефон</label>
                                            <input name="phone" type="text" class="form-control tel" id="exampleInputPassword1">
                                            <div id="emailHelp" class="form-text">*Введите телефон</div>
                                        </div>
                                        <div class="mb-3 form-check">
                                
                                        </div>
                                        <button name="save" type="submit" class="btn btn-primary">Отправить</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    $i++;
                }
                ?>


            </div>
        </div>
    </section>


    <section class="abotus">
        <div class="container">
            <div class="aboutus__inner">
                <div class="abotus__title">О нас</div>
                <p class="abotus__descr">Наша компания уже более 10 лет предоставляет онлайн доступ к самой актуальной информации по подбору запчастей и обслуживанию автомобилей</p>
                <p class="abotus__descr">Для доступа к онлайн каталогам мы применяем самые последние компьютерные технологии, что позволяет Нашим клиентам получать информацию по запчастям и обслуживанию 24/7 из любой точки мира</p>
                <p class="abotus__descr">
                    Наше решение не требует дополнительной настройки и специальных технических знаний для запуска и использования, все максимально просто и понятно.</p>
            </div>
        </div>
    </section>


    <?php



if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $query = "INSERT INTO clients (name, phone) VALUES ('$name', '$phone')";
    $result = mysqli_query($connect, $query);


}
?>









    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/popap.js"></script>

    <!-- popap -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <script>
        window.addEventListener("DOMContentLoaded", function() {
            [].forEach.call(document.querySelectorAll('.tel'), function(input) {
                var keyCode;

                function mask(event) {
                    event.keyCode && (keyCode = event.keyCode);
                    var pos = this.selectionStart;
                    if (pos < 3) event.preventDefault();
                    var matrix = "+7 (___) ___ ____",
                        i = 0,
                        def = matrix.replace(/\D/g, ""),
                        val = this.value.replace(/\D/g, ""),
                        new_value = matrix.replace(/[_\d]/g, function(a) {
                            return i < val.length ? val.charAt(i++) || def.charAt(i) : a
                        });
                    i = new_value.indexOf("_");
                    if (i != -1) {
                        i < 5 && (i = 3);
                        new_value = new_value.slice(0, i)
                    }
                    var reg = matrix.substr(0, this.value.length).replace(/_+/g,
                        function(a) {
                            return "\\d{1," + a.length + "}"
                        }).replace(/[+()]/g, "\\$&");
                    reg = new RegExp("^" + reg + "$");
                    if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
                    if (event.type == "blur" && this.value.length < 5) this.value = ""
                }

                input.addEventListener("input", mask, false);
                input.addEventListener("focus", mask, false);
                input.addEventListener("blur", mask, false);
                input.addEventListener("keydown", mask, false)

            });

        });
    </script>

    <script src="js/script.js"></script>


</body>

</html>