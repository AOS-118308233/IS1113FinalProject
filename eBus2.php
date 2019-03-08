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