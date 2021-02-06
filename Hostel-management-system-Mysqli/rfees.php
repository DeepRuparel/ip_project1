<!DOCTYPE html>
<html>
<body>

<div id="demo1">

<center><button type="button" onclick="loadDoc1()">Single Seater</button></center>
</div><br><br>

<div id="demo2">

<center><button type="button" onclick="loadDoc2()">Double Seater</button></center>
</div><br><br>


<div id="demo3">

<center><button type="button" onclick="loadDoc3()">Triple Seater</button></center>
</div>

<script>
function loadDoc1() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo1").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ss.txt", true);
  xhttp.send();
}




function loadDoc2() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo2").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ds.txt", true);
  xhttp.send();
}







function loadDoc3() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo3").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ts.txt", true);
  xhttp.send();
}
</script>

</body>
</html>
