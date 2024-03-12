<php

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



//* invert
// function invert(array $numbers) {
//   return array_map(function($num) {
//       return -$num; 
//   }, $numbers);
// }

// $inverted = invert([-1, 2, -3, 4, -5]);
// print_r($inverted);