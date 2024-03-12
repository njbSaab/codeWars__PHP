//* find word for index
//   function how_much_i_love_you(int $nb_petals): string {
//     $numberOfPetals = ["I love you", "a little", "a lot", "passionately", "madly", "not at all"];

//     $index = ($nb_petals - 1) % count($numberOfPetals);

//     return $numberOfPetals[$index];
// }



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



//* added $ in start & after dots two zero
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

//todo Ternation operator
switch($bmi)
  {
      case($bmi <= 18.5):
      return "Underweight";
      break;
      
      case($bmi <= 25):
      return "Normal";
      break;
      
      case($bmi <= 30):
      return "Overweight";
      break;
      
      case($bmi > 30):
      return "Obese";
      break;
  }

// }
// echo bmi(50, 1.80);



function finalGrade($exam, $projects) {

}
