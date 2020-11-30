<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PHP</title>

    <!-- подключение внешних таблиц стилей  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- картинка для отображения в заголовке вкладки браузера -->
    <link rel="shortcut icon" href="imgs/alien.png" type="image/x-icon" />
    <link rel="icon" href="imgs/alien.png" type="image/x-icon" />
</head>
<body>
<?php
session_name("HW03");
session_start();           // начало сессии - при первом вызове, присоединение - при последующих
if (isset($_SESSION["timeStart"])){
    date_default_timezone_set('Europe/Moscow');
    $sessionData = array("session_name:".session_name(), "session_id:".session_id(),
        "session_start:".$_SESSION["timeStart"], "session_end:".date("H:i:s a"));

    $fp = fopen('uploaded/session.csv', 'a');

    fputcsv($fp, $sessionData, ';');

    fclose($fp);
}
// для удаления сессии необходимо
$_SESSION = [];
if (session_id() != "" || isset($_COOKIE[session_name()]))
    setcookie(session_name(), '', time()-10, '/');
session_destroy(); // удаление данных сессии на сервере
?>
<header class="container-fluid">
    <a href="php/pageStart.php" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">Вход</a>
</header>
<main class="container">
    <section class="row">
        <article class="offset-1 col-10 bg-light">
            <h3>Теоретическая часть</h3>
            <ul class="text-justify">
                <li>Введение в объектно-ориентированное программирование в PHP</li>
                <li>Конструктор и деструктор класса</li>
                <li>Свойства класса</li>
                <li>Методы класса</li>
                <li>Статические свойства и константы</li>
                <li>Статические методы класса</li>
                <li>Создание объектов классов, оператор new</li>
                <li>Работа с массивами объектов</li>
                <li>
                    Magic-методы классов – перегруженные геттер и сеттер __get(), __set(),
                    перегруженный вызов метода __call(),
                    формирование строкового представления объекта класса __toString()
                </li>
                <li>Наследование в PHP, абстрактные классы, абстрактные методы</li>
                <li>Интерфейсы и наследование в PHP</li>
                <li>Запрет наследования для классов, методов, ключевое слово final</li>
                <li>Клонирование объектов в PHP, ключевое слово clone, magic-метод __clone()</li>
                <li>Исключения в PHP, ключевые слова try, catch, finally</li>
                <li>Классы исключений, иерархия исключений</li>
                <li>Собственные классы исключений</li>
            </ul>
        </article>
    </section>
</main>

<script src="js/bootstrap/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
</body>
</html>