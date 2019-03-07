<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculator</title>


    </head>
    <body>



         <input type ="radio" name="serviceType" value="€1000" id="Blockchain"> Blockchain <br>
         <input type ="radio" name="serviceType" value="€2000" id="Autonomous_Things"> Autonomous Things <br>
         <input type ="radio" name="serviceType" value="€3000" id="Immersive_Experience"> Immersive Experience  <br>

         <button onclick="calcSub()">SubTotal</button>
         <p id="SubTotal"></p>




        <script>
                //A function to clculate the sub Total
                function calcSub()
                {
                var x;
                var y;
                var z;
                
                document.getElementById("Blockchain").value; {
                document.getElementById("SubTotal").innerHTML =  x;
            }
                
                document.getElementById("Autonomous_Things").value; {
                document.getElementById("Subtotal").innerHTML = y;
                
                document.getElementById("Immersive_Experience").value; {
                document.getElementById("Subtotal").innerHTML = z;
            }
                }

        </script>



    </body>
</html>