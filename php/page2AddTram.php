<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <script src="../js/bootstrap/jquery-3.5.1.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Добавить трамвай</title>

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
                        <li class="nav-item">
                            <a class="nav-link" href="page2.php"
                               title="Трамваи">Задача 2</a>
                        </li>
                        <li class="nav-item active">
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
            <h3 class="text-center">Добавить трамвай</h3>
            <?php
            require_once("../models/PublicTransport.php");
            require_once("../models/Vehicle.php");
            require_once("../models/Tram.php");
            require_once("../models/ListTrams.php");
            ?>
            <form action="page2.php" method="POST">
                <div class="form-group">
                    <label for="route">Маршрут</label>
                    <input type="text" class="form-control" id="route" name="route" placeholder="Введите название маршрута">
                </div>
                <div class="form-group">
                    <label for="capacity">Вместимость</label>
                    <input type="number" class="form-control" id="capacity" name="capacity" placeholder="150" min="5" max="250">
                </div>
                <div class="form-group">
                    <label for="currentNumPass">Кол-во пассажиров</label>
                    <input type="number" class="form-control" id="currentNumPass" name="currentNumPass" placeholder="30" min="1" max="250">
                </div>
                <div class="form-group">
                    <label for="currentSpeed">Текущая скорость</label>
                    <input type="number" class="form-control" id="currentSpeed" name="currentSpeed" placeholder="25" min="0" max="80">
                </div>
                <input name="addTram" type="submit" class="btn btn-primary" value="Добавить трамвай"/>
            </form>
        </article>
    </section>
</main>
</body>
</html>