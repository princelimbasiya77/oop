<?php

$con = new mysqli("localhost","root","","login_system");

$query = "show tables";

$res = $con -> query($query);


?>

<table border="1"> 
<tr>
    <?php 
    while ($row = mysqli_fetch_assoc($res)) {
       ?> 

       <button><a href="viewallldatabase.php?table=<?php echo $row['Tables_in_login_system'] ?>"><?php echo $row['Tables_in_login_system']?></a></button>
       
       <?php
    }
    
    ?>
</tr>
</table>