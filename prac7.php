<?php

if (function_exists('odd')) {
    echo 'Функция odd доступна.';
} else {
    echo 'Функция odd недоступна';
}

?>

<br>

<?php
    function odd($a){
        if ($a % 2 == 0) {
            echo('true');
        }
                else {
                    echo('false');
                }
}

odd(mt_rand(0,1000));

?>

<br>

<?php
function sum() {
    $SUM = 0;
    foreach (func_get_args() as $numbers) {      //func_num_args — возвращает элементы из аргументов
        $SUM += $numbers;
    }
    return $SUM;
}
echo (sum(10,100,1000,10000,100000));
?>