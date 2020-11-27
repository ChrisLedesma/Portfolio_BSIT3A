var canvas = document.getElementById("can7");
var ctx = canvas.getContext("2d");

//cream
ctx.beginPath();
ctx.arc(100, 70, 40, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#4d4d4d";
ctx.fill();

//cone
ctx.beginPath();
ctx.lineTo(65,90);
ctx.lineTo(135,90);
ctx.lineTo(100,190);
ctx.fillStyle = "rgb(169,125,100)";
ctx.fill();
ctx.closePath();