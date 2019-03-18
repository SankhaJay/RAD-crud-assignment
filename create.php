<?php require_once("connection.php")?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Time Table</title>

</head>

<body>
    <form action="" method="post">
        Day:<select name="day">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select><br>
        Time<select name="time">
            <option value="2">2pm - 3pm</option>
            <option value="saab">3pm - 4pm</option>
            <option value="fiat">4pm - 5pm</option>
            <option value="audi">5pm - 6pm</option>
        </select><br>
        Subject Name:  <select name="subject">
            <option value="sinhala">Sinhala</option>
            <option value="english">English</option>
            <option value="science">Science</option>
            <option value="history">History</option>
            <option value="maths">Mathematics</option>
            <option value="music">Music</option>
            <option value="art">Art</option>
        </select><br>
        Teacher's Name:<input type="text" name="t_name"> <br>
        Lecture Hall Number:<input type="text" name="day"> <br>
        <input type="submit" name="submit"> <br>

    </form>

</body>
</html>
