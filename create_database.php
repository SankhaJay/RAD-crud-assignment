<?php require_once("connection.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Time Table</title>
</head>

<body>
<?php
echo "$_POST[time]";
    $result = mysqli_query($db,"SELECT * from time_table WHERE day ='$_POST[day]' and time = '$_POST[time]' and l_hall = '$_POST[l_hall]'");
    if (!$result) {
        echo "Could not run query: ". mysqli_error();
        exit;
    }
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_row($result);
    echo $num;
    if($num>0){
        echo "cannot insert";
    }
     else{
        $sql = mysqli_query($db,"UPDATE time_table SET t_name = '$_POST[t_name]', subject = '$_POST[subject]', is_set = 1 WHERE day ='$_POST[day]' AND time = '$_POST[time]' AND l_hall = '$_POST[l_hall]'");
        echo "added succesfully";
    } 

?>   

</body>
</html>