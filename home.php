<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <style>
        body{
            user-select: none;
            background: #080813;
        }
        .slideshow{
            width: 60vw;
            display: flex;
            flex-direction:column;
            justify-content: center;
            align-items: center;
            font-family: 'Teko', sans-serif;
        }
        .wordCarousel {
            font-size: 5vw;
            font-weight: 100;
            color: white;
            text-align: center;
        }
        .wordCarousel div {
            overflow: hidden;
            position: relative;
            height: 130px;
            margin-right: 40px;
        }
        .wordCarousel div li {
            font-family: 'Teko', sans-serif;
            color: #000000;
            font-weight: 700;
            padding: 0 20px;
            height: 90px;
            margin-bottom: 90px;
            display: block;
        }
        .wordCarousel li:nth-child(1){
            text-shadow: .1vw .1vw .2vw black, 0 0 1vw rgba(217, 255, 0, 0.726), 0 0 .5vw rgba(130, 139, 0, 0.788);
            color: rgb(214, 214, 2);
        }
        .wordCarousel li:nth-child(2){
            text-shadow: .1vw .1vw .2vw black, 0 0 1vw rgba(255, 0, 0, 0.753), 0 0 .5vw rgba(139, 0, 0, 0.685);
            color: rgb(209, 0, 0);
        }
        .flip2 {
                animation: flip2 4s cubic-bezier(0.23, 1, 0.32, 1.2) infinite;
        }
        @keyframes flip2 {
            0% {
                margin-top: -280px;
            }
            5% {
                margin-top: -180px;
            }
            50% {
                margin-top: -180px;
            }
            55% {
                margin-top: 0px;
            }
            99.99% {
                margin-top: 0px;
            }
            100% {
                margin-top: -540px;
            }
        }   
        .empty{
                height: 6vw;
            }
    .arrow-down{
        width: 1.5vw;
        height: 1.5vw;
        border-top: .6vw solid rgb(95, 188, 250);
        border-left: .6vw solid rgb(95, 188, 250);
        transform: rotate(-135deg);
        border-radius: 10%;
        animation: bounce 2.5s ease infinite;
    }
  @keyframes bounce{
    0%, 100%{
      transform: translateY(3px)rotate(-135deg);
    }
    10%{
      transform: translateY(0px)rotate(-135deg);
    }
    42%{
      transform: translateY(10px)rotate(-135deg);
    }
    58%{
      transform: translateY(15px)rotate(-135deg);
    }
    25%, 45%, 60%, 80%, 90%{
          transform: translateY(20px)rotate(-135deg);
    }
  }
  
.waves {
  width: 100%;
  height:15vh;
}

.parallax > use {
  animation: move-forever 100s cubic-bezier(.55,.5,.45,.5)     infinite;
}
.parallax > use:nth-child(1) {
  animation-delay: -2s;
  animation-duration: 7s;
}
.parallax > use:nth-child(2) {
  animation-delay: -3s;
  animation-duration: 10s;
}
.parallax > use:nth-child(3) {
  animation-delay: -4s;
  animation-duration: 13s;
}
.parallax > use:nth-child(4) {
  animation-delay: -5s;
  animation-duration: 20s;
}
@keyframes move-forever {
  0% {
   transform: translate3d(-90px,0,0);
  }
  100% { 
    transform: translate3d(85px,0,0);
  }
}
@media (max-width: 768px) {
  .waves {
    height:40px;
    min-height:40px;
  }
}
    </style>
    <body>
        <div style="  position: sticky;  z-index: -100;
        top: 0;width:100%;margin-top: -3.5vw; transform:rotate(180deg)">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
            <use xlink:href="#gentle-wave" x="48" y="0" fill="#160f30" />
            <use xlink:href="#gentle-wave" x="48" y="3" fill="#2d132c" />
            <use xlink:href="#gentle-wave" x="48" y="5" fill="#202040" />
            <use xlink:href="#gentle-wave" x="48" y="7" fill="#a72693" style="opacity: .3;" />
            </g>
            </svg>
            </div>

            <div class="empty"></div>

        <div id="content1">
            <div id="content1-part1">
                <div class="chonkobo">  
                    <object type="image/svg+xml" data="svg/tet.svg" style="transform:translateY(-3vw)scale(1.9);">
                    </object>            
                    </div>
                    <div class="header header-anim">Christian Dominic Ledesma</div>
                    <div class="header">BSIT3A</div>
        
                    <div class="arrow-down"></div>
            </div>
            <div id="content1-part2">
                <div class="slideshow">
                    <h4 class="wordCarousel">
                      <span>AN ASPIRING</span><br>
                      <span class="header-anim"style="font-weight: bold;">WEB</span>
                      <div> 
                          <ul class="flip2"> 
                              <li>DEVELOPER</li>
                              <li>DESIGNER</li>
                          </ul>
                      </div>
                  </h4>
                  </div>
            </div>
        </div>
    </body>
</html>
