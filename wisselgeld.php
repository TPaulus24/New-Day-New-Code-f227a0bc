  
<?php
// input
$input = intval ($argv[1]);
var_dump($input);
// alle monneyzz
$arry = array(
    500,
    200,
    100,
    50,
    20,
    10,
    5,
    2,
    1,
);
// aantal geld
foreach ($arry as $key) {
    If ($input >= $key) {
        $geld = floor ($input / $key);
        echo "$geld x €$key,-" . PHP_EOL;
        $input = $input % $key;
    }
};