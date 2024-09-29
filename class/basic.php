<?php
// Comments in PHP
// single line Comment
/*
multi line comment 
*/

// Why we need Variable in Programming Language.

$variable1 = 20;

$variable2 = 30;

$variable1 = $variable1 + 1;

$variable1 = $variable1 - 1;
//  echo is use for printing / output value on screen.  
/* Operator in PHP

Arithmetic operators  + - * / %
Assignment operators  =
Comparison operators  > < >= <= == !=
Increment/Decrement operators  ++ --
Logical operators && || ! AND OR NOT
String operators . .=
Conditional assignment operators ?:

$a =15;
$set  = ($a>18) ? "can": "cannot";
*/
// if - else Statement 
// if - else-if statement

/*
switch :

    syntax:

        switch(expression){
        
        case value-1 :  statement 1;
                        break;

        case value-2 : statement 2;
                        break;                
        
        default       :  
                        default statement;
        }
Example :
$case = '*';

switch($case){

    case '+' : echo "Sum of number : ".$variable1 + $variable2;
                break;
    case '-' : echo "Subtraction of number : ".$variable1 - $variable2;
                break;         
    case '*' : echo "product of number : ".$variable1 * $variable2;
                break;
                
   default    : echo "Invalid Input ";             
}
*/
echo "<br>";

/*
loop : 

    1) for
          syntax :

            for(initialization; condition ; increment/decrement){
            Statement ;
           }
*/
/*
for : 
for($i = 1 ; $i<=1; $i++){
    echo "<br>"."Repeat This upto ".$i." times";    
}
while :

    Syntax : 
                initailization ;
                while (condition /Expression){
                statements;
                increment/decrement;
                }

foreach() :

        syntax : foreach(array as elements){
        statement;
        }
*/
/*
    Array :

    Array is a collection  of same DataType.
 1) Single Dimension
    syntax :   arrayName = ['elements' ,'elements']; 

    Eg: $list_of_Students = ['Bidya', 'chandra', 'chandrika', 'Pradip'];
        echo "<pre>";
        print_r($list_of_Students);

        for($i =0; $i<=3; $i++){
        echo "<br>" ."Array"."[ ".$i." ]". $list_of_Students[$i];
        }

 2) Associative Array
 
    syntax : 
             arrayName = array("key"=>'Value',
                               "key"=>'Value');

 3) Multi Dimension Array :


echo "<pre>";
$Students_details = array(
    "name" => "Chandra",
    "Course" => "BCA",
    "Address" => "silgadhi-06",
    "contact" => "9824545154"
);
print_r($Students_details);
foreach ($Students_details as $key => $value) {

    echo "<br>" . $key . " : " . $value;
}
$emp_salary = array(
    array(1, "sonoo", 400000),
    array(2, "john", 500000),
    array(3, "rahul", 300000)
);

echo "<br> <br><br>"."Employees Salary Tables <br>";
echo "<br>" . "SN " . "Name " . "salary ";
for ($r = 0; $r < 3; $r++) {
    echo "<br>";
    for ($c = 0; $c < 3; $c++) {

        echo " " . $emp_salary[$r][$c];
    }
}


$singleArr = ['Bidya','chandra','pradip','Pawan','Chandrika'];

echo "<br>"."using Foreach Loop";
foreach($singleArr as $e){
echo "<br>".$e;
}

echo "<br>"."Using for loop";

for($i=0; $i<5; $i++){

    echo "<br>".$singleArr[$i] ."  i :".$i;
}
*/

/*
Function 
:User-defined Function :
To create a function :

syntax : 

    function function_name(parameter_list){
    
     statement ;

     return Type;
    }

    function simpleFun($arr = array())
{
    foreach ($arr as $e) {
        echo "<br>" . $e;
    }
}

$singleA = ['98887', '455555', '124551', '44555', '455455'];
$singleArr = ['Bidya', 'chandra', 'pradip', 'Pawan', 'Chandrika'];

simpleFun($singleArr);
simpleFun($singleA);

*/

/*
#Form Handling
$_GET AND $_POST

*/ 
echo "<pre>";
print_r($_POST);


