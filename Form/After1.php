
<html>
<body>

Welcome <?php echo $_POST["country"];
echo "<br>";
$a=$_POST["country"];


        $conn=mysqli_connect("localhost","root","","teacher");

                $sql="SELECT * FROM `info` WHERE t_name='" . $a . "'";
                $result=mysqli_query($conn,$sql);
               // $resultCheck=mysqli_num_rows($result);

               // if($resultCheck>0)
               // {
                if (mysqli_num_rows($result) > 0)
                 {
                    while($row = mysqli_fetch_assoc($result)) 
                    {
                       echo "Designation: " . $row["Designation"]. "<br>";
                       echo "Department: " . $row["Department"]. "<br>";
                    }

                 }  

                
                 mysqli_close($conn);
               

          
        ?>



</body>
</html>