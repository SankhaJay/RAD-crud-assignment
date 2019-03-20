<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Time Table</title>

</head>

<body>
    <h3>Enter data to add a time table entry </h3>
    <h4>
    <form action="create_database.php" method="post"> <!-- data will be send to this page using POST method -->
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
        Subject Name:  <select name="subject">
            <option value="Sinhala">Sinhala</option>
            <option value="English">English</option>
            <option value="Science">Science</option>
            <option value="History">History</option>
            <option value="Maths">Mathematics</option>
            <option value="Music">Music</option>
            <option value="Art">Art</option>
        </select><br>
        Teacher's Name:<input type="text" name="t_name"> <br>
        Lecture Hall Number:<select name="l_hall">
        <option value="1">001</option>
        <option value="2">002</option>
        </select><br>
        <input type="submit" name="submit"> <br>
        </h4>
    </form>

</body>
</html>
