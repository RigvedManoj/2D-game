<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  button
  {
  	background:lightgreen;
  	border-radius: 2px;
  	width: 10em;
  	height: 3em;
    cursor: pointer;
  }
  #button1
  {
    position:fixed;
    top:100px;
    left:0px;
  }
  #button3
  {
    position:fixed;
    top:0px;
    left:200px;
  }
  #button4
  {
    position:fixed;
    top:200px;
    left:200px;
  }
  #button2
  {
    position:fixed;
    top:100px;
    left:400px;
  }
  </style>
</head>
<body>
  <button id="button1" onclick="left()">left</button>
  <button id="button2" onclick="right()">right</button>
  <button id="button3" onclick="top1()">top</button>
  <button id="button4" onclick="down1()">down</button>
</body>
<script>
function left()
{
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "control.php?id=1", true);
  xhttp.send();
}
function right()
{
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "control.php?id=2", true);
  xhttp.send();
}
function top1()
{
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "control.php?id=3", true);
  xhttp.send();
}
function down1()
{
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.open("GET", "control.php?id=4", true);
  xhttp.send();
}
</script>
