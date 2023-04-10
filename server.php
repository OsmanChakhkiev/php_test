<?php


// Задача 1.

$age = 10;
function age ($age) {
    // 1.
    if ($age < 18)
        echo 'Вы не совершеннолетний', "\n";
    if ($age >= 18)
        echo 'Вы взрослый', "\n";
    // 2.
    if ($age % 2 ===0) {
        echo 'Число четное';
    }
    if ($age % 2 !=0) {
        echo 'Число нечетное';
    }
}

echo age($age);


// Задача 2.

    // 1.

    $dayOfWeek = 7;

    switch ($dayOfWeek) {
        case 1:
            echo 'Monday';
            break;

        case 2:
            echo 'Tuesday';
            break;

        case 3:
            echo 'Wednesday';
            break;

        case 4:
            echo 'Thursday';
            break;

        case 5:
            echo 'Friday';
            break;

        case 6:
            echo 'Saturday';
            break;

        case 7;
            echo 'Sunday';
            break;
    }

    // 2.

    $month = 11;

    switch ($month) {
        case 2:
            echo 'В этом месяце 28 дней';
            break;

        case 4:
        case 6:
        case 9:
        case 11:
            echo 'В этом месяце 30 дней';
            break;

        case 1:
        case 3:
        case 5:
        case 7:
        case 8:
        case 10:
        case 12:
            echo 'В этом месяце 31 день';
            break;
    }






































