<?php 

    $con = new mysqli("localhost","root","","ltepro");

    if(@$_GET['tbl'])
    {
        $tblName = $_GET['tbl'];
        $qry = "SELECT * FROM `$tblName`";
    }
    else
    {
        $qry = "SELECT * FROM `inquiry`";

    }


    $row = mysqli_fetch_all($con -> query($qry), MYSQLI_ASSOC);
    
    $key = array_keys($row[0]);

    $key_count = count($key);

    $val = array_values($row);

    $record_count = count($row);



?>

<table border="1">
    <tr>
        <?php 
            for($i=0 ; $i<$key_count ; $i++)
            {
                ?>
                <td><?php echo $key[$i] ?></td>
            <?php }
        ?>
        <td>DELETE</td>
    </tr>
    <?php 

        for($i=0 ; $i<$record_count ; $i++)
        {
            ?>

            <tr>
            <?php
                foreach($key as $value)
                {
                    ?>

                    <td><?php echo $val[$i][$value] ?></td>
            <?php    }
            ?>
            </tr>

    <?php    }

    ?>
</table>