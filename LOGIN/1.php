
<html>
 <body>
 <p>hellooooo,kmn aso????</p>

<?php


 $hostname="localhost";
 $dbname1="table";
 $username="root";
 $password="";
 $a="shamma";

 $conn=mysqli_connect("$hostname","$username","","$dbname1");

 if(mysqli_connect_errno())

 {
     echo "Connection Failed" .mysqli_connect_error();
 }

 $result=mysqli_query($conn,"SELECT * FROM employee");
 echo"<center>";
 echo"<select>";
 echo"<option>---Search---</option>";

 while($row=mysqli_fetch_array($result))
 {
     echo "<option>$row[Name]</option>";
 }
 echo "</select>";
 echo "</center>";


 $result1 = mysqli_query($conn,"SELECT Name FROM employee where Name='Shamma'");
if (!$result1) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}
while ($row = mysqli_fetch_row($result1)) {
  echo  $row[0];
}
mysqli_free_result($result1);
 mysqli_close($conn);



?>

<p>hellooooooooooooooooo</p>

 

 
 </body>
 </html>
 