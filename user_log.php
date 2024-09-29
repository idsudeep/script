<?php 

require_once 'config.php';


// mysqli_fetch_assoc() is used to retrive data from the table.

$q = "select id , name , contact ,email from user_log";

$runq = mysqli_query($conn , $q);


?>

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

            <div class="col-sm-8 offset-2">
                <h2 style="padding :24px; text-align:center; margin-top:25px; margin-bottom: 12px;"> User's Details </h2>
                <hr>

                <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
          

                    <?php while($row = mysqli_fetch_assoc($runq)){

                
                        
                        ?> 
                        <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['contact']; ?></td>
                        <td><?php echo $row['email']; ?></td>   
                        <td> <a href="edit_user.php?userid=<?php echo $row['id'];?>">Edit</a>| <a href="delete_user.php?userid=<?php echo $row['id'];?>">Delete</a> </td> 
                        </tr>
                        <?php }?>
      

                </table>


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
    function formValidate() {
        var contact = document.getElementById('contact').value;
        var regex = /^\+977\d{10}$/;
        const check = regex.test(contact);

        console.log(check);
        if (check) {
            document.getElementById('alert-contact').style.color = 'green';
            document.getElementById('alert-contact').innerHTML = 'Valid Contact';
        } else {

            document.getElementById('alert-contact').style.color = 'red';
            document.getElementById('alert-contact').innerHTML = 'invalid Contact';

        }

    }

    function validate() {

        var p1 = document.getElementById("pass").value;
        var p2 = document.getElementById("repass").value;

        if (p1 == p2) {

            document.getElementById("alert-p").style.color = 'Green';
            document.getElementById("alert-p").innerHTML = 'Matched';
        } else {
            document.getElementById("alert-p").style.color = 'red';
            document.getElementById("alert-p").innerHTML = 'DO Not Match';

        }
    }
</script>