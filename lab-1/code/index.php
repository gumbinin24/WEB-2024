<?php

echo "\n";
echo "Num 1";

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings ";


// Write your code here:
$oder =& $very_bad_unclear_name;
$oder .= "Why should I apologize for being a monster? Has anyone ever apologized for turning me into one of them?";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

echo "\nNum 2\n";

#time: 19:33
$minutes = 33;
echo $minutes;

$tochka = 10.5;
echo "\n";

echo $tochka;
echo "\n";

echo $minutes - $tochka - $tochka;
echo "\n";


$last_month = 1187.23;
$this_month = 1089.98;

echo $last_month - $this_month;

echo "\nNum 11\n";

$num_languages = 4;
$month = 11;
$days = $month * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;

echo "\nNum 12\n";
echo 8**2;


echo "\nNum 13\n";
#time: 19:47
$my_num = 1947;
$answer = $my_num;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;

echo "\nNum 14\n";
$a = 10;
$b = 3;
echo $a % $b;
echo "\n";
echo "Делится ли $a на $b без остатка? ";
if ($a % $b == 0) {
    echo "Делится, " . $a / $b;
} else {
    echo "Делится с остатком, остаток от деления $a на $b будет равен " . $a % $b;
}
echo "\n";
$at = pow(2,10);
echo "2 в степени 10 равно: " .$at;
echo "\n";
echo "корень из числа 245 равен: " .sqrt(245);
echo "\n";

$summa = 0;
$numbers = array(4, 2, 5, 19, 13, 0, 10);
foreach ($numbers as $value) {
    $summa += pow($value, 2);
}
echo "корень из суммы квадратов чисел 4, 2, 5, 19, 13, 0, 10 равен: " .sqrt($summa);
echo "\n";
$s = round(sqrt(379));
$ss = round(sqrt(379), 1);
$sss = round(sqrt(379), 2);
$ans = array($s, $ss, $sss);
echo "квадратный корень из 379, округленный до целых, десятых, сотых равен соответственно: ";
echo "\n";
echo $s;
echo "\n";
echo $ss;
echo "\n";
echo $sss;
echo "\n";
$gg = array("round" => round(sqrt(587)), "ceil" => ceil(sqrt(587)));
echo "квадртаный корень из 587, округленный в большую сторону равен: " .$gg["round"];
echo "\n";
echo "квадртаный корень из 587, округленный в меньшую сторону равен: " .$gg["ceil"];
echo "\n";



