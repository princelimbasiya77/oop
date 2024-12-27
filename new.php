<?php
    $connect = mysqli_connect("localhost","root","","longdata");
    
    if(isset($_POST['ONsubmit']))
    {
$pop = array_pop($_POST);
   
$key = implode("`,`",array_keys($_POST));
$value = implode("','",array_values($_POST));


$query = "INSERT INTO `function` (`$key`) VALUES ('$value')";
mysqli_query($connect , $query);
    }

?>

<form action="" method="POST">
    <table border="1">
        <tr>
            <td>Name</td>
            <td><input type="text" name="Name" id=""></td>
        </tr>
        <tr>
            <td>Surname</td>
            <td><input type="text" name="Surname" id=""></td>
        </tr>
        <tr>
            <td>Fathername</td>
            <td><input type="text" name="Fathername" id=""></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="Email" id=""></td>
        </tr>
        <tr>
            <td>Age</td>
            <td><input type="text" name="Age" id=""></td>
        </tr>
        <tr>
            <td>date of birth</td>
            <td><input type="date" name="Dob" id=""></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <select name="Gender" id="">
                    <option value="" selected  disabled>Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>

                </select>
            </td>
        </tr>
        <tr>
            <td>Number</td>
            <td>
                <input type="text" name="Number" id="">
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>
                <input type="password" name="Password" id="">
            </td>
        </tr>
        <tr>
            <td>Submit</td>
            <td><input type="submit" name="ONsubmit" id=""></td>
        </tr>
    </table>
</form>