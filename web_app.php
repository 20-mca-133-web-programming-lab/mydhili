<html>
<head>
<title> Sample web Applocation </title>
</head>
</body>
<form action="#" align ="Center" method="POST">
<b> Your salary:</b> <input type="text" name="salary" Value="">
<b> Total Months: m</b> <input type="text" name="month" value=" ">
<input type="submit" name="submit" value="calculate"></form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
$sal=$_POST['salary'];
$month=$_POST['month'];
$result=$sal*$month;
echo "Your Total salary is:$result";
}
?>
