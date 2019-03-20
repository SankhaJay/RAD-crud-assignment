<?php require_once("connection.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Time Table</title>
</head>

<body>
<?php
    $result = mysqli_query($db,"SELECT * from time_table WHERE day ='$_POST[day]' AND time = '$_POST[time]' AND l_hall = '$_POST[l_hall]'");
    if (!$result) {
        echo "Could not run query: ". mysqli_error($db);
        exit;
    }
    $num = mysqli_num_rows($result);//getting num of rows for the query
    if($num==0){
        echo "cannot update. Entry doesn't exist";
    }
     else{
        $sql = mysqli_query($db,"UPDATE time_table 
        SET t_name='$_POST[t_name]',subject='$_POST[subject]'
        WHERE day ='$_POST[day]' AND time = '$_POST[time]' AND l_hall = '$_POST[l_hall]'");//sql query to update the query
        if (!$sql) {
            echo "Could not run query: ". mysqli_error($db);
            exit;
        }
        echo "Updated succesfully";
    } 
    mysqli_close($db);
?>   

</body>
</html>
