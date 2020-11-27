var canvas = document.getElementById("can5");
var ctx = canvas.getContext("2d");

//ear
ctx.beginPath();
ctx.arc(50, 80, 35, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#b9b9b9";
ctx.fill();

//ear-circle
ctx.beginPath();
ctx.arc(50, 80, 20, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();

//ear2
ctx.beginPath();
ctx.arc(145, 80, 35, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#b9b9b9";
ctx.fill();

//ear2-circle
ctx.beginPath();
ctx.arc(145, 80, 20, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();

//head
ctx.beginPath();
ctx.arc(100, 120, 65, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#b9b9b9";
ctx.fill();

//eyes
ctx.beginPath();
ctx.arc(70, 105, 8, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();

//eyes2
ctx.beginPath();
ctx.arc(130, 105, 8, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();

//nose
ctx.beginPath();
ctx.arc(100, 130, 15, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();