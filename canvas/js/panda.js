var canvas = document.getElementById("can6");
var ctx = canvas.getContext("2d");


//ear
ctx.beginPath();
ctx.arc(40, 125, 35, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();


ctx.beginPath();
ctx.arc(40, 125, 20, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#ebaabf";
ctx.fill();

//ear
ctx.beginPath();
ctx.arc(160, 125, 35, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();

ctx.beginPath();
ctx.arc(160, 125, 20, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#ebaabf";
ctx.fill();

//head
ctx.beginPath();
ctx.arc(100, 170, 75, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#fff";
ctx.fill();

//spot
ctx.beginPath();
ctx.arc(60, 160, 25, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();

//eye
ctx.beginPath();
ctx.arc(65, 165, 8, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#fff";
ctx.fill();

//eye
ctx.beginPath();
ctx.arc(65, 165, 6, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();


//spot
ctx.beginPath();
ctx.arc(140, 160, 25, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();

//eye
ctx.beginPath();
ctx.arc(135, 165, 8, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#fff";
ctx.fill();

ctx.beginPath();
ctx.arc(135, 165, 6, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();

//nose
ctx.beginPath();
ctx.arc(100, 190, 10, 0, 2 * Math.PI);
ctx.closePath();
ctx.fillStyle = "#000";
ctx.fill();