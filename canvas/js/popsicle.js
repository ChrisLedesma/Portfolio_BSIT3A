var canvas = document.getElementById("can4");
var ctx = canvas.getContext("2d");

//pop
ctx.beginPath();
ctx.lineTo(70,50);
ctx.quadraticCurveTo(97,-10,125,50);
ctx.lineTo(125,150);
ctx.lineTo(70,150);
ctx.lineTo(70,50);
ctx.fillStyle = "#d35d6e";
ctx.fill();
ctx.closePath();

//stick
ctx.beginPath();
ctx.lineTo(90,150);
ctx.lineTo(105,150);
ctx.lineTo(105,185);
ctx.lineTo(90,185);
ctx.fillStyle = "#f8d49d";
ctx.fill();
ctx.closePath();
