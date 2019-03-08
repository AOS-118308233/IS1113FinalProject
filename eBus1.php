<!-- Creating a session variable -->
<?php

session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;

?>

<!DOCTYPE html>
<html lang = "en" xmlns ="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="UTF-8">
        <title> eBusiness 1</title>
        <link rel ="stylesheet" href="style.css" type="text/css"/>
        
        <style>
            body {
             background-color: #FAFAD2;
             margin: 0px;
                 }
                 
            #btnCalculate {
                    background-color: green;
                    border: none;
                    color: white;
                    padding: 5px 5px;
                    text-align: center;
                    font-size: 14px;
                           }
                          
            #btnClear {
                    background-color: yellow;
                    border: none;
                    color: white;
                    padding: 5px 5px;
                    text-align: center;
                    font-size: 14px;
                       }  
                       
            #btnProceed {
                    background-color: red;
                    border: none;
                    color: white;
                    padding: 5px 5px;
                    text-align: center;
                    font-size: 14px;
                        }  
                        
            h1 {
                font-family: "Courier New", Courier, monospace
                            
               }
               
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #ff9999
                }

            li {
                float: left;
               }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 20px 30px;
                text-decoration: none;
}

            li a:hover {
                background-color: #ff6666;
                           
        </style>
    </head>
    <body>
        
        <ul>
            <li><a class="active" href="index.php"> Home </a></li>
            <li><a href="CV.html"> CV </a></li>
            <li><a href="Interests.html"> Interests </a></li>
            <li><a href="consultingServices.html"> Our Consulting Service </a></li>
            <li><a href="eBus1.php"> eBusiness </a></li>
        </ul>
        
        <div class ="form">
            <form name="shopCalc" method="post" action="eBus2.php">
                <h1><center><b>O'Sullivan Consulting Service Ltd. </b></center></h1
                <h4><center> Contact Us - Telephone: 012-123456789 e-mail: osullivanconsulting@email.com </center></h4>
                <hr/>
                
                <center>
                    <table cellspacing="10">
                        <!-- Creating a table with 3 Consulting Service options to choose from -->
                        <tr>
                            <td><b> Consulting Services</b></td>
                        </tr>
                        
                        <tr>
                            <td> Blockchain </td>
                            <td> <input type ="radio" id="Blockchain" name ="rdoGroup" value="1000" /></td>
                        </tr>
                        
                        <tr>
                            <td> Autonomous Things </td>
                            <td> <input type="radio" id="Autonomous Things" name="rdoGroup" value="2000" /></td>
                        </tr>
                        
                        <tr>
                            <td> Immersive Experience </td>
                            <td> <input type="radio" id="Immersive Experience" name="rdoGroup" value="3000" /></td>
                        </tr>
                            
                    </table>
                </center>
                
                <br/>
                
                <center>
                    <table cellspacing="10">
                        
                        <!-- Creating the price breakdown for the Service including a 10% discount and 20% VAT -->
                        <tr>
                            <td><b> Price Breakdown </b></td>
                        </tr>
             
                        <tr>
                            <td> Subtotal </td>
                            <td><input type="text" id="txtSubTotal" name="txtSubTotal" readonly /></td>
                        </tr>
                        
                        <tr>
                            <td> Discount </td>
                            <td><input type="text" id="txtDiscount" name="txtDiscount" readonly /></td>                            
                        </tr>
                        
                        <tr>
                            <td> VAT </td>
                            <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                        </tr>
                        
                        <tr>
                            <td> Total </td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly /></td>
                        </tr>
                        
                    </table>
                    
                </center>
                
                
                <br/>
                
                <!-- Buttons to calculate the Total, to clear options and Add to Cart -->
                <center>               
                    <input type="button" id="btnCalculate" name="btnCalculate" onclick="calcSub()" value="Calculate Total" />
                    <input type="button" id="btnClear" name="btnClear" onclick="AmountClear()" value="Clear" />
                    <input type="submit" id="btnProceed" name="btnProceed" onclick="eBus2.php" value="Add to Cart" />
                </center>
                
            </form>
            
        </div> 
        
        <script type ="text/javascript">
            function calcSub()
            {
            // Declaring variables for the function
            // SubTotal is the argument 
            var SubTotal = parseFloat(document.getElementById('txtSubTotal').value); 
            var Blockchain = parseFloat(document.getElementById('Blockchain').value);
            var AutonomousThings = parseFloat(document.getElementById('Autonomous Things').value);
            var ImmersiveExperience = parseFloat(document.getElementById('Immersive Experience').value);
            
            //Selecting the Blockchain Service 
            if (document.getElementById('Blockchain').checked) 
            {
                document.shopCalc.txtSubTotal.value = Blockchain;
                SubTotal = Blockchain; 
                calcDiscVatTotal(SubTotal);
            }
            
            //Selecting Autonomous Things Service
            else if (document.getElementById('Autonomous Things').checked)
            {
                document.shopCalc.txtSubTotal.value = AutonomousThings;
                SubTotal = AutonomousThings;
                calcDiscVatTotal(SubTotal);            
            }   
            
            //Selecting Immersive Experience 
            else if (document.getElementById('Immersive Experience').checked)
            {
                document.shopCalc.txtSubTotal.value = ImmersiveExperience;
                SubTotal = ImmersiveExperience;
                calcDiscVatTotal(SubTotal);
            }
            
            }
            
            // Creating a function to calculate the SubTotal
            // Passing the parameter variable parmSubTotal to receive the Subtotal 
            function calcDiscVatTotal(parmSubTotal)
            {
            var SubTot = parseFloat(parmSubTotal);
            var DiscCalc = parseFloat(SubTot * 0.1);
            var VatCalc = parseFloat(SubTot * 0.2);
            var Total = parseFloat(SubTot - DiscCalc + VatCalc);
             
             
             //Inserting the values into the correct fields 
            document.shopCalc.txtDiscount.value = DiscCalc;
            document.shopCalc.txtVAT.value = VatCalc;
            document.shopCalc.txtTotal.value = Total;            
            }
            
            //Clear all values in the text boxes
            function AmountClear()
            {
                document.getElementById("txtSubTotal").value = "";
                document.getElementById("txtDiscount").value = "";
                document.getElementById("txtVAT").value = "";
                document.getElementById("txtTotal").value = ""; 
            }
            
                
        </script>
    </body>
</html>
