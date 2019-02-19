
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php?>

<html>
    <head>
        
        <title>Calculator</title>
        <script language="javascript" type="text/javascript">
         function packageTotal()
         // Enter in prices here
         var x = 5;
         var y = 10;
         var p = x + y * 12;
         var b = y * 12;
         
         
         if (document.getElementByID('basicProgram').Checked) {
             //Basic package is closed
             document.calculator.total.value=b;
             
         } else if (document.getElementById('proProgram').checked) {
             //Pro package is checked
             document.calculator.total.value=p;
      
         }
       
    </head>
    <body>
        <?php
         
        ?>
    </body>
</html>



