<form  method="post" >
 

  
    <input type="text" placeholder="Enter coursename" id="cname" name="uname" required>

  
    <input type="int" placeholder="Enter courseid" id="psw" name="psw" required>

    <input type="int" placeholder="Enter coursedu" id="psw" name="psw" required>

    <input type="submit" value="course" onclick="course.php">
    

  
</form>








<?php

 $conn =  mysqli_connect('localhost', 'root', '',"DB1");
         
         // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";

 

      if($_SERVER["REQUEST_METHOD"] == "POST" )
 {
   $uname = $_POST["uname"]; 

    $pwd = $_POST["psw"]; 

$sql = "SELECT *  FROM course where course_name='$cname' ,course_id='$cid' and course_duration='$cdurtion'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "Mission accomplished";
}
else
{
echo"wrong username ,password";
}
}
?>

