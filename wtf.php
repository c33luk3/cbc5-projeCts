<!DOCTYPE html>
<html>
<body>

<?php

echo "A big ol thing";

$cal = " this is my string";

echo $cal;

echo " Hi there".$cal."!";

echo "<div>"."Some txt"."</div>";


$Fal = " some txt";

echo $Fal;

var_dump ($Fal);

class furniture {        
};





$boats = array();

 $boats = array_push($boats,"I like boats bro!");
 print_r($boats);

    $furniture = array();
     array_push($furniture,"I like boats bro!");
     print_r($furniture);

  $boats = array("I like boats bro!");
  array_push($boats,21);
  print_r($boats);

  echo SERIALIZE ($furniture);

  echo SERIALIZE ($boats);

   var_dump ($boats);

   var_dump ($furniture);








$clubhouse = array();
array_push($clubhouse, "chaz", " computer screens", " 8 students", " servers", " desks", 21, 22);
print_r($clubhouse);
$counter = 0;

 while($counter < 6) {
    echo $clubhouse[$counter];
   $counter++; 
 
 if(is_string($clubhouse[$counter])) {  
  echo $clubhouse[$counter]; }
  else {

     echo $clubhouse[$counter] . " is not a string";
  };    
 };
 for ($counter = 1; $counter <= 2; $counter++) {
    echo $clubhouse[$counter];
 };
$clubhouse[$counter] = "multiple words";

switch ($clubhouse[$counter]) {
   case "> 1";
   echo str_word_count("computer screens");
   break;

   case "> 1";
   echo str_word_count("8 students");
   break;

   case "> 1";
   echo str_word_count("servers");
   break;

   case "> 1";
   echo str_word_count("chaz");
   break;

   case "> 1";
   echo str_word_count("desks");
};






$smallArray = [" bmw", " motorola", " juice"];

$counter = 0;

while($counter < count($smallArray)) {
$counter ++;

echo $smallArray[$counter];
echo $counter;
echo $smallArray;
};





function writename() {
   print_r ("chaz");
};
writename();





function dealershipName($dname) {
   echo "$dname Refsnes.<br>";
};

dealershipName("miltonRueben");
dealershipName("bobRichards");
dealershipName("nalley");
dealershipName("jimHudson");

$dname = "Buy a car bro!";
dealershipName($dname);



function divide($x, $y) {
    $z = $x / $y;
    return $z;
}

echo "10 / 5 = " . divide(10,5) ."<br>";
echo "20 / 2 = " . divide(20,2) ."<br>";
echo "100 / 5 = " . divide(100,5) . "<br>";
echo "1000 / 26 = " . divide(1000,26) . "<br>";    
echo "1234 / 234 = " . divide(1234,234) . "<br>";




function weaponClass($handguns) {
         echo "$weaponClass Refsnes . $handguns";

}

weaponClass ("handguns");
weaponClass ("rifles");

$handguns = "check it";
weaponClass($handguns);

 




 

$glock = "glock";
var_dump($glock);

function weaponClass($glock) {
   $weaponClass = array("handgun" =>" glock", "rifle" => "ar15", "shotgun" => "ksg12"); 
  var_dump ($weaponClass);
  echo $weaponClass["handgun"];

 return $weaponClass[$glock];
}        
echo weaponClass("handgun");

function flowerFinder($flower) {
   $peony = [ "stalk" => 1, "petal" => 10 , "leaves" => 5];
   return $type[$flower]; 
   } 





  
  
  
  
  ?>

 </body>
 </html>