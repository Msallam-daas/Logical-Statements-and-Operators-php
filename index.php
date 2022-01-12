<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Statements and Operators</title>
</head>
<body>

    <?php

    //1.specified year

    $year = 2013;
    if($year % 4 ===0 ){
        echo "This year is a leap year";
    } else {
        echo "This year is not a leap year";
    }
    echo "<br>";
    echo "<br>";

    //2 check the season

    $temperature = 27;
    if($temperature < 20) {
        echo "it is wintertime";
    } else {
        echo "it is summertime";
    }
    echo "<br>";
    echo "<br>";

    //3calulate the sum of two integers

    $firstinteger = 2;
    $secondinteger = 2;
    if($firstinteger === $secondinteger) {
        echo ($firstinteger + $secondinteger)*3;
    } else {
        echo $firstinteger + $secondinteger;
    }
    echo "<br>";
    echo "<br>";
//4 check the sum 
$firstinteger = 10;
$secondinteger = 12;
if($firstinteger + $secondinteger === 30) {
    echo $firstinteger + $secondinteger;
} else {
    echo "false";
}
echo "<br>";
echo "<br>";

//5 check positive number

$number = 5;
if(abs($number) % 3 === 0){
    echo "true";
} else {
    echo "false";
}
echo "<br>";
echo "<br>";

//6 check number

$min_number = 20;
$max_number = 50;
$number = 35;
if($number >= $min_number && $number <= $max_number){
    echo "true";
} else {
    echo "false";
}
echo "<br>";
echo "<br>";

//7 find the largest number

$numbers = [1,5,9];
echo max($numbers);
echo "<br>";
echo "<br>";

//8 calculate the monthly electricity bill

$monthly_consumption = 130;
if($monthly_consumption <= 50){
    echo $monthly_consumption * 2.5;
} elseif ($monthly_consumption <= 150){
    echo (50*2.5 + ($monthly_consumption-50)*5);
} elseif($monthly_consumption <= 250){
    echo (50*2.5 + 100*5 + ($monthly_consumption-150)*6.2);
} else {
    echo (50*2.5 + 100*5 + 100*6.2 + ($monthly_consumption-250)*7.5);
}
echo "<br>";
echo "<br>";

//9 make calculator

function calculator($number1,$number2,$operation){
    if($operation === "addition"){
        echo $number1 + $number2;
    } elseif($operation === "subtraction"){
        echo $number1 - $number2;
    } elseif($operation === "multiplication"){
        echo $number2 * $number1;
    } elseif($operation === "division"){
        echo $number1 / $number2;
    }
}
calculator(2,43,"addition");
echo "<br>";
echo "<br>";

//10check if person eligible to vote

$age = 15;
if($age >= 18){
    echo "is  eligible to vote";
} else {
    echo "is no eligible to vote";
}
echo "<br>";
echo "<br>";

//11 ckeck whether number

$number = -60;
    if($number > 0){
        echo "Positive";
    } elseif($number < 0){
        echo "Negative";
    } else {
        echo "number is zero";
    }
    echo "<br>";
    echo "<br>";

//12 find the grade for the student

$grades = [60,86,95,63,55,74,79,62,50];
    $average = array_sum($grades) / count($grades);
    if($average < 60){
        echo "F";
    } elseif($average <70){
        echo "D";
    } elseif($average < 80){
        echo "C";
    } elseif($average < 90){
        echo "B";
    } elseif($average < 100) {
        echo "A";
    }



?>
</body>
</html>