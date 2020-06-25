<html>
    <head></head>

    <body>
        <?php

        $conn=mysqli_connect("localhost","root","","teacher");

                $sql="SELECT Designation FROM `info` where Name='Razu'";
                $result=mysqli_query($conn,$sql);
                $resultCheck=mysqli_num_rows($result);

                if($resultCheck>0)
                {
                    while($row=mysqli_fetch_assoc($result))
                    {
                        $d=$row['Designation']."<br>";
                        $e=$row['Department']."<br>";
                    }

                    

                
                }

          
        ?>


        
    </body>
</html>
