<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <script src="../js/bootstrap/jquery-3.5.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Задача 2</title>

    <!-- подключение внешних таблиц стилей  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- картинка для отображения в заголовке вкладки браузера -->
    <link rel="shortcut icon" href="../imgs/alien.png" type="image/x-icon" />
    <link rel="icon" href="../imgs/alien.png" type="image/x-icon" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
            crossorigin="anonymous"></script>
</head>
<body>
<header class="container-fluid">
    <nav class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark">
                <a class="navbar-brand" href="pageLogin.html"><i class="fas fa-home"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="pageStart.php" title="Главная страница">
                                ДЗ на 28.11.2020
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page1.php"
                               title="Товары">Задача 1</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="page2.php"
                               title="Трамваи">Задача 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page2AddTram.php"
                               title="Добавить трамвай в список">Добавить трамвай</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page3.php"
                               title="Планеты">Задача 3</a>
                        </li>
                    </ul>
                </div>
                <form class="float-right" action="../index.php" method="post" >
                    <button class="btn btn-danger">Выход</button>
                </form>
            </nav>
        </div>
    </nav>
</header>
<main class="container">
    <section class="row">
        <article class="offset-1 col-10 bg-light">
            <h3>Задача 2</h3>
            <p class="text-justify">
                Создайте веб-приложение для решения следующей задачи:
            </p>
            <p class="text-justify">
                Разработайте иерархию:
                Интерфейс ТранспортноеСредство --> абстрактный класс ОбщественныйТранспорт --> класс Трамвай.
            </p>
            <p class="text-justify">
                Данные по трамваю вводить в форме, трамвай добавляем в массив,
                массив трамваев сохранять на сервере, в CSV-файле.
                Отображение массива трамваев – в таблице.
                Предусмотрите возможность добавления, удаления, изменения данных о конкретном трамвае.
            </p>
            <p class="text-justify">
                Некоторые рекомендуемые свойства трамвая: маршрут, пассажировместимость,
                фактическое количество пассажиров, текущая скорость.
                Некоторые рекомендуемые методы:
                начало движения, завершение движения, посадка пассажиров, высадка пассажиров.
            </p>
            <p class="text-justify">
                Очевидно, что посадка и высадка пассажиров не выполняются в процессе движения трамвая.
            </p>
            <p class="text-justify">
                Примените magic-методы __get(), __sett(), __toString() в классе Трамвай.
                Добавление трамвая в массив трамваев реализовать при помощи клонирования.
            </p>
            <br/><br/>
            <h3 class="text-center">Трамваи</h3>
            <?php
            require_once("../models/PublicTransport.php");
            require_once("../models/Vehicle.php");
            require_once("../models/Tram.php");
            require_once("../models/ListTrams.php");

            $tbodyTrams = new ListTrams();

            if (isset($_POST['addTram'])){
                $route = htmlentities(($_POST['route'])) ? htmlentities(($_POST['route'])) : "Без маршрута";
                $capacity = htmlentities(($_POST['capacity'])) ? htmlentities(($_POST['capacity'])) : 150;
                $currentNumPass = htmlentities(($_POST['currentNumPass'])) ? htmlentities(($_POST['currentNumPass'])) : 70;
                $currentSpeed = htmlentities(($_POST['currentSpeed'])) ? htmlentities(($_POST['currentSpeed'])) : 40;

                $tram = new Tram(
                    $route,
                    $capacity,
                    $currentNumPass,
                    $currentSpeed
                );
                $tbodyTrams->AddTram($tram);
            }


            echo "<table class='table table-dark table-hover'>
                    <thead>
                    <tr>
                        <th>Маршрут</th>
                        <th>Вместимость</th>
                        <th>Кол-во пассажиров</th>
                        <th>Текущая скорость</th>
                    </tr>
                    </thead>
                    <tbody>
                        $tbodyTrams
                    </tbody>
                 </table>"
            ?>
        </article>
    </section>
</main>
</body>
</html>