<body>
<div align="center">
<h1 style="color:#414040"><u>MESS FEES</u></h1>
<table width="1058" height="204" border="0">
  <tbody>
    <tr>
      <td width="170" height="49" style="background-color:#CCD3FF"><center><font size="+1"><b>Total Mess Fees</b></font></center></td>
      
      <td width="872" style="background-color:#C0C0C0"><center><button type="button"  id= "b1" onclick = "loadJSON()">Updated Mess Fees</button></center></td>
    
    </tr>
    <tr>
      <td height="34" colspan="2">
        <p>&nbsp;</p>
        <p><font size="+2"><b>Additional Charges <font size="-1">(not mandatory)</font></b></font></p>
      </td>
    </tr>
    <tr>
      <td height="43" style="background-color:#CCD3FF"><center><font size="+1"><b>Milk Charges</b></font></center></td>
      <td style="background-color:#C0C0C0"><center><b>Rs 150/- (per month)</b></center></td>
    </tr>
  </tbody>
</table>
</div>

<script>
function loadJSON(){

  var http_request = false;
  if (window.XMLHttpRequest)
  {
   var  http_request = new XMLHttpRequest();
  }

     http_request.onreadystatechange = function() {

      
               if (http_request.readyState == 4  && this.status == 200 ) {
                  var jsonObj = JSON.parse(http_request.responseText);
                  document.getElementById("b1").innerHTML = jsonObj.name;
               }
            }     
            http_request.open("GET", "mfeesJSON.txt" , true);
            http_request.send();
  }
  </script>
</body>