<?php
#1 Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result.
$length  = 10;
$width = 2;
$area = $length * $width;
$perimeter = 2*($length + $width);

echo "Area of Rectangle = " . $area;
echo "<br>";
echo "Perimeter of Rectangle = ". $perimeter;
echo "<br>";

#2 Write a PHP script to calculate the VAT (Value Added Tax) over an amount
$price = 20.5;
$vat = $price * 0.15;

echo "VAT = " . $vat;
echo "<br>";

#3 Write a PHP script to find whether a given number is odd or even
$input = 34;
if($input % 2 == 0){
    echo $input . " is a even number.";
    echo "<br>";
}
else{
    echo $input . " is a odd number.";
    echo "<br>";
}

#4 Write a PHP script to find the largest number from three given numbers
$a = 56;
$b = 42;
$c = 89;
if($a > $b and $a > $c){
    echo $a . " is the largest number.";
    echo "<br>";
}
elseif($b > $a and $b > $c){
    echo $b . " is the largest number.";
    echo "<br>";
}
elseif($c > $a and $c > $b){
    echo $c . " is the largest number.";
    echo "<br>";
}

#5 Write a PHP script to print all the odd numbers between 10 to 100
for($i=10; $i<=100; $i++){
    if($i % 2 == 0){
    echo $i;
    echo "<br>";
}
}

#6 Write a PHP script to search an element from an array
$number = array(37,56,19,30,27,83);
$search = 30;
$found = false;
for($i=0; $i<count($number); $i++){
    if($number[$i] === $search){
        echo "Found " . $search . " at index " . $i;
        echo"<br>";
        $found = true;
        break;
    }
}

if(!$found){
    echo $search . " not found.";
    echo"<br>";
}

#7 Print the following shapes
echo "Star: ";
echo"<br>";
for($i = 1; $i<=3; $i++){
    for($j = 1; $j<=$i; $j++){
        echo "*";
    }
    echo"<br>";
}
echo"<br>";

echo "Number: ";
$num1 = 1;
echo"<br>";
for($i = 3; $i>=1; $i--){
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
for($i = 1; $i<=3; $i++){
    for($j = 1; $j<=$i; $j++){
        echo $ch . " ";
        $ch++;
    }
    echo"<br>";
}
echo"<br>";
?>