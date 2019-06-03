<?php
include("./script/getdata.php");
include("./script/display_list.php");


?>


<!DOCTYPE HTML>
<head>
    <title>Bienvenue à NatsuCon </title>
    <link href='css/normalize.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/news.css' rel='stylesheet'>
    <link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'> 
</head>



<body onload='francais()'>
    <header>
        
        <img src='ressources/natsu.png' id='natsu'>
        
        <span class='traduire' id='s_titre'></span>
        
        
        <div id='flagfr'><img src='ressources/flagfr.jpg' class='flag' onclick='francais()'></div>
        <div id='flagen'><img src='ressources/flagen.jpg' class='flag' onclick='anglais()'></div>
        <div id='flagal'><img src='ressources/flagal.png' class='flag' onclick='allemand()'></div>
    </header>
    
    
    
    <div id='btn_toggle' class='btn-toggle' onclick='open_menu();'>
                =>
            </div>
    <div id='carte'>
        <div id='navigation'>
            
            <a href="index.php">
            <div id='btn_carte' class='btn-navig btn-hide'>
                <span class='traduire' id='txt_carte'></span>
            </div>
            </a>
            
            <a href="expos.php">
            <div id='btn_liste_expo' class='btn-navig btn-hide' onclick='disp_exposants();'>
                <span class='traduire' id='txt_liste_expo'></span>
            </div>
            </a>
            
            <a href="actus.php">
            <div id='btn_liste_actus' class='btn-navig btn-hide'>
                <span class='traduire' id='txt_liste_actus'></span>
            </div>
            </a>
            
            
            <div id='btn_retour' class='btn-navig btn-hide' onclick='close_menu();'>
                <span class='traduire' id='txt_retour'></span>
            </div>
            
        </div>
        <img src='ressources/faussecarte.png' id='directcarte' usemap='#cartemap'>
        
        <div id='actu-box'>
            <a class="twitter-timeline" data-width="600" data-theme="dark" data-link-color="#C63636" href="https://twitter.com/NatsuConLille?ref_src=twsrc%5Etfw">Actualites NatsuCon</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>   
        </div>
    </div>
    
     <map name='cartemap'>
        <area shape='rect' coords='26,286,235,376' onclick='popup("1")'>
    </map>
    
    
    
     <script src='script/language.js'></script>
     <script src='script/navigation.js'></script>
    <script src='script/display_expos.js'></script>
    
</body>

