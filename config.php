<?php
//  To connect Mysql Database with Php
$h = "localhost";
$u = "root";
$p = '';
$dbname = "local_food_product";

// To make a connection with Db we have a following Function / method

$conn = mysqli_connect($h, $u, $p, $dbname);

if (!$conn) {echo "Error in Db Connection, Please Check the Mysql Server";}

// To Run a Mysqli Query We have a Following Method 
$query = mysqli_query($conn, 'select *from customers');

// To Fetch/Retrive/Get Records from tables we method

// while ($row = mysqli_fetch_assoc($query)) {

//     print_r($row);
// }
