<?php
function displayallexpos(){
    for($i = 0;$i < count($exposants);$i++){
    $curseur = $exposants[$i];
    echo "<div class='temp_expo'>
    <img class='temp_expo_img' src='https://66.media.tumblr.com/7d5e3bd377b0e689fbbf725dca1b75b3/tumblr_orq4ssFzlT1vgcm23o1_500.png'>
                    
    <span class='temp_expo_txt'>$curseur[nom]</span>
</div>";
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
    
    
?>
