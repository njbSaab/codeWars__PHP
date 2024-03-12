<?php

// $matches = ['1:0','2:0','3:0','4:4','2:2','3:3','1:4','2:3','2:4','3:4'];
// $totalPoints = 0;

// foreach ($matches as $match) {
//     list($left, $right) = explode(':', $match);
    
//     if ($left > $right) {
//         $totalPoints += 3;
//     } elseif ($left == $right) {
//         $totalPoints += 1;
//     }
// }



//! correctly
//* foreach

// $games = ['1:0','2:0','3:0','4:4','2:2','3:3','1:4','2:3','2:4','3:4'];


// function points(array $games): int {
//     $totalPoints = 0;

//     foreach ($games as $game){
//         list($x, $y) = explode(':', $game);
//         if ($x > $y){
//             $totalPoints +=3;
//         } elseif ($x == $y) {
//             $totalPoints +=1;
//         }
//     }
//     echo "$totalPoints \n";
//     return $totalPoints;

// }

// points($games);



//! wron
// function toCsvText($array) {
//     $csvTextStr = '';

//     foreach($array as $rowIndx => $rowSubStr){
//         $csvTextStr = implode(',', $rowSubStr);

//         if($rowIndx < count($array) - 1){
//             $csvTextStr .= '\n';
//         }

//     }

//     return $csvTextStr;
//   }


//   toCsvText([[ 0, 1, 2, 3, 4 ],
//   [ 10,11,12,13,14 ],
//   [ 20,21,22,23,24 ],
//   [ 30,31,32,33,34 ]]);
  

//* filter
// function sumArray($array) {
//   // Проверяем, все ли элементы массива - числа
//   $numericArray = array_filter($array, 'is_numeric');
//   if (count($array) != count($numericArray)) {
//       echo "Массив содержит не только числа.\n";
//       return 0;
//   }

//   // Если массив содержит два элемента или меньше, сумма будет 0
//   if (count($array) <= 2) {
//       return 0;
//   }

//   $min = min($array);
//   $max = max($array);

//   // Удаляем первое вхождение минимального значения
//   $minKey = array_search($min, $array);
//   unset($array[$minKey]);

//   // Удаляем первое вхождение максимального значения
//   $maxKey = array_search($max, $array);
//   unset($array[$maxKey]);

//   // Переиндексация массива для удаления возможных пропусков в ключах
//   $filteredArray = array_values($array);

//   // Расчет суммы оставшихся элементов массива
//   $sum = array_sum($filteredArray);

//   // Возврат суммы
//   return $sum;
// }

// // Тестирование функции
// echo sumArray([6, 2, 1, 8, 10]) . PHP_EOL; // Должно выводить 16
// echo sumArray([1, 1, 11, 2, 3]) . PHP_EOL; // Должно выводить 6
// echo sumArray([' ', null, 3]) . PHP_EOL; // Должно выводить сообщение об ошибке и 0


//* inver_num
// function invert(array $numbers) {
//   return array_map(function($num) {
//       return -$num; 
//   }, $numbers);
// }

// $inverted = invert([-1, 2, -3, 4, -5]);
// print_r($inverted);

//* filter_pos_sum
// function sumOfPositiveNumbers($numbers) {
//   $positiveNumbers = array_filter($numbers, function($val) {
//       return $val > 0;
//   });

//   return array_sum($positiveNumbers);
// }

// sumOfPositiveNumbers([1, -2, 3, 4]);

//* filter_remover_every_second_num
// function removeEveryOther($array) {
//   return array_filter($array, function($key){
//     return $key % 2 === 0;
//   },  ARRAY_FILTER_USE_KEY);
// }

// removeEveryOther([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);

//* average midl num
  // function get_average($a) {
    // $res = round(array_sum($a) / count($a));

    // return (integer) (array_sum($a)/count($a));

    // echo $res . PHP_EOL;

  // }

  // get_average([1, 1, 1, 1, 2]);

//* find word for index
//   function how_much_i_love_you(int $nb_petals): string {
//     $numberOfPetals = ["I love you", "a little", "a lot", "passionately", "madly", "not at all"];

//     $index = ($nb_petals - 1) % count($numberOfPetals);

//     return $numberOfPetals[$index];
// }

// // Тестирование функции
// echo how_much_i_love_you(2) . PHP_EOL; // Должно вывести: a little


// function getSize($width, $height, $depth) {
//   $vol = $width * $height * $depth;
//   $area = 2 * ($width * $height + $height * $depth + $depth * $width);
  
//   return $arr = [$area, $vol];
  
// }
// echo getSize(4, 2, 6);


//* str_replace 
// function correct($string) {
  //todo mySolve
  // $string = str_replace('5', 'S', $string);
  // $string = str_replace('0', 'O', $string);
  // $string = str_replace('1', 'I', $string);

  // return $string;

  //todo best
  // return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);
  // return strtr($string, "015", "OIS");

// }

// echo correct("L0ND0N") . "\n";
// echo correct("51NGAP0RE") . "\n";


// function combat($h, $d) {
//   return $h > $d ? $h - $d : 0;
// }

// echo combat(100,5) . "\n";
// echo combat(30,45) . "\n";
// echo combat(5,5) . "\n";

// function my_first_kata($a, $b) {
//  if((!is_int($a) and !is_float($a)) or (!is_int($b) and !is_float($b))){
//     return false;
//   } 
//   $res = "$a ."%" $b ++ $b ."%" $a";
//   return $res;
// }

// echo my_first_kata(3, 5) . "\n";
// echo my_first_kata(true, 5) . "\n";
// echo my_first_kata(3, "hello") . "\n";


