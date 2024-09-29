<?php
require_once 'connect.php';

$q = "select * from user_log";

$runq = mysqli_query($con , $q);

$row = mysqli_fetch_assoc($runq);


?>

<html>
    <body>

    <table>
        <tr>
            <th>ID </th>
            <th>Name</th>
        </tr>

        <?php foreach($users as $k => $v)
            {?>
            <tr>
            <td> <?php echo $v['id']; ?></td>
            <td> <?php echo $v['name']; ?></td>
            </tr>
            <?php }?>
    </table>
    </body>
</html>