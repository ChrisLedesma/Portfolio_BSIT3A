<?php
$page = (isset($_GET['page']) && $_GET['page'] != '') ? $_GET['page'] : '';
?>
<html>
    <head>
        <title>My Portfolio</title>
        <title></title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="wrap">
            <div id="content">
                    <div id="menuToggle">
                        <input type="checkbox" />

                        <span></span>
                        <span></span>
                        <span></span>

                        <ul id="menu">
                            <a href="index.php"><li><div class="side-menu">HOME</div></li></a>
                            <div class="dropdown">
                                <button class="dropbtn">CSS 
                                </button>
                                <div class="dropdown-content">
                                    <a href="index.php?page=2.2">LT 2.2</a>
                                    <a href="https://learning-task-ledesma.herokuapp.com/" target="_blank">LT 2.3</a>
                                    <a href="index.php?page=3.2">LT 3.2</a>
                                    <a href="index.php?page=3.3">LT 3.3</a>
                                    <a href="index.php?page=4.1">LT 4.1</a>
                                    <a href="https://prelimproj-3rdyr.herokuapp.com/" target="_blank">LE PRELIM</a>
                                </div>
                            </div> 
                            <div class="dropdown">
                                <button class="dropbtn">SVG
                                </button>
                                <div class="dropdown-content">
                                    <a href="index.php?page=5.1">LT 5.1</a>
                                    <a href="index.php?page=6.1">LT 6.1</a>
                                    <a href="index.php?page=6.2">LT 6.2</a>
                                    <a href="index.php?page=LEMID">LE MIDTERM</a>
                                </div>
                            </div>  
                             <div class="dropdown">
                                <button class="dropbtn">CANVAS 
                                </button>
                                <div class="dropdown-content">
                                    <a href="index.php?page=7.1">LT 7.1</a>
                                </div>
                            </div>
                            <a href="index.php?page=about"><li><div class="side-menu">ABOUT</div></li></a>
                        </ul>
                    </div>
                    <?php
                     switch ($page) { 
                        case'2.2':
                            require_once('css-act/LT-2.2.php');
                        break;
                        case'3.2':
                            require_once('css-act/LT-3.2.php');
                        break;
                        case'3.3':
                            require_once('css-act/LT-3.3.php');
                        break;
                        case'4.1':
                            require_once('css-act/LT-4.1.php');
                        break;
                        case'5.1':
                            require_once('svg-act/LT-5.1.php');
                        break;
                         case'6.1':
                            require_once('svg-act/LT-6.1.php');
                        break;
                        case'6.2':
                            require_once('svg-act/LT-6.2.php');
                        break;
                        case'LEMID':
                            require_once('svg-act/SVG.php');
                        break;
                        case'7.1':
                            require_once('canvas/canvas.php');
                        break;
                        case'about':
                        require_once('about.php');
                        break;
                         default:
                         require_once('home.php');
                      }
                    ?>
                    
            </div>
        </div>
    </body>
</html>
