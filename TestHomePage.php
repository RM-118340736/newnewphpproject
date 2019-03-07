<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    body {
        background-color:#000900;       
    }
 h2 {
      color:#66ff66;
      font-size:48px;
      text-align:center;  
  }   

* {
  box-sizing: border-box;
}

/* Create three equal columns that floats next to each other */
.column {
  float: left;
  width: 33.33%;
  padding: 100px;
  height: 400px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>

    <h2> - Home Page -</h2>
<p>Resize the browser window to see the responsive effect (the columns will stack on top of each other instead of floating next to each other, when the screen is less than 600px wide).</p>

<div class="row">
  <div class="column" style="background-color:#aaa;">
    <br>
    <h2>Interests
    </h2>
    <p></p>
  </div>
  <div class="column" style="background-color:#bbb;">   
    <br>
    <h2>Curriculum Vitae</h2>
    <p></p>
  </div>
  <div class="column" style="background-color:#ccc;">
      <br>
      <h2>Consultancy Services</h2>
    <p></p>
  </div>
</div> 
</body>

</html>






