<?php
include("./script/getdata.php");
include("./script/display_list.php");
?>


<!DOCTYPE HTML>
<head>
    <title>Bienvenue à NatsuCon </title>
    <link href='css/normalize.css' rel='stylesheet'>
    <link href='css/style.css' rel='stylesheet'>
    <link href='css/expos.css' rel='stylesheet'>
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
    
    
    
    <div id='btn_toggle' class='btn-toggle' onclick='open_menu();hotfix_toggle();'>
                =>
            </div>
    <div id='carte'>
        <div id='navigation'>
            <div id='btn_carte' class='btn-navig btn-hide'>
                <span class='traduire' id='txt_carte'></span>
            </div>
            <div id='btn_liste_expo' class='btn-navig btn-hide' onclick='disp_exposants();'>
                <span class='traduire' id='txt_liste_expo'></span>
            </div>
            <div id='btn_liste_actus' class='btn-navig btn-hide'>
                <span class='traduire' id='txt_liste_actus'></span>
            </div>
            <div id='btn_retour' class='btn-navig btn-hide' onclick='close_menu();'>
                <span class='traduire' id='txt_retour'></span>
            </div>
            
        </div>
        <img src='ressources/faussecarte.png' id='directcarte' usemap='#cartemap'>
        
        
        
        <div id='liste_expo'>
            
            
            
            
            <div id="tri">
                
                <div id="finallytheactuallist">
                    <?php
                    $choix = $_GET['factri'];
                    if($choix == "0"){
                        displayallexpos($exposants);
                    } else if($choix == "1"){
                        displayallpersos($exposants);
                    } else if($choix == "2"){
                        displayallanims($exposants);
                    } else if($choix == "3"){
                        displayallshops($exposants);
                    }
                    
            
                    ?>
                </div>
                
            </div>
        </div>
    </div>
    
    
    
     <script src='script/language.js'></script>
     <script src='script/navigation.js'></script>
    <script src='script/display_expos.js'></script>
    <script src='script/hotfixes.js'></script>
    
</body>

