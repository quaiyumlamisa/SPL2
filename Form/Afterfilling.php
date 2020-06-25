<html>
<head>
        <meta charset="utf-8">
</head>
<body>


<?php

class BanglaConverter {
   public static $bn = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
   public static $en = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
   
   public static function bn2en($number) {
       return str_replace(self::$bn, self::$en, $number);
   }
   
   public static function en2bn($number) {
       return str_replace(self::$en, self::$bn, $number);
   }
}
?>

তারিখ:   <?php 
                      $orgDate = $_POST["birthday"];  
                      $newDate = date("d-m-Y", strtotime($orgDate));  
                     
                      echo BanglaConverter::en2bn($newDate);

?>

নাম: <?php echo $_POST["teacher"];
echo "<br>";
$a=$_POST["teacher"];


        $conn=mysqli_connect("localhost","root","","faculty");

                $sql="SELECT * FROM teacher WHERE t_name='" . $a . "'";
                $result=mysqli_query($conn,$sql);
               // $resultCheck=mysqli_num_rows($result);

               // if($resultCheck>0)
               // {
                if (mysqli_num_rows($result) > 0)
                 {
                    while($row = mysqli_fetch_assoc($result)) 
                    {
                       echo "" . $row["designation"]. "<br>";
                       echo "" . $row["department"]. "<br>";
                    }

                 }  

                
                 mysqli_close($conn);
               

          
        ?>

সাল:  <?php echo BanglaConverter::en2bn($_POST["year"]);?>
</body>
</html>