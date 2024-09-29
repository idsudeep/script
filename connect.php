
<?php 


// Connection with mysql server we need a mysqli_connect() function
$con = mysqli_connect('localhost','root','','local_food_product');

/* mysqli_query() It is use to execute the Mysql Query and
 It takes two parameters first one is Connection and query . 
 
*/

$query = mysqli_query($con,  "select contact , email from user_log");


/*
    To Fetch / read Data from mysqli server table we need a below function
    mysqli_fetch_assoc() and it takes on parameter
*/ 
echo "<pre>";
while($row = mysqli_fetch_assoc($query))
// print_r($row);
?>
