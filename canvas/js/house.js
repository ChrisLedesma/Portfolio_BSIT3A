var canvas = document.getElementById("can8");
var ctx = canvas.getContext("2d");

//house
ctx.beginPath();
ctx.lineTo(30,90);
ctx.lineTo(170,90);
ctx.lineTo(170,170);
ctx.lineTo(30,170);
ctx.lineTo(30,90);
ctx.fillStyle = "#c08f73";
ctx.fill();
ctx.closePath();

//roof
ctx.beginPath();
ctx.lineTo(30,60);
ctx.lineTo(170,60);
ctx.lineTo(190,100);
ctx.lineTo(10,100);
ctx.lineTo(30,60);
ctx.fillStyle = "red";
ctx.fill();
ctx.closePath();

//window
ctx.beginPath();
ctx.lineTo(50,120);
ctx.lineTo(70,120);
ctx.lineTo(70,140);
ctx.lineTo(50,140);
ctx.lineTo(50,120);
ctx.fillStyle = "white";
ctx.fill();
ctx.closePath();

ctx.beginPath();
ctx.lineTo(130,120);
ctx.lineTo(150,120);
ctx.lineTo(150,140);
ctx.lineTo(130,140);
ctx.lineTo(130,120);
ctx.fillStyle = "white";
ctx.fill();
ctx.closePath();

//grass
ctx.beginPath();
ctx.lineTo(0,170);
ctx.lineTo(200,170);
ctx.lineTo(200,200);
ctx.lineTo(0,200);
ctx.lineTo(0,170);
ctx.fillStyle = "#5aa469";
ctx.fill();
ctx.closePath();