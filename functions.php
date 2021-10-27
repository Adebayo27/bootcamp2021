<?php
// function f1(int $int, float $float, String $string)
// {
//     $converted = (int) $float / 1000;
//     echo $converted . $string;

// }
// // f1(2, 2.4, 'fff');

// function dataType($something)
// {
//     echo gettype($something);
// }
$arr = [
    1,
    [
        2,
        3,
        [
            4,
            5,
            [6, 7],
            8
        ],
        9
    ],
    10
];

function mulA(array $something)
{
    foreach ($something as $k) {
        if (is_array($k)) {
            mulA($k);
        } else {
            echo $k . '<br>';
        }
    }
}


// mulA($arr);

function calculator($a, $b, $user_operator)
{
    $ourA = (float) $a;
    $ourB = (float) $b;
    switch ($user_operator) {
        case '+':
            return $ourA + $ourB;
            break;
        case '-':
            return $ourA - $ourB;
            break;
        case '*':
            return $ourA * $ourB;
            break;
        case '/':
            return $ourA / $ourB;
            break;
        case '%':
            return $ourA % $ourB;
            break;

        default:
            return 'Boya keni nice day';
            break;
    }
}

echo calculator('1.8', 3, 'k');
