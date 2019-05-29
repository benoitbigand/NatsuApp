<?php
include("./script/getdata.php");



?>


<!DOCTYPE HTML>
<head>
    <title>Bienvenue à NatsuCon </title>
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href=' http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'> 
</head>



<body onload="francais()">
    <header>
        
        <img src="ressources/natsu.png" id="natsu">
        
        <span id="s_titre"></span>
        
        
        <div id="flagfr"><img src="ressources/flagfr.jpg" class="flag" onclick="francais()"></div>
        <div id="flagen"><img src="ressources/flagen.jpg" class="flag" onclick="anglais()"></div>
        <div id="flagal"><img src="ressources/flagal.png" class="flag" onclick="allemand()"></div>
    </header>
    
    <div id="carte">
        <img src="ressources/faussecarte.png" id="directcarte" usemap="#cartemap">
    </div>
    
     <map name="cartemap">
        <area shape="rect" coords="26,286,235,376" onclick="popup('1')">
    </map>
    
     <script src="script/language.js"></script> 
</body>

