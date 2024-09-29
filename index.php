
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Form Validation</title>
</head>

<body>


    <div class="container">

        <div class="row">

                <div class="col-sm-6 offset-3">
                         <h2 style="padding :24px; text-align:center; margin-top:25px; margin-bottom: 12px;"> Register Form </h2>

                         <a href="user_log.php"><h5>View User Details</h5></a>
                <form method="POST" action="action.php?form=register">
                <div class="form-group">
                    <label>FullName</label>
                    <input type="text" class="form-control" id="fname" name ="fname">
                </div>    
                <div class="form-group">
                    <label>Contact NO</label>
                    <input type="text" onkeyup="formValidate()" name ="contact"class="form-control" id="contact" placeholder="+97798">
                </div>
                <span id ="alert-contact"></span>
                <div class="form-group">
                    <label>Email</label>
                    <input type=" email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="pass" name="password">
                </div>
                <div class="form-group">
                    <label>Repassword</label>
                    <input type="password" class="form-control" id="repass" onkeyup="validate()">
                </div>
                <span id ="alert-p"></span>

                <input type="submit" value="Register"class='btn btn-success' name ="reg_btn">
                   </form>
               
           
               
            </div>
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>


<script>

    function formValidate(){
        var contact = document.getElementById('contact').value;
        var regex = /^\+977\d{10}$/;
        const check = regex.test(contact);

        console.log(check);
        if(check){
                document.getElementById('alert-contact').style.color ='green';
                document.getElementById('alert-contact').innerHTML = 'Valid Contact';
    }else{
       
        document.getElementById('alert-contact').style.color ='red';
        document.getElementById('alert-contact').innerHTML = 'invalid Contact';

    }
        
    }
    function validate(){

        var p1 =document.getElementById("pass").value;
        var p2 =document.getElementById("repass").value;

       if(p1==p2){

        document.getElementById("alert-p").style.color='Green';
        document.getElementById("alert-p").innerHTML='Matched';
       }else{
        document.getElementById("alert-p").style.color='red';
        document.getElementById("alert-p").innerHTML='DO Not Match';

       }
    }
</script>