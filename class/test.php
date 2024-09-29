<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Scripting, world!</title>
</head>

<body>

<div class="container">
<div class="col-sm-6 offset-3">

<legend id="result">Form :  </legend>

<form method="post" action="basic.php">
<label>Name</label>
<input type="text" name="name"><br>
<label>Email</label>
<input type="email" name="email"><br>
<label>Contact</label>
<input type="number"name="contact"> <br>
<input type="submit" name="btn_register">
</form>

</div>

</div>

</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"  crossorigin="anonymous"></script>


<script>

 function calc(){
var a = parseInt(document.getElementById('firstNumber').value);
var b = parseInt(document.getElementById('secondNumber').value);
 document.getElementById('result').innerHTML = 'Sum:  '+(a+b);

 }
 


</script>