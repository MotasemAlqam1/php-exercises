<?php


//$name = "motasem";
//$age = 25;

// echo "My name is " . $name . " and I am " . $age . " years old.";

//$city = "Amman";
//$age = 25;
//$height = 1.75;
//$isStudent = true;

//var_dump($city);
//var_dump($age);
//var_dump($height);
//var_dump($isStudent);

$num1 = 10;
$num2 = 3;

// echo $num1 + $num2 . "<br>";
// echo $num1 - $num2 . "<br>";
// echo $num1 * $num2 . "<br>";
// echo $num1 / $num2 . "<br>";
// echo $num1 % $num2;

// Q1.1
// $year  = 2024;
// if ($year%4 == 0)
//     echo "This year is a leap year";
// else
//     echo "This year is not a leap year";


// Q1.2
// $temperature = 27;
// if ($temperature <20 )
//     echo "Winter";
// else
//     echo "It is summertime!";


// Q1.3
// $firstInteger = 5;
// $secondInteger = 10;
// $sum = $firstInteger + $secondInteger;
// if ($firstInteger == $secondInteger)
//     {
//         $sum = $sum * 3;
//         echo $sum;
//     }
// else
//     { 
//        echo $sum;
//     }

// Q1.4
// $firstInteger = 10;
// $secondInteger = 10;
// $sum = $firstInteger + $secondInteger;
// if ($sum == 30)
//     {
//         echo $sum;
//     }
// else
//     { 
//          echo "false";
//     }

// Q1.5
// $number =20;
// if ($number %3 == 0)
//     echo "true";
// else 
//     echo "false";

// Q1.6
// $number =50;
// if ($number >=20 && $number<=50 )
//     echo "true";
// else 
//     echo "false";

// Q1.7
// $num1 =4;
// $num2 =6;
// $num3 =9;

// if ($num1 >= $num2 && $num1 >= $num3)
//     echo $num1;
// else if ($num2 >=$num1 && $num2>=$num3)
//     echo $num2;
// else
//     echo $num3;

// Q1.8
// $units  = 260;
// $bill = 0;

// if ($units <= 50 )
//     {
//         $bill = $units*2.5;
//         echo $bill;
//     }
// else if ($units > 50 && $units <=150)
//     {
//          $bill = 50*2.5;
//          $units -= 50;
//          $bill += $units * 5;
//          echo $bill;
//     }
// else if ($units > 150 && $units <=250)
//     {
//          $bill = 50*2.5;
//          $units -= 50;
//          $bill += 100*5;
//          $units -= 100;
//          $bill += $units * 6.20;
//          echo $bill;
//     }
// else {
//          $bill = 50*2.5;
//          $units -= 50;
//          $bill += 100*5;
//          $units -= 100;
//          $bill += 100 * 6.20;
//          $units -= 100;
//          $bill += $units * 7.50;
//          echo $bill;
// }


// Q1.9
// $firstNumber = 10;
// $secondNumber = 5;
// $operator = "+";

// if ($operator == "+")
//     {
//         $result = $firstNumber + $secondNumber;
//     }
// elseif ($operator == "-")
//     {
//         $result = $firstNumber - $secondNumber;
//     }
// elseif ($operator == "*")
//     {
//         $result = $firstNumber * $secondNumber;
//     }
// elseif ($operator == "/")
//     {
//         $result = $firstNumber / $secondNumber;
//     }

// echo $result;

// Q1.10
// $age = 15;
// if ($age >=18 )
//     echo "eligible to vote";
// else 
//     echo "is no eligible to vote";

// Q1.11
// $number = -60;

// if ($number > 0 )
//     echo "positive";
// elseif($number < 0)
//     echo "negative";
// else 
//     echo "zero";

// Q1.12
// $grades = [60,86,95,63,55,74,79,62,50];
// $sum = 0;
// $count = count($grades);
// foreach ($grades as $grade)
//     {
//         $sum += $grade;
//     }

// $average = $sum / $count;

