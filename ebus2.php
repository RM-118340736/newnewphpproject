<?php
session_start();
$fullNameValue = "";
$totalValue2="";
/*
 * * create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] =$fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
        
 ?>      
<!DOCTYPE html>
        <html>
            <HEAD>
                <link rel="stylesheet" type="text/css" href="ebuscss.css">
                <TITLE>Personal Details</TITLE>
            </HEAD>
             
            <body>
                 <div id="image" style="float:left;">
                 <a href="http://localhost:8000/ebus1.php"><img length="100px" width="100px" src="rightArrow.png" alt=""/></a>
                 </div>

                 <div id="texts" style="align-content:center;"> 
                 <h4> - Please enter your Details -</h4>
                 </div>
                <div class ="form">
                    
                    <form name =" Details" method="post" action="ebus3.php">
                        <center>
                            <table cellspacing="10">
                                <tr>
                                    <td><b></b></td>
                                    <td><b></b></td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" id="txtName" name="txtName" value=""/></td>  
                                </tr>
                                 <tr>
                                    <td>Phone Number</td>
                                    <td><input type="text" id="txtNum" name="txtNum" value=""/></td>  
                                </tr>
                                 <tr>
                                    <td>Password</td>
                                    <td><input type="text" id="txtPassword" name="txtPassword" value=""/></td>  
                                </tr>
                                <tr>                               
                                    <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue ;?>"/></td>  
                                </tr>
                            </table>
                        </center>
                        <center>
                            <input type="submit" class="button" name="btnContinue" id="btnContinue" oneclick="" value="Continue"/>
                        </Center>
                    </form>
                </div>
            </body>



