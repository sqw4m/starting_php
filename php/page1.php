<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />
    <script src="../js/bootstrap/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap/jquery.cookie.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Задача 1</title>

    <!-- подключение внешних таблиц стилей  -->
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- картинка для отображения в заголовке вкладки браузера -->
    <link rel="shortcut icon" href="../imgs/alien.png" type="image/x-icon" />
    <link rel="icon" href="../imgs/alien.png" type="image/x-icon" />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
            crossorigin="anonymous"></script>
    <script src="../js/bootstrap/jquery.cookie.js"></script>
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
                        <li class="nav-item active">
                            <a class="nav-link" href="page1.php"
                               title="Товары">Задача 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page1AddGood.php"
                               title="Добавить новый товар">Добавить товар</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page2.php"
                               title="Трамваи">Задача 2</a>
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
            <h3>Задача 1</h3>
            <p class="text-justify">
                Создать класс <b>Goods</b> (товар).
                В классе должны быть представлены поля: наименование товара, дата оформления (прихода),
                цена товара, количество единиц товара, номер накладной, по которой товар поступил на склад.
            </p>
            <p class="text-justify">
                Реализовать методы изменения цены товара, изменения количества товара (увеличения и уменьшения),
                вычисления стоимости товара.
                Разработать форму добавления/редактирования товара. Использовать __toString().
            </p>
            <p class="text-justify">
                Добавление товара реализовать при помощи клонирования.
            </p>
            <p class="text-justify">
                Реализовать массив товаров, добавление в массив, удаление из массива.
                Данные по товарам охранять в файле в формате CSV.
                Также требуется выводить таблицу товаров, итоговую сумму хранимых товаров.
            </p>
            <br/><br/>
            <h3 class="text-center">Товары</h3>
            <?php
            require_once("../models/Good.php");
            require_once("../models/ListGoods.php");

            $tbodyGoods = new ListGoods();

            if (isset($_POST['addGood'])){
                $name = htmlentities(($_POST['name'])) ? htmlentities(($_POST['name'])) : "Без названия";
                $acceptDate = htmlentities(($_POST['acceptDate'])) ? htmlentities(($_POST['acceptDate'])) : "Без даты";
                $price = htmlentities(($_POST['price'])) ? htmlentities(($_POST['price'])) : 999999;
                $quantity = htmlentities(($_POST['quantity'])) ? htmlentities(($_POST['quantity'])) : 999;
                $invoice = htmlentities(($_POST['invoice'])) ? htmlentities(($_POST['invoice'])) : "Без накладной";

                $good = new Good(
                    $name,
                    $acceptDate,
                    $price,
                    $quantity,
                    $invoice
                );
                $tbodyGoods->addGood($good);
            }


            echo "<table class='table table-dark table-hover'>
                    <thead>
                    <tr>
                        <th>Наименование</th>
                        <th>Дата прихода</th>
                        <th>Цена</th>
                        <th>Количество</th>
                        <th>Накладная№</th>
                    </tr>
                    </thead>
                    <tbody>
                        $tbodyGoods
                    </tbody>
                 </table>"
            ?>
        </article>
    </section>
</main>
</body>
</html>
