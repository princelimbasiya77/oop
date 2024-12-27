<?php

$con = new mysqli("localhost","root","","ltepro");

$qry = "show tables";

$show = $con -> query($qry);


// $result = mysqli_fetch_all($show , MYSQLI_ASSOC);

// $result = mysqli_fetch_assoc($show); 
// print_r($result);



?>

<table border="1">
    <tr>
        <?php 
            while($result = mysqli_fetch_assoc($show))
            {
                ?>
                <td><a href="newview.php?tbl=<?php echo $result['Tables_in_ltepro'] ?>"><?php echo $result['Tables_in_ltepro'] ?></a></td>
        <?php     }
        ?>
    </tr>
</table>