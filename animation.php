
<head>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Khula:700);


.console-container {
background-image:  url("assets/img/ani.jpg");
  font-family:Khula;
  font-size:4em;
  text-align:center;
  height:65vh;
  width:100%;
  text-align: center;
  display:block;
  position:absolute;
  color:white;
 padding-top: 140px;
  margin:auto;
   text-shadow: 2px 2px grey;

  padding-bottom: 100px;
}
.console-underscore {
   display:inline-block;
  position:relative;
  top:-0.14em;
  left:10px;
}
	</style>
</head>

<body>

<div class='console-container'>
	<span id='text'></span>
	<div class='console-underscore' id='console'>&#95;</div>
</div>
<script type="text/javascript">
	// function([string1, string2],target id,[color1,color2])    
 consoleText(['welcome to ', 'sports ticket', 'booking system.'], 'text',['tomato','rebeccapurple','lightblue']);

function consoleText(words, id, colors) {
  if (colors === undefined) colors = ['#fff'];
  var visible = true;
  var con = document.getElementById('console');
  var letterCount = 1;
  var x = 1;
  var waiting = false;
  var target = document.getElementById(id)
  target.setAttribute('style', 'color:' + colors[0])
  window.setInterval(function() {

    if (letterCount === 0 && waiting === false) {
      waiting = true;
      target.innerHTML = words[0].substring(0, letterCount)
      window.setTimeout(function() {
        var usedColor = colors.shift();
        colors.push(usedColor);
        var usedWord = words.shift();
        words.push(usedWord);
        x = 1;
        target.setAttribute('style', 'color:' + colors[0])
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (letterCount === words[0].length + 1 && waiting === false) {
      waiting = true;
      window.setTimeout(function() {
        x = -1;
        letterCount += x;
        waiting = false;
      }, 1000)
    } else if (waiting === false) {
      target.innerHTML = words[0].substring(0, letterCount)
      letterCount += x;
    }
  }, 120)
  window.setInterval(function() {
    if (visible === true) {
      con.className = 'console-underscore hidden'
      visible = false;

    } else {
      con.className = 'console-underscore'

      visible = true;
    }
  }, 400)
}
</script>
</body>