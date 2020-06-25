<html>
    <head>
    </head>
    <body>
    <form action="Year2.php" method="post">   
    <select name="year" id="ddlYears"></select>
      
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(function () {
            //Reference the DropDownList.
            var ddlYears = $("#ddlYears");
    
            //Determine the Current Year.
            var currentYear = (new Date()).getFullYear();
    
            //Loop and add the Year values to DropDownList.
            for (var i = currentYear; i <=2100 ; i++) {
                var option = $("<option />");
                option.html(i);
                option.val(i);
                ddlYears.append(option);
            }
        });
    </script>
    <input type="submit" value="Submit">
    </form>

    </body>
</html>