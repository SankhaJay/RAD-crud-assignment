<?php require_once("connection.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Time Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: center;    
        }
    </style>

</head>


<body>
<?php

    function pri($db,$day,$time,$l_hall){
        $result = mysqli_query($db,"SELECT * from time_table WHERE day ='$day' AND time = '$time' AND l_hall = '$l_hall'");
        if (!$result) {
            echo "Could not run query: ". mysqli_error($db);
            exit;
        }
        $row = mysqli_fetch_row($result);
        $num = mysqli_num_rows($result);
        if($num==0){
            return;
        }
        else{
            $str = "$row[3].<br>$row[2]";
            echo $str;
        }

    }
    
?>
    <table style="width:100%">
        <tr>
            <th>Time</th>
            <th colspan="2">Monday</th>
            <th colspan="2">Tuesday</th>
            <th colspan="2">Wednesday</th>
            <th colspan="2">Thursday</th>
            <th colspan="2">Friday</th>
            <th colspan="2">Sunday</th>
        </tr>
        <tr>
            <td></td>
            <td>001</td>
            <td>002</td> 
            <td>001</td>
            <td>002</td>
            <td>001</td>
            <td>002</td>
            <td>001</td>
            <td>002</td>
            <td>001</td>
            <td>002</td>
            <td>001</td>
            <td>002</td>       
        </tr>   
        <tr>
            <td>2pm - 3pm</td>
        
            <td><?php pri($db,"Monday","2pm - 3pm",1); ?> </td>
            <td><?php pri($db,"Monday","2pm - 3pm",2); ?> </td>
            <td><?php pri($db,"Tuesday","2pm - 3pm",1); ?> </td>
            <td><?php pri($db,"Tuesday","2pm - 3pm",2); ?> </td>
            <td><?php pri($db,"Wednesday","2pm - 3pm",1); ?> </td>
            <td><?php pri($db,"Wednesday","2pm - 3pm",2); ?> </td>
            <td><?php pri($db,"Thursday","2pm - 3pm",1); ?> </td>
            <td><?php pri($db,"Thursday","2pm - 3pm",2); ?> </td>
            <td><?php pri($db,"Friday","2pm - 3pm",1); ?> </td>
            <td><?php pri($db,"Friday","2pm - 3pm",2); ?> </td>
            <td><?php pri($db,"Sunday","2pm - 3pm",1); ?> </td>
            <td><?php pri($db,"Sunday","2pm - 3pm",2); ?> </td>
        </tr>
        <tr>
            <td>3pm - 4pm</td>
            <td><?php pri($db,"Monday","3pm - 4pm",1); ?> </td>
            <td><?php pri($db,"Monday","3pm - 4pm",2); ?> </td>
            <td><?php pri($db,"Tuesday","3pm - 4pm",1); ?> </td>
            <td><?php pri($db,"Tuesday","3pm - 4pm",2); ?> </td>
            <td><?php pri($db,"Wednesday","3pm - 4pm",1); ?> </td>
            <td><?php pri($db,"Wednesday","3pm - 4pm",2); ?> </td>
            <td><?php pri($db,"Thursday","3pm - 4pm",1); ?> </td>
            <td><?php pri($db,"Thursday","3pm - 4pm",2); ?> </td>
            <td><?php pri($db,"Friday","3pm - 4pm",1); ?> </td>
            <td><?php pri($db,"Friday","3pm - 4pm",2); ?> </td>
            <td><?php pri($db,"Sunday","3pm - 4pm",1); ?> </td>
            <td><?php pri($db,"Sunday","3pm - 4pm",2); ?> </td>
        </tr>
        <tr>
            <td>4pm - 5pm</td>
            <td><?php pri($db,"Monday","4pm - 5pm",1); ?> </td>
            <td><?php pri($db,"Monday","4pm - 5pm",2); ?> </td>
            <td><?php pri($db,"Tuesday","4pm - 5pm",1); ?> </td>
            <td><?php pri($db,"Tuesday","4pm - 5pm",2); ?> </td>
            <td><?php pri($db,"Wednesday","4pm - 5pm",1); ?> </td>
            <td><?php pri($db,"Wednesday","4pm - 5pm",2); ?> </td>
            <td><?php pri($db,"Thursday","4pm - 5pm",1); ?> </td>
            <td><?php pri($db,"Thursday","4pm - 5pm",2); ?> </td>
            <td><?php pri($db,"Friday","4pm - 5pm",1); ?> </td>
            <td><?php pri($db,"Friday","4pm - 5pm",2); ?> </td>
            <td><?php pri($db,"Sunday","4pm - 5pm",1); ?> </td>
            <td><?php pri($db,"Sunday","4pm - 5pm",2); ?> </td>
        </tr>
        <tr>
            <td>5pm - 6pm</td>
            <td><?php pri($db,"Monday","5pm - 6pm",1); ?> </td>
            <td><?php pri($db,"Monday","5pm - 6pm",2); ?> </td>
            <td><?php pri($db,"Tuesday","5pm - 6pm",1); ?> </td>
            <td><?php pri($db,"Tuesday","5pm - 6pm",2); ?> </td>
            <td><?php pri($db,"Wednesday","5pm - 6pm",1); ?> </td>
            <td><?php pri($db,"Wednesday","5pm - 6pm",2); ?> </td>
            <td><?php pri($db,"Thursday","5pm - 6pm",1); ?> </td>
            <td><?php pri($db,"Thursday","5pm - 6pm",2); ?> </td>
            <td><?php pri($db,"Friday","5pm - 6pm",1); ?> </td>
            <td><?php pri($db,"Friday","5pm - 6pm",2); ?> </td>
            <td><?php pri($db,"Sunday","5pm - 6pm",1); ?> </td>
            <td><?php pri($db,"Sunday","5pm - 6pm",2); ?> </td>
        </tr>

    </table>
</body>
</html>
