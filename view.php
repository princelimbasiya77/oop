<?php 

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "demo";


    $con = new mysqli($serverName , $userName , $password , $dbName);

    $qry = "SELECT * FROM `demodata`";

    $fier = $con -> query($qry);

    $row = mysqli_fetch_all($fier , MYSQLI_ASSOC);

    echo "<pre>";
    print_r($row);
    
    $keys = array_keys($row[0]);
    echo "<pre>";
    print_r($keys);

    $key_count = count($keys);

    $val = array_values($row);
    echo "<pre>";
    print_r($val);

    $record_count = count($row);



?>

<table border="1">
    <tr>
        <?php 
            for($i=0 ; $i<$key_count ; $i++)
            {
                ?>
                <td><?php echo $keys[$i] ?></td>
            <?php }
        ?>
    </tr>
    <?php 

        for($i=0 ; $i<$record_count ; $i++)
        {
            ?>

            <tr>
            <?php
                foreach($keys as $value)
                {
                    ?>

                    <td><?php echo $val[$i][$value] ?></td>
            <?php    }
            ?>
            </tr>

    <?php    }

    ?>
</table>