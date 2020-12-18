<style>
    body{
        background: #080813;
    margin:0;
    padding:0;
    display:flex;
    flex-direction: column;
    justify-content:center;
    align-items: center;
    }
    .wrap-whole{
                display: flex;
                justify-content: center;
                align-self: center;
            }
    .wrap{
    width: 300px;
    height: 300px;
    border:1px solid black;
    }
    @keyframes dash {
    100% {
        stroke-dashoffset: 700;
    }
    }
    .header{
                width: 100%;
                height: 5vh;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                font-size: 36px;
            }
</style>
<div class="header"><a href="https://github.com/ChrisLedesma/Portfolio_BSIT3A/blob/main/midterm/LT-6.2.php" target="_blank">Github</a></div>
<div class="header">SVG Animation</div>
<div class="wrap-whole">

    <div class="wrap">
            <svg width="300" height="300" style="background:pink;">

                <path id="Path1" fill="none" stroke="none" d="M160,120 L240,120"/>
                <rect x="25" y="75" width="250" height="150"  fill="white" style="stroke:blue;stroke-width:2;"/>
                <rect x="25" y="75" width="250" height="25"  fill="blue"/>
                <rect x="255" y="80" width="15" height="15"  fill="red"
                style="stroke:white;stroke-width:1;"/>
                <rect x="235" y="80" width="15" height="15"  fill="blue"
                style="stroke:white;stroke-width:1;"/>
                <rect x="215" y="80" width="15" height="15"  fill="blue"
                style="stroke:white;stroke-width:1;"/>
                <line x1="50" x2="250" y1="155" y2="155" style="   
                stroke: lime;
                stroke-dasharray: 1000;
                stroke-dashoffset: 1000;
                stroke-width:10px;
                animation: dash 10s linear infinite;" />
                <text x="50" y="130" style="font-size:14px">
                    Transferring Files
                </text>
                <rect x="163" y="120" width="10" height="10"  fill="yellow"
                style="stroke:black;stroke-width:1;"/>
                    <rect x="237" y="120" width="10" height="10"  fill="yellow"
                style="stroke:black;stroke-width:1;"/>
                
                <rect width="8" height="12"  fill="white"
                style="stroke:black;stroke-width:1;">
                    <animateMotion dur="2s" repeatCount="indefinite">
                    <mpath href="#Path1"></mpath>
                    </animateMotion>
                </rect>
                
                    <rect x="160" y="118" width="10" height="15"  fill="yellow"
                style="stroke:black;stroke-width:1;"/>
                

                    <rect x="240" y="118" width="10" height="15"  fill="yellow"
                style="stroke:black;stroke-width:1;"/>
            
            </svg>
    </div>
</div>
    