// function twoDecimalPlaces($n){
//   return round($n, 2);
// }

// echo twoDecimalPlaces(4.659725356) . "\n";

//* find char & slice
// function shortenToDate($longDate) {

//   $commaIndex = strpos($longDate, ',');
//   return substr($longDate, 0, $commaIndex);

//todo alternative
  // return explode(',', $longDate)[0];

  // return strstr($longDate, ",", true);

  // $newDate = strtok($longDate, ',');
  // return $newDate;

// }
// echo shortenToDate("Friday May 2, 9am") . "\n";



// function remainder($a, $b) {
//   if
//     return $a % $b;
// }
// echo remainder(17,5) . "\n";


// function remove(string $s): string {
//   return preg_replace('/!+$/', '!', $s);
// }

// echo remove("Hi!!!") . "\n";
// echo remove("Hi!! Hi!") . "\n";

//* replace
// function replace(string $s): string {
  // $pattern = '/[aeiouAEIOU]/';
  //   return preg_replace($pattern, '!', $s);

  //todo 
  // return str_replace(str_split('aeiouAEIOU'), '!', $s);

  // return str_ireplace(['a', 'e', 'i', 'o', 'u'], '!', $s);

  // $vokale = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
  // return str_replace($vokale,"!",$s);

  // return strtr($s, 'aeiouAEIOU', '!!!!!!!!!!');

  
// }
// echo replace('aeiou') . "\n";
// echo replace('ABCDE') . "\n";

// function fuel_price($litres, $price_per_litre) {
//   $discount = [0.05, 0.05, 0.10, 0.10, 0.15, 0.15, 0.20, 0.20, 0.25, 0.25];
//   $res = 0;
//   $i = 0;

//   while($i < $litres){
//     if($i >= 2) {
//       $res = $discount[$i] * $i;
//     }
//     elseif($i >= 4) {
//       $res = $discount[$i] * $i;
//     }
//     elseif($i >= 6) {
//       $res = $discount[$i] * $i;
//     }
//     elseif($i > 8) {
//       $res = $discount[$i] * $i;
//     }
//     else {
//       $res = 0;
//     }
//   }
//   return $res;
// }
// echo fuel_price(5, 1.23) . "\n";


// function format_money(float $amount): string {
    // Преобразуем сумму в строку и разделяем её на части до и после десятичной точки
    // $decimalPart = explode(".", (string)$amount);
    
    // // Проверяем, есть ли десятичная часть
    // if(count($decimalPart) === 1) {
    //     // Если десятичной части нет, добавляем .00
    //     return '$' . $decimalPart[0] . '.00';
    // } else {
    //     // Если десятичная часть есть, проверяем её длину
    //     if(strlen($decimalPart[1]) === 1) {
    //         // Если после точки одна цифра, добавляем в конец ноль
    //         return '$' . $decimalPart[0] . '.' . $decimalPart[1] . '0';
    //     } else {
    //         // Если две цифры, оставляем как есть
    //         return '$' . $decimalPart[0] . '.' . substr($decimalPart[1], 0, 2);
    //     }
    // }


    // $decimalPart = explode(".", (string)$amount);
    
    // // Если после точки нет цифр, добавляем .00
    // if (count($decimalPart) === 1) {
    //     return '$' . $decimalPart[0] . '.00';
    // } 
    // // Если после точки одна цифра, добавляем в конец ноль
    // elseif (strlen($decimalPart[1]) === 1) {
    //     return '$' . $decimalPart[0] . '.' . $decimalPart[1] . '0';
    // } 
    // // В остальных случаях (две и более цифры после точки) оставляем две цифры после точки
    // else {
    //     return '$' . $decimalPart[0] . '.' . substr($decimalPart[1], 0, 2);
    // }

  // return '$' . number_format($amount, 2, '.', '');
// }
// echo format_money(39) . "\n"; //$39.00
// echo format_money(39.0) . "\n"; //$39.00


// function periodIsLate($last, $today, $cycleLength) {
  // $diff = $last->diff($today);

  // return $diff->days < $cycleLength;

  //todo alter
  //return $today->diff($last)->format('%a') > $cycleLength ? true : false;

// }

// var_dump(periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28));


// function paperwork(int $n, int $m): int
// {
//    return ($n < 0 || $m < 0) ? 0 : $n * $m;
   
// }
// var_dump(paperwork(5, 5));
// var_dump(paperwork(-5, 5));


// function main [string $verb, string $noun]: string {
//   return $verb . $noun
// }



// function getChar($c)
// {
//   return chr($c);
// } 
// echo getChar(65) . "\n";


// function multipleOfIndex(array $arr) : array {
//   return [];
// }

// echo multipleOfIndex([22, -6, 32, 82, 9, 25]);


// function bmi($weight, $height) {

// $bmi = $weight / ($height ** 2);
//   if ($bmi <= 18.5) {
//         return "Underweight";
//     } else if ($bmi <= 25.0) {
//         return "Normal";
//     } else if ($bmi <= 30.0) {
//         return "Overweight";
//     } else {
//         return "Obese";
//     }
//todo Ternation operator 
// return $bmi <= 18.5 ? "Underweight" : ($bmi <= 25.0 ? "Normal" : ($bmi <= 30 ? "Overweight" : "Obese"));

// }
// echo bmi(50, 1.80);
  //! command
  // echo "$totalPoints \n"; //переносы
  // echo print_r($matches); //массив
  // echo var_dump(); //расширеная информация 
  // echo $csvTextStr . PHP_EOL; // переносы
  // echo someFunc("51NGAP0RE") . "\n";


