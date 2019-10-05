<?php

//echo "HelloWorld";  echo meant to print it out

//to create a var use the $ infront if the type.


//Strings in PHP
$firstName = 'Josh';
//echo $firstName;S

$string1 = "Hello"; //we added a space so the two words have one in between. 
$string2 = "World!";

//to call both string above see below

//echo $string1 . $string2; //notice we used the DOT (.) to call bth string 1 and 2

//Integers
$int1 = 3;
$int2 = 3;

$addResult = $int1 + $int2; //added two ints
$multResult = $int1 * $int2; // multiplied two ints

//echo $multResult;

//General Arrays
$array = array();
$array = ["apple", "bananas", 'pear']; //wont be able to show this without using json_encode see below
$array[] = 'cat';  //this appends to the array
$array = array_diff($array, array('apple')); //how to delete an item in the array
//echo json_encode($array);


//Associated Arrays
$assocArray = [
    
    "wife" => "Reba",
    "Son" => "Mavven",
    "Daughter" => "Norii"    
];

//echo json_encode($assocArray)
//this will print like so --> {"wife":"reba","son":"MAvven","Daughter":"Norii"}


//While loops:

$i = 0;
        while ($i < 20) {
            $i++;
            //echo $i;
     //This will print --> 1234567891011121314151617181920
     //if you want to them to show vertical add a break like below
     //echo $i . "</br>";
        }
  
//Do While 
//for ($z = 0; $z > 14; $z++) {

        $z = 0;
do {
echo "The value of z is " . $z . "</br>";
$z++;
} while($z < 15);
//}
        
//for loops
        
        for($i = 0; $i<10; $i++) {
            
           // echo $i . "</br>";
     //This will print 123456789 BUT not 10 because 10 is not LESS than 10.        
        }
        
//If loop 
        
    $i = -1;   
    if ($i > 0) {
  //      echo "Yes, it is"; //this will not show 
    } else {
  //      echo "No, it is not";  //this will show because -1 is NOT greater that 0.
    }
    
//using boolean with if loop
  
    $i = 10;
            
    if ($i < 15) {
        $boolean = true;
    } else {
        $boolean = false;
    }
    
    if ($boolean) {  //this is the fast way but equal to this --> if($boolean == true) {}
       // echo "True and blue";  // i = 10 so this will print... 
    } else {
     //   echo "False and toss";  
    }
    
    
    
?>