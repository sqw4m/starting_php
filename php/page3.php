<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <script src="../js/bootstrap/jquery-3.5.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Задача 3</title>

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
<body id="bodyTask3">
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
                        <li class="nav-item">
                            <a class="nav-link" href="page2.php"
                               title="Трамваи">Задача 2</a>
                        </li>
                        <li class="nav-item active">
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
            <h3>Задача 3</h3>
            <p class="text-justify">
                Обработка файла объектов в формате CSV.
                Объект – класс Планета (Солнечной системы) с закрытыми свойствами название,
                радиус, масса, количество спутников, расстояние до Солнца в а.е., фотография.
                Разработайте геттеры и сеттеры с выбросом исключений при невалидных данных.
                По кликам на кнопки типа «submit» реализуйте обработки:
            </p>
            <ul>
                <li>Вывод данных из файла на страницу с упорядочиванием по расстоянию</li>
                <li>Вывод данных из файла на страницу с упорядочиванием по алфавиту</li>
                <li>Вывод данных из файла на страницу с упорядочиванием по массе</li>
            </ul>
            <br/><br/>
            <h3 class="text-center">Планеты</h3>
            <div class="btn-group text-center" role="group" aria-label="Basic example">
                <form method="post" action="page3.php"><input type="submit" name="sortByDistance" class="btn btn-dark" value="По расстоянию"></form>
                <form method="post" action="page3.php"><input type="submit" name="sortByName" class="btn btn-primary" value="По алфавиту"></form>
                <form method="post" action="page3.php"><input type="submit" name="sortByWeight" class="btn btn-danger" value="По массе"></form>
            </div>
            <br/><br/>
            <?php
            require_once("../models/Planet.php");
            require_once("../models/ListPlanets.php");

            $tbodyPlanets = new ListPlanets();

            if (isset($_POST['sortByDistance'])){
                $tbodyPlanets->sortByDistance();
            }
            if (isset($_POST['sortByName'])){
                $tbodyPlanets->sortByName();
            }
            if (isset($_POST['sortByWeight'])){
                $tbodyPlanets->sortByWeight();
            }
            echo "<table class='table table-dark table-hover'>
                    <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Радиус, км</th>
                        <th>Масса, тонн</th>
                        <th>Количество спутников, шт</th>
                        <th>Расстояние до Солнца, а.е.</th>
                        <th>Фотография</th>
                    </tr>
                    </thead>
                    <tbody>
                        $tbodyPlanets
                    </tbody>
                 </table>";

            ?>
        </article>
    </section>
</main>
</body>
</html>