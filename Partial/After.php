<html>
<body>

Welcome <?php echo $_POST["fname"]; ?><br>
Your birthday is on <?php 
                      $orgDate = $_POST["birthday"];  
                      $newDate = date("d-m-Y", strtotime($orgDate));  
                      echo "New date format is: ".$newDate. " (MM-DD-YYYY)";  
?>

</body>
</html>