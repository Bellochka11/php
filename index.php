<?php

function arithmetic_operations( int $num1, int $num2, string $operation ): int   {
    $res = 0;
    if ($operation == "+") {
           $res = $num1 + $num2;
    }
    elseif ($operation == "-") {
        $res = $num1 - $num2;
    }
    elseif ($operation == "/") {
        if ($num2 === 0) {
            echo "делить на ноль нельзя";
            return ' ';
        }
        $res = $num1 / $num2;
    }
    else {
        $res = $num1 * $num2;
    }
    return $res;
}
function arithmetic_operations_2( int $num1, int $num2, string $operation ): int   {
    $res = 0;
    switch ($operation) {
        case '+':
            $res = $num1 + $num2;
            break;
        case '-':
            $res = $num1 - $num2;
            break;
        case '/':
            $res = $num1 / $num2;
            break;
        case '*':
            $res = $num1 * $num2;
            break;
    }
    return $res;
}
// $res = arithmetic_operations( 2, 5, '+' );
// $res_2 = arithmetic_operations( 10, 5, '-' );
// echo $res . PHP_EOL;  
// echo $res_2 . PHP_EOL;

$cities = [
    "Московская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Рязань", "Корабли", "Сапожок"],
];

// foreach ($cities as $key => $value) {
//     echo $key ." : ";
//     foreach ($value as $key => $values) {
//         echo $values . " ";
//     }
//     echo".";
// }
$translitMap = [
    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g',
    'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
    'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
    'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
    'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts',
    'ч' => 'ch', 'ш' => 'sh', 'щ' => 'shch', 'ъ' => '',
    'ы' => 'y', 'ь' => '', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
];
$word = 'Привет';
function transliterate(string $str, $translitMap): string{
    $str = strtr($str, $translitMap);
    return $str;
}
$res_2 = transliterate($word, $translitMap);
echo $res_2;

