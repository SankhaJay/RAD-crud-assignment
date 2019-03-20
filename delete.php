<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Time Table</title>

</head>

<body>
<h3>Select the day,time slot and the lecture hall to delete</h3>
    <h4><form action="delete_database.php" method="post">
        Day:<select name="day">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Sunday">Sunday</option>
        </select><br>
        Time:<select name="time">
            <option value="2pm - 3pm">2pm - 3pm</option>
            <option value="3pm - 4pm">3pm - 4pm</option>
            <option value="4pm - 5pm">4pm - 5pm</option>
            <option value="5pm - 6pm">5pm - 6pm</option>
        </select><br>
        Lecture Hall Number:<select name="l_hall">
        <option value="1">001</option>
        <option value="2">002</option>
        </select><br>
        <input type="submit" name="submit"> <br>
        </form></h4>
</body>
</html>
