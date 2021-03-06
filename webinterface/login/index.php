<?php session_start();
require('../../assets/api/mysql/mysql_connetion.php');

if($_SESSION['eingang']==0){
  header("Location : ../index.php");
}else

?>
<html>
<head>

    <meta charset="utf-8">
    <title>ClanWAF.de Webinterface</title>
    <link rel="shortcut icon" type="image/png" href="/img/logo.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
      <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <script>
  function openSlideMenu(){
    document.getElementById('menu').style.width = '250px';
    document.getElementById('content').style.marginLeft = '250px';
  }
  function closeSlideMenu(){
    document.getElementById('menu').style.width = '0';
    document.getElementById('content').style.marginLeft = '0';
  }
</script>
</head>
<body>
  <script type="text/javascript" color="200, 0, 0" opacity="1.6" zindex="-2" count="150" src="http://www.cssscript.com/demo/interactive-particle-nest-system-with-javascript-and-canvas-canvas-nest-js/canvas-nest.js"></script><canvas id="c_n2" width="725" height="913" style="position: fixed; top: 0px; left: 0px; z-index: -2; opacity: 0.7;"></canvas>
    <div id="content">

    <span class="slide">
      <a onclick="openSlideMenu()">
        <i class="fas fa-bars"></i>
      </a>
    </span>

    <div id="menu" class="nav">
      <a class="close" onclick="closeSlideMenu()">
        <i class="fas fa-times"></i>
      </a>
      <a href="#">Home</a>
      <a href="#"onclick="pwandern()">Password Ändern</a>
        <?php

        if(!empty($_SESSION['rang'])) {
            $rang1 = $_SESSION['rang'];
            if ($rang1 == "1") {
                echo '<a href="teammangagment/index.php">Team</a>';
            }
        }
        ?>


      </div>
    <div class="inter">
    <center>
      <h1>Webinterface von ClanWAF</h1>
      <br><br>
        <br>
        <div class="hover-table-layout">
            <div class="listing-item">
                <figure class="image">
                    <img src="../img/map.png" alt="Maps hochgeladen" height="220px" />
                    <figcaption>
                        <div class="caption">
                            <h1>Schemetic Hochladen</h1>
                        </div>
                    </figcaption>
                </figure>
                <div class="listing">
                    <h3>Soviele wurden schon Hochgeladen!</h3>
                    <?php
                    $db_res = mysql_connetion::result("SELECT `count` FROM `SchemeticCount` ") or die("<center><h2>0 <br> Server </h2>");
                    $row = mysqli_fetch_array($db_res);
                    $pwresold = intval($row["count"]);
                    echo '<h3 class="num">'.$pwresold.'</h3>';

                    ?>
                   <button class="logbtn" onclick="Register()">Jetzt Hochladen</button>
                </div>
            </div>
            <div class="listing-item">
                <figure class="image">
                    <img src="../img/cloud.jpg" alt="Cloud" height="220px" />
                    <figcaption>
                        <div class="caption">
                            <h1>Cloud</h1>
                        </div>
                    </figcaption>
                </figure>
                <div class="listing">
                    <h3>Unsere NextCloud</h3>
                    <h3 >Komm auf unsere Cloud</h3>
                    <a href=""><button class="logbtn">Jetzt Draufgehen</button></a>
                </div>
            </div>
            <div class="listing-item">
                <figure class="image">
                    <img src="../img/trello.jpg" alt="Trello" height="220px" />
                    <figcaption>
                        <div class="caption">
                            <h1>Trello</h1>
                        </div>
                    </figcaption>
                </figure>
                <div class="listing">
                    <h3>Unsere Trello Liste</h3>
                    <h3 >Komm auf unsere Trello liste</h3>
                    <a href="https://trello.com/invite/b/4fTPG1Sm/33f94f0314c35bbe0f0840e2cd70507b/waf-bord"><button class="logbtn">Jetzt Draufgehen</button></a>
                </div>
            </div>
        </div>


        <script language="JavaScript">

            function Register()
            {
                var breite=screen.availWidth;
                var hoehe=screen.availHeight;
                var positionX=((screen.availWidth / 2) - breite / 2);
                var positionY=((screen.availHeight / 2) - hoehe / 2);
                var url='schemetic/schemetic.php';
                pop=window.open('','User Register','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,fullscreen=0,width='+breite+',height='+hoehe+',top=10000,left=10000');
                pop.blur();
                pop.resizeTo(breite,hoehe);
                pop.moveTo(positionX,positionY);
                pop.location=url;
            }
            onerror = stopError;
            function stopError()
            {return true;}
            function pwandern()
            {
                var breite=screen.availWidth;
                var hoehe=screen.availHeight;
                var positionX=((screen.availWidth / 2) - breite / 2);
                var positionY=((screen.availHeight / 2) - hoehe / 2);
                var url='pwandern.php';
                pop=window.open('','User Register','toolbar=0,location=0,directories=0,status=0,menubar=0,scrollbars=0,resizable=0,fullscreen=0,width='+breite+',height='+hoehe+',top=10000,left=10000');
                pop.blur();
                pop.resizeTo(breite,hoehe);
                pop.moveTo(positionX,positionY);
                pop.location=url;
            }

        </script>
  <script type="text/javascript">
    $(".num").counterUp({delay:10,time:1000});
  </script>
    </center>
  </div>

</body>
</html>
