var canvas = document.getElementById("can2");
var ctx = canvas.getContext("2d");

//hair
ctx.beginPath();
ctx.lineTo(0,0);
ctx.lineTo(200,0);
ctx.lineTo(200,80);
ctx.lineTo(175,80);
ctx.lineTo(175,50);
ctx.lineTo(25,50);
ctx.lineTo(25,80);
ctx.lineTo(0,80);
ctx.fillStyle = "#31302b";
ctx.fill();
ctx.closePath();

//eyes
ctx.beginPath();
ctx.lineTo(25,100);
ctx.lineTo(65,100);
ctx.lineTo(65,120);
ctx.lineTo(25,120);
ctx.fillStyle = "#fff";
ctx.fill();
ctx.closePath();

//eyes2
ctx.beginPath();
ctx.lineTo(175,100);
ctx.lineTo(135,100);
ctx.lineTo(135,120);
ctx.lineTo(175,120);
ctx.fillStyle = "#fff";
ctx.fill();
ctx.closePath();

//blue
ctx.beginPath();
ctx.lineTo(45,100);
ctx.lineTo(65,100);
ctx.lineTo(65,120);
ctx.lineTo(45,120);
ctx.fillStyle = "#3DEFEF";
ctx.fill();
ctx.closePath();

//blue2
ctx.beginPath();
ctx.lineTo(155,100);
ctx.lineTo(135,100);
ctx.lineTo(135,120);
ctx.lineTo(155,120);
ctx.fillStyle = "#3DEFEF";
ctx.fill();
ctx.closePath();

//beard
ctx.beginPath();
ctx.lineTo(45,200);
ctx.lineTo(45,150);
ctx.lineTo(65,150);
ctx.lineTo(65,175);
ctx.lineTo(135,175);
ctx.lineTo(135,150);
ctx.lineTo(155,150);
ctx.lineTo(155,200);
ctx.fillStyle = "#31302b";
ctx.fill();
ctx.closePath();

//nose
ctx.beginPath();
ctx.lineTo(75,125);
ctx.lineTo(125,125);
ctx.lineTo(125,145);
ctx.lineTo(75,145);
ctx.fillStyle = "rgb(145, 107, 85)";
ctx.fill();
ctx.closePath();


