<?php 

    $connect = mysqli_connect("localhost","root","","demo");

    if(isset($_POST['submit']))
    {
        
        $result = $_POST;
        
        $pop = array_pop($result);
        // echo "<pre>";
        // print_r($result);

        $keys = array_keys($result);
        // echo "<pre>";
        // print_r($keys);
        
        $key = implode("`,`",$keys);
        // echo $key;
        
        $values = array_values($result); 
        // echo "<pre>";
        // print_r($values);

        $value = implode("','",$values);
        // echo $value;

        $qry = "INSERT INTO `oops` (`$key`) VALUES ('$value')";
        // echo "<br>".$qry;

        if(mysqli_query($connect , $qry))
        {
            echo "Enter ...";
        }
        else
        {
            echo "no";
        }
    }


?>


<form action="" method="POST">
    <table border="1">
        <tr>
            <td>NAme</td>
        <td><input type="text" name="name" id=""></td>
        </tr>
        <tr>
            <td>Surname</td>
            <td><input type="text" name="surname" id=""></td>
        </tr>
        <tr>
            <td>Number</td>
            <td>
                <input type="text" name="number" id="">
            </td>
        </tr>
        <tr>
            <td>Submit</td>
            <td><input type="submit" name="submit" id=""></td>
        </tr>
    </table>
</form>