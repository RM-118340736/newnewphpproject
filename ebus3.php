<!DOCTYPE html>
<html>
    <head>
        <title> Receipt</title>
          <link rel="stylesheet" type="text/css" href="ebuscss.css">
    </head>
    <body>
        <div id="image" style="float:left;">
            <a href="http://localhost:8000/ebus2.php"><img length="100px" width="100px" src="rightArrow.png" alt=""/></a>
        </div>
    <center>
        <?php
        
        session_start();
        $totalValue2 = $_POST['txtTotal'];
        $fullNameValue =$_POST['txtName'];
                echo "<br></br>";
                echo "<br></br>";
                echo " User Name:" .$fullNameValue.".";
                echo "<br></br>";
                echo " The Total payment needed is  " .$totalValue2.".";
        ?>
        </center>    
    </body>
</html> 



