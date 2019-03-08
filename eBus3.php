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
