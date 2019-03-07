<?php
    session_start();
    $fullNameValue = "";
    $totalValue2 = "";
	
    /*
     * Create a session variable for the mobile number 
     */
	 
    $totalValue = $_POST['txtTotal'];
    $_SESSION['txtName'] = $fullNameValue;
    $_SESSION['txtTotal'] = $totalValue2;
	
?>

<!DOCTYPE html>
<html>
    <head>
    	<title> eBusiness 2 </title>
        
        <style>
            body {
                background-color: #FAFAD2;
                  }
                 
            h1 {
                font-family: "Courier New", Courier, monospace    
                }
                
            #btnContinue {
                          background-color: green;
                          border: none;
                          color: white;
                          padding: 5px 5px;
                          text-align: center;
                          font-size: 14px;
                          }
            
        </style>
    </head>
	
    <body>
	<div class ="form">
            <form name ="Details" method = "post" action="eBus3.php">
                
                <h1><center><b> O'Sullivan Consulting Service Ltd. </b></center> </h1>
                <h4><center> Contact Us - Telephone: 012-123456789 e-mail: osullivanconsulting@email.com </center></h4>
                <hr/>
                
		<center> 
                    <table cellspacing ="10">
			<tr>
                            <td><b></b></td>
                            <td><b> Enter in your details below </b></td>
			</tr>
							
			<tr>
                            <td> Name </td>
                            <td> <input type="text" id="txtName" name="txtName" value ="" /></td>
			</tr>
							
			<tr>
                            <td> Number </td>
                            <td><input type="text" id="txtNumber" name="txtNumber" value="" /></td>
			</tr>
							
			<tr>
                            <td> PIN </td>
                            <td><input type="password" id="txtPassword" name="txtPassword" value="" required /></td>
			</tr>
							
			<tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>" /></td>
                        </tr>
						
                    </table>
		</center>
				
		<center>
				
		<input type ="submit" name = "btnContinue" id="btnContinue" value = "Continue" onclick ='eBus3.php' />
							
		</center>
                
            </form>
        </div>
    </body>
</html> 