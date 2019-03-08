<!DOCTYPE html>

<html>
    <head>
        <title> Homepage </title>
        <style>
            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: lightblue;
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
                        background-color: lightseagreen;
                        }        
            
        </style>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("p").click(function(){
                $(this).hide();
                });
            });
</script>
        
    </head>
    
    <body>
         <body background ="background.jpg">
        
        <ul>
            <li><a class="active" href="index.php.html">Home</a></li>
            <li><a href="CV.html"> CV </a></li>
            <li><a href="Interests.html"> Interests </a></li>
            <li><a href="consultingServices.html"> Our Consulting Service </a></li>
            <li><a href="eBus1.php"> eBusiness </a></li>
        </ul>
        
             <hr>     
             
        <center>
        <h2> Internet Development Project </h2>
        <h3> Aoife O'Sullivan </h3>
        
        <br/>
        
        <a href ="" />Heroku link </a>
        <br/>
        <a href ="" /> Github Link </a>
        
        <hr>
        
        <p> This module has thought me all about web development and how to implement different technologies such as PHP and JavaScript.
            Click me to hide this text and continue to view my project! </p>
        </center>

    </body>
</html>
