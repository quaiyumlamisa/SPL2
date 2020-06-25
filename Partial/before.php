<html>
    <head>page to page</head>
    <body>
        <p>send data to another page</p>
        <form action="After.php" method="post">
         First name: <input type="text" name="fname"><br>

         <label for="birthday">Birthday:</label>
         <input type="date" id="birthday" name="birthday">
     

      
        <p>প্রাপকঃ</p>
        <?php
                $hostname="localhost";
                $dbname1="teacher";
                $username="root";
                $password="";
                

                $conn=mysqli_connect("$hostname","$username","","$dbname1");

                if(mysqli_connect_errno())

                {
                    echo "Connection Failed" .mysqli_connect_error();
                }

                $result=mysqli_query($conn,"SELECT * FROM info");
                echo"<left>";
                echo"<select >";
                echo"<option> Select Teacher name</option>";

                while($row=mysqli_fetch_array($result))
                {
                    echo "<option>$row[Name]</option>";
                }
                echo "</select>";
                echo "</left>";

               

                mysqli_close($conn);
 ?>


    </form>
    </body>

</html>