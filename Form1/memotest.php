<html>
<head>

</head>
<body>
 
   
   
   
     
    




<?php
   
   function random()
   {
       return (rand(100000,999999));
     //  echo   (rand(100000,999999));
   }

   function check($a)
   {
       $conn=mysqli_connect("localhost","root","","teacher");
       $sql="SELECT * FROM memo1 WHERE memo='" . $a . "'";
       $result=mysqli_query($conn,$sql);
         
       if ($result)
       {
          if (mysqli_num_rows($result) > 0)
              {
                  // echo 'found!<br>';
                   check(random());
              }

              else 
              {
                //  echo 'not found<br>';
                  $result1 = mysqli_query($conn,"SELECT * FROM memo1;");
                  $num_rows = mysqli_num_rows($result1)+1;
                  
                 // echo "$num_rows Rows\n";
                  echo "$a";
                  

                  $sql1 = "INSERT INTO  memo1 (sl,memo)
                  VALUES (' $num_rows', '$a')";
         
                  if(mysqli_query($conn,$sql1))
                  {
                   //  echo "New record created successfully<br>";
                  }
         
                 
           
              }
             }
          
        
       
       mysqli_close($conn);
   }

   check(random());

   ?>
  


</body>
</html>
