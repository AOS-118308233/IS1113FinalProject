<!DOCTYPE html>

<html>
    <head>
        <title> eBusiness 3 </title>
        
        <style>
            
            body {
                background-color: #FAFAD2;
                  }
                 
            h1 {
                font-family: "Courier New", Courier, monospace    
                }
                
            h4 {
                text-align: center;    
                }
        </style>
        
    </head>
    <body>
        
        <h1><center><b>O'Sullivan Consulting Service Ltd. </b></center></h1>
        <h4><center> Contact Us - Telephone: 012-123456789 e-mail: osullivanconsulting@email.com </center></h4>
            <hr/>
            
            <h4> Thank you for choosing O'Sullivan Consulting Service Ltd. We will contact you shortly to arrange a meeting </h4>
        
	<!-- Starting the session to get the session variable from the last page -->
	
        <?php 
	
	session_start();
	$totalValue2 = $_POST['txtTotal'];
	$fullNameValue = $_POST['txtName'];
	
       
	echo "Customer Name: " . $fullNameValue . ".";
	echo "<br></br>"; 
	echo "Your Total Cost is: " . $totalValue2 . ".";
	?>
	
	</body>
</html>
