<?php
#1
$principal = 588;
$rate = 0.7;
$time = 8;

$Simple_interest = ($principal*$rate*$time)/100;
echo "Simple interest is $Simple_interest.";
echo "<br>";

#2
$a =4;
$b =7;
echo "Before swapping a = $a and b = $b";
echo "<br>";
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
echo "After swapping a = $a and b = $b";
echo "<br>";

#3
$year = 2000;
if((($year % 100 !== 0) and ($year % 4 === 0)) ||($year % 400 === 0) ){
     echo "$year is a leap year.";
     echo "<br>";
}
else{
    echo "$year is not a leap year.";
    echo "<br>";
}

#4
$num = 5;
$factorial = 1;

for ($i = 1; $i<=$num; $i++) {
    $factorial *= $i;
}

echo "Factorial of $num is: $factorial";
echo "<br>";

#5
echo "Prime number from 1 to 50 are : ";
for ($num1 = 2; $num1 <= 50; $num1++) {
    $isPrime = true;
    for ($i = 2; $i <= sqrt($num1); $i++) {
        if ($num1 % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num1 . " ";
    }
}
echo "<br>";

#6
echo "Star: ";
echo"<br>";
for($i = 5; $i>=0; $i--){
    for($j = 1; $j<=$i; $j++){
        echo "*";
    }
    echo"<br>";
}
echo"<br>";

echo "Number: ";
$num1 = 1;
echo"<br>";
for($i = 1; $i<=4; $i++){
    for($j = 1; $j<=$i; $j++){
        echo $num1 . " ";
        $num1++;
    }
    $num1 = 1;
    echo"<br>";
}
echo "<br>";

echo "Alphabet: ";
$ch = 'A';
echo"<br>";
for($i = 1; $i<=4; $i++){
    for($j = 1; $j<=$i; $j++){
        echo $ch . " ";
    }
    $ch++;
    echo"<br>";
}
echo"<br>";
?>
