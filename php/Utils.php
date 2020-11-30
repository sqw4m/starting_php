<?php
    // генерация случайного вещественного числа
    function random_float ($min,$max) {
        return ($min+lcg_value()*(abs($max-$min)));
    } // random_float