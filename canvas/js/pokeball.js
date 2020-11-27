var canvas = document.getElementById("can1");
var ctx = canvas.getContext("2d");

//red part
ctx.beginPath();
ctx.lineWidth = 5;
ctx.arc(100, 100, 50, 0, 2 * Math.PI);
ctx.stroke();
ctx.closePath();
ctx.fillStyle = "#F93318";
ctx.fill();

//white part
ctx.beginPath();
ctx.arc(100, 100, 50, 0, 1 * Math.PI);
ctx.stroke();
ctx.closePath();
ctx.fillStyle = "#fff";
ctx.fill();

//black rect
ctx.beginPath();
ctx.lineTo(51,100);
ctx.lineTo(149,100);
ctx.lineTo(149,110);
ctx.lineTo(51,110);
ctx.lineTo(51,100);
ctx.fillStyle = "#000";
ctx.fill();
ctx.stroke();
ctx.closePath();

//inner white circle
ctx.beginPath();
ctx.arc(100, 105, 11, 0, 2 * Math.PI);
ctx.stroke();
ctx.closePath();
ctx.fillStyle = "#fff";
ctx.fill();

//inner white circle2
ctx.beginPath();
ctx.arc(100, 105, 6, 0, 2 * Math.PI);
ctx.stroke();
ctx.closePath();
ctx.fillStyle = "#fff";
ctx.fill();