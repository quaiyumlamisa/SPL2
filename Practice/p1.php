<html>
    <head></head>
    <body>
        <script type="text/javascript">

        for(y=2020;y<3000;y++)
        {
            var optn=document.createElement("OPTION");
            optn.text=y;
            optn.value=y;


            if(y==2015)
            {
               optn.selected=true;
            }

        document.getElementById('year').options.add(optn);

        }

    </script>
        <select name="year" id="year">
        <option value="">Select Year</option>
        </select>
    </body>
    </html>