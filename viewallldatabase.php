<?php

$con = new mysqli("localhost","root","","login_system");

session_start();

$Table = $_SESSION['tablename'];

if (@$_GET['table']) {

    $TableName = $_GET['table'];
    $_SESSION['tablename'] = $TableName;

    $query = "SELECT * FROM  `$TableName`";
}
else
{
    $query = "SELECT * FROM  `$Table`"; 
}

if (@$_GET['delete']) {

    $delete_id = $_GET['delete'];
    $query = "DELETE FROM `$Table` WHERE `id` = '$delete_id'";
    header("location:viewallldatabase.php");

}
if(@$_GET['serchClick'])
{
    $srch_value = $_GET['srch'];
    $query = "SELECT * FROM `$Table` WHERE `id` LIKE '%$srch_value%'";
}
else
{
$query = "SELECT * FROM `$Table`";
}

$row = mysqli_fetch_all($con -> query($query),MYSQLI_ASSOC);

$key = array_keys($row[0]);
$key_count = count($key);
$val = array_values($row);
$val_count = count($row);

?>
 <form action="">
        <table>
            <tr>
                <td>Search</td>
                <td><input type="text" name="srch" id=""></td>
                <td><input type="submit" name="serchClick" id=""></td>
            </tr>
        </table>
    </form>
<table border="1">
    <tr>
        <?php 
    for ($i=0; $i < $key_count; $i++) { 
        ?>
        <td><?php echo $key[$i]?></td>
        <?php
}
    ?>
        <td>Delete</td>
    </tr>

    <?php
for ($i=0; $i < $val_count; $i++) { 
  ?>
    <tr>
        <?php
foreach($key as $values)
{
   ?>
        <td><?php echo $val[$i][$values]?></td>
        <?php
}
?>
        <td><button><a href="viewallldatabase.php?delete=<?php echo $val[$i]['id'] ?>">delete</a></button></td>
    </tr>

    <?php
}

?>


</table>