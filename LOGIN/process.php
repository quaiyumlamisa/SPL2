<?php
  
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'teacher');

  if(mysqli_connect_errno())
  {
      echo "Connection Failed".mysqli_connect_error();
  }

  $result=mysqli_query($conn,"select * from teacher info");
  echo "<center>";
  

  echo"<select>";
  echo"<option> --teacher name-- </option>";

  while($row=mysqli_fetch_array($result))
  {
      echo"<option>$row[Name]</option>";
  }
  echo"</select";
  echo"<center>";

  mysqli_close($conn);
?>