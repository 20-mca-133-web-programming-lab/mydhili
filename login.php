<form  method="post" >
 

  
    <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

  
    <input type="password" placeholder="Enter Password" id="psw" name="psw" required>

    <input type="submit" value="course" onclick="login.php">
    

  
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

