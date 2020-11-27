var canvas = document.getElementById("can3");
var ctx = canvas.getContext("2d");

//O left
ctx.beginPath();
ctx.lineWidth = 10;
ctx.arc(30, 120, 20, 0, 2 * Math.PI);
ctx.stroke();
ctx.fillStyle="#fff";
ctx.fill();
ctx.closePath();

//O right
ctx.beginPath();
ctx.arc(170, 120, 20, 0, 2 * Math.PI);
ctx.stroke();
ctx.fillStyle="#fff";
ctx.fill();
ctx.closePath();

//W
ctx.beginPath();
ctx.lineWidth = 5;
ctx.lineTo(60,100);
ctx.lineTo(80,140);
ctx.lineTo(100,100);
ctx.lineTo(120,140);
ctx.lineTo(140,100);
ctx.stroke();
ctx.closePath();