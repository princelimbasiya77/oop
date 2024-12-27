<?php

$con = new mysqli("localhost","root","","ltepro");
session_start();
$table = $_SESSION['tablename'];

if(@$_GET['table'])
{
    $tableName = $_GET['table'];
    $_SESSION['tablename'] = $tableName;

$qry = "SELECT * FROM `$tableName` ";

}
else
{
$qry = "SELECT * FROM `$table` ";
    
}

if(isset($_GET['delete']))
{
    $delete_id = $_GET['delete'];
$qry = "DELETE FROM `$table` WHERE `id` = '$delete_id'";
// $con -> query($qry);
header("location:demo.php");
}

// if(@$_GET['srchBTN'])
// {
//     $scrh = $_GET['scrh'];
//     $qry = "SELECT * FROM `$table` WHERE `name` LIKE '%$scrh%' ";
// }
// else
// {
//     $qry = "SELECT * FROM `$table` ";
    
// }

$row = mysqli_fetch_all($con -> query($qry),MYSQLI_ASSOC);

$key = array_keys($row[0]);
$key_count = count($key);
$val = array_values($row);
$val_count = count($row);

?>
<form action="">
    <table>
        <tr>
            <td><input name="scrh" type="text"></td>
            <td><input name="srchBTN" type="submit"></td>
        </tr>
    </table>
</form>

<table border="1">
    <tr>
        <?php
for($i=0;$i<$key_count;$i++)
{
?>
        <td><?php echo  $key[$i] ?></td>
        <?php
}
?>
        <td>DELETE</td>

<?php

for($i=0;$i<$val_count;$i++)
{
?>
    <tr>
        <?php
        foreach($key as $value)
        {
            ?>
        <td><?php echo  $val[$i][$value] ?></td>
        <?php
        }
        ?>
        <td><button><a href="demo.php?delete=<?php echo $val[$i]['id']?>">DELETE</a></button></td>

    </tr>

    <?php
}

?>

    </tr>


</table>