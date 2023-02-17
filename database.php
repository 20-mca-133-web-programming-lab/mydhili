        <html>
   <head>
      <title>Connecting MySQL Server</title>
   </head>
   <body>
<form method="post" action="database.php">
  
  id<input type="text" id="id" name="id" ><br>
 
  name<input type="text" id="name" name="name" ><br><br>
 
  mark<input type="text" id="mark" name="mark" ><br>

  submit<input type="submit" value="Submit" >

</form>
      <?php
         
         $conn =  mysqli_connect('localhost', 'root', '',"DB11");
         
         // Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";



        if($_SERVER["REQUEST_METHOD"] == "POST")
 {
$id = $_POST["id"]; 
    $name = $_POST["name"]; 
    $mark = $_POST["mark"];
      
    $sql = "INSERT INTO Student1 VALUES ('$id', '$name' ,'$mark')";

if ($conn->query($sql) === TRUE) {
  //echo "Data entered successfully";
}
 else
 {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

  } 
   
      ?>
   </body>
</html>

