
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

//* разделить массив по символу
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


//* return branching with assotiation array 
  // function people_with_age_drink(int $old): string {

    // $categories = array(
    //   'drink toddy' => range(0,13),
    //   'drink coke' => range(14,17),
    //   'drink beer' => range(18,20),
    // );

    // $ageCategories = [21 => "drink whisky",20 => "drink beer",17 => "drink coke",13 => "drink toddy"];
    
    // foreach ($ageCategories as $age => $drink) {
    //   if ($old >= $age) {
    //       return $drink;
    //   }
    // }  
    // return "drink toddy";

  // }
  // echo people_with_age_drink(12) . PHP_EOL;//toddy
  // echo people_with_age_drink(22) . PHP_EOL;//whisky
  // echo people_with_age_drink(25) . PHP_EOL;//whisky
  // echo people_with_age_drink(18) . PHP_EOL;//beer


  //* return drink about brand name ASSOSIATION ARRAY
  // function get_drink_by_profession(string $s): string {
    // $drinks = ["Jabroni" => "Patron Tequila",
    // "School Counselor"  => 	"Anything with Alcohol",
    // "Programmer" =>	"Hipster Craft Beer",
    // "Bike Gang Member"  => 	"Moonshine",
    // "Politician" => 	"Your tax dollars",
    // "Rapper"  => 	"Cristal"];

    // $s = mb_strtolower($s);

    // foreach($drinks as $brand => $drink){
    //   $brandLower = mb_strtolower($brand);
      
    //    if(ucfirst($s) == ucfirst($brandLower)){
    //       return $drink;
    //   }
    // }
    // return "Beer";


      // return [ 
      // "jabroni" =>"Patron Tequila",
      // "school counselor"=>"Anything with Alcohol",  
      // "programmer"=>"Hipster Craft Beer",
      // "bike gang member"=>"Moonshine",
      // "politician"=>"Your tax dollars",
      // "rapper"=>"Cristal"
      // ][strtolower($s)]??"Beer";
    
  // }
  // echo get_drink_by_profession("jabrOni") . PHP_EOL; //Patron Tequila
  // echo get_drink_by_profession("scHOOl counselor") . PHP_EOL; //Patron Tequila