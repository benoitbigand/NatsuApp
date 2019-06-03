<?php
function displayallexpos($liste){
    for($i = 0;$i < count($liste);$i++){
    $curseur = $liste[$i];
    echo "<div class='temp_expo'>
    <img class='temp_expo_img' src='$curseur[image]'>
                    
    <span class='temp_expo_txt'>$curseur[nom]</span>
</div>";
    }

}

function displayallpersos($liste){
    for($i = 0;$i < count($liste);$i++){
        $curseur = $liste[$i];
        if($curseur['type']=="Personne"){
            echo "<div class='temp_expo'>
            <img class='temp_expo_img' src='$curseur[image]'>

            <span class='temp_expo_txt'>$curseur[nom]</span>
            </div>";
        }
    }
}


function displayallanims($liste){
    for($i = 0;$i < count($liste);$i++){
        $curseur = $liste[$i];
        if($curseur['type']=="Animation"){
            echo "<div class='temp_expo'>
            <img class='temp_expo_img' src='$curseur[image]'>

            <span class='temp_expo_txt'>$curseur[nom]</span>
            </div>";
        }
    }
}

function displayallshops($liste){
    for($i = 0;$i < count($liste);$i++){
        $curseur = $liste[$i];
        if($curseur['type']=="Boutique"){
            echo "<div class='temp_expo'>
            <img class='temp_expo_img' src='$curseur[image]'>

            <span class='temp_expo_txt'>$curseur[nom]</span>
            </div>";
        }
    }
}

function displayactus($liste){
    for($i = 0;$i < count($liste);$i++){
        $curseur = $liste[$i];
        echo "<div class='temp_actu'>
        <img class='temp_actu_img' src='$curseur[image]'>

        <span class='temp_actu_title temp_actu_txt'>$curseur[titre] - </span>
        
        <span class='temp_actu_stand temp_actu_txt'>$curseur[stand]</span>
        <br>
        <span class='temp_actu_desc temp_actu_txt'>$curseur[description]</span>
        </div>";
    }
}

function displaysearched($liste,$keyword){
    for($i = 0;$i < count($liste);$i++){
        $curseur = $liste[$i];
        if((strpos($curseur['nom'], $keyword) !== false)){
            echo "<div class='temp_expo'>
            <img class='temp_expo_img' src='$curseur[image]'>

            <span class='temp_expo_txt'>$curseur[nom]</span>
            </div>";
        }
    }
    

}












#for($i = 0;$i < count($exposants);$i++){ Parcourir le tableau
    #$curseur = $exposants[$i];
    #echo "Nom : $curseur[nom] <br>";
    #echo "Description : $curseur[description] <br>";
    #echo "Service : $curseur[service] <br>";
    #echo "Stand : $curseur[stand] <br><br>";
#}

#<div class='temp_expo'> afficher un exposant
    #<img class='temp_expo_img' src="https://66.media.tumblr.com/7d5e3bd377b0e689fbbf725dca1b75b3/tumblr_orq4ssFzlT1vgcm23o1_500.png">
                    
    #<span class="temp_expo_txt">Sig Puyo Puyo</span>
#</div>
    

#<?php
    #displayallexpos($exposants);                 

    
?>
