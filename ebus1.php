
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" type="text/css" href="ebuscss.css">
        <meta charset="utf-8" />
        <title>Service Calculator</title>
        
    </head>
        <body>
            
       <div id="container">
       <div id="image" style="float:left;">
       <a href="http://localhost:8000/UpdatedConsultancyHomePage.html"><img length="80px" width="80px" src="rightArrow.png" alt=""/></a>
       </div>
           
           <h6><img length="220px" width="220px" src="img/possibleLogo.png" alt=""/></h6>
           <h1> - Service Calculator - </h1>
    </div> 
            
        <div class="form">
            <form id="form" name="intCalc" method="post" action="Ebus2.php">
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Service</b></td>
                </tr>
                <tr>
                    <td>BlockChain</td>
                    <td><input type="radio" id="BlockChain" name="rdoGroup" value="1000" /></td>
                </tr>
                <tr>
                    <td>Autonomous Things</td>
                    <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
       
        <br />
            <center>
            <input type="button" class="button" name="btnCalc" id="btnCalc"  onclick="calcSub()" value="Calculate Amount"/>
            <input type="button" class="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="      Clear      "/>
            <input type="submit" class="button" name="btnProceed" id="btnProceed" onclick="" value="     Proceed     "/>
        </center>
            </form>
        </div>
       
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var argSubTotal = parseFloat(document.getElementById('txtSubTot').value);
                    var BlockChain = parseFloat(document.getElementById('BlockChain').value);
                    var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                    var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                   
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('BlockChain').checked) {
                        document.intCalc.txtSubTot.value = BlockChain;
                        argSubTotal = BlockChain;
                        calcDiscVatTotal(argSubTotal);
                       
                    }
                   else if (document.getElementById('AutonomousThings').checked) {
                        document.intCalc.txtSubTot.value = AutonomousThings;
                        argSubTotal = AutonomousThings;
                        calcDiscVatTotal(argSubTotal);
                       
                    }
                    else if (document.getElementById('ImmersiveExperience').checked) {
                        document.intCalc.txtSubTot.value = ImmersiveExperience;
                        argSubTotal = ImmersiveExperience;
                        calcDiscVatTotal(argSubTotal);
                    }
                }
               
                //function for calculationg the values//
                function calcDiscVatTotal(parmSubTotal) {
                    var subTotal = parseFloat(parmSubTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);   
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                   
                    //Inserting them into the correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
               
                function AmountClear() {
                  
                document.getElementById("txtSubTot").value="";
                document.getElementById("txtDisc").value="";
                document.getElementById("txtVAT").value="";
                document.getElementById("txtTotal").value="";
                
                }
 
            </script>
    </body>
    </html>


