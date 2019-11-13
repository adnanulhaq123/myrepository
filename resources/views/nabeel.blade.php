<html>
<head>
<title>
labtask5
</title>
</head>
<body id="body">
   

<input id="EnterNumber" placeholder="Enter number" ><br>
<input id="EnterLimit" placeholder="Enter Limit">

<button style="background-color: blue" id="calculate" onclick='calculate()'> Calculate</button>

<p id="demo"></p>
<script>
   function calculate(){
      var start=document.getElementById('EnterNumber').value;
      var limit=document.getElementById('EnterLimit').value ;
    
        var i=1;
      for( i=1;i<=limit;i++){
         pTag=document.getElementById("demo");
 
         var resultt=start*i;

pTag.innerHTML=pTag.innerHTML+start+"*"+i+"="+resultt+"<br>";



      }

   }
        </script>
      
</body>
</html>