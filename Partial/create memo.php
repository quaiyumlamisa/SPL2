<html>
    <head>
        <title>create memo number</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("input:number").val(Math.floor(Math.random() * (100- 1 + 1) ) + 1;);
  });
});
</script>

        </head>
    <body>
        
      
    Memo number
    

<p>Name: <input type="number" name="user"></p>

<button>Set the value of the input field</button>


<script>
function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}
</script>




    </body>
</html>