// if ($average >= 90)
//     echo "A";
// elseif ($average >= 80)
//     echo "B";
// elseif ($average >= 70)
//     echo "C";
// elseif ($average >= 60)
//     echo "D";
// else
//     echo "F";


////////////////////////////////
// Q2.1
// $color = array('white','green','red');

// $paragraph = "The memory of that scene for me is like a frame of film forever frozen at that
// moment: the ".$color[2] ." carpet, the ".$color[1] . " lawn, the " .$color[0] . " house, the leaden sky. The new
// president and his first lady. - Richard M. Nixon";

// echo $paragraph;


// Q2.2
// $color = array('white','green','red');

// echo "<ul>";

// echo "<li> $color[1] </li>";
// echo "<li> $color[2] </li>";
// echo "<li> $color[0] </li>";

// echo "</ul>";

// Q2.3
// $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=>
// "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" =>
// "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin",
// "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
// "Portugal"=>"Lisbon", "Spain"=>"Madrid" );

// asort($cities);

// foreach ($cities as $country => $capital)
//     {
//         echo "The capital of " .$country. " is " .$capital. "| ";
//     }

// Q2.4
//  $color = array (4 => 'white', 6 => 'green', 11=> 'red');
// echo $color[4];

// Q2.5
// $array = array(1,2,3,4,5);
// array_splice($array,3,0,"$");
// print_r($array);


// Q2.6
// $fruits = array(
//     "d" => "lemon",
//     "a" => "orange",
//     "b" => "banana",
//     "c" => "apple"
// );

// ksort($fruits);

// foreach($fruits as $key => $value)
//     {
//         echo $key . " = " . $value;
//         echo " ";
//     }

// Q2.7
// $temperatures = [
//     78, 60, 62, 68, 71, 68, 73, 85, 66, 64,
//     76, 63, 75, 76, 73, 68, 62, 73, 72, 65,
//     74, 62, 62, 65, 64, 68, 73, 75, 79, 73
// ];

// $count = count($temperatures);
// $sum = 0;
// foreach($temperatures as $temperature)
//     {
//         $sum += $temperature;
//     }

// $avg = $sum/$count;

// sort($temperatures);

// for ($i = 0 ; $i<7;$i++)
//     {
//         echo $temperatures[$i];
//     }

// for ($j = 23 ; $j<30;$j++)
//     {
//         echo $temperatures[$j];
//     }

// Q2.8
// $array1 = array("color" => "red", 2, 4);
// $array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

// $result = array_merge($array1,$array2);
// print_r($result);

// Q2.9
// $colors = array("red","blue", "white","yellow");
// function uppercase($colors)
// {
//     foreach($colors as $color)
//         {
//             $color =  strtoupper($color);
//             echo $color . " ";
//         }
// }

// uppercase($colors);

// Q2.10
// $colors = array("RED","BLUE", "WHITE","YELLOW");
// function lowercase($colors)
// {
//     foreach($colors as $color)
//         {
//             $color =  strtolower($color);
//             echo $color . " ";
//         }
// }

// lowercase($colors);

// Q2.11




// Q3-1

// for ($i = 1; $i <= 10; $i++) {
//     if ($i > 1) {
//         echo "-";
//     }

//     echo $i;
// }


//Q4-1

// function isPrime($number)
// {
//     if ($number<=1)
//         {
//             return false;
//         }

//         for ($i=2 ; $i<$number ;$i++)
//             {
//                 if ($number % $i == 0)
//                     {
//                         return false;
//                     }
//             }
//         return true;
// }

// $number = 3;
// if (isPrime($number))
//     {
//         echo $number . " is prime number ";
//     }
//     else
//         {
//             echo $number . " is not prime number ";
//         }

//Q4-2
// function reverseString($text)
// {
//     $revers = "";
//     $length  = strlen($text);

//     for ($i = $length-1 ;$i>=0 ;$i-- )
//         {
//             $revers .=$text[$i];
//         }
//     return $revers;
// }

// $text = "remove";
// echo reverseString($text);
    