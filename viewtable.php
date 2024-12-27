<?php

$con = new mysqli("localhost","root","","ltepro");
$query = "show tables";

$res = $con -> query($query);

?>

<table border="1">
    <tr>
        <?php
    while($row = mysqli_fetch_assoc($res))
    { 
        ?>
        <td><a href="demo.php?table=<?php echo $row['Tables_in_ltepro'] ?>"><?php echo $row['Tables_in_ltepro'] ?></a></td>
        <?php }
    ?>
    </tr>
</table>