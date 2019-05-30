<?php
$getfile=file_get_contents("./data/exposants.json");
$exposants=json_decode($getfile);
$exposants= json_decode(json_encode($exposants), true);














#var_dump($exposants); #Débug

#for($i = 0;$i < count($exposants);$i++){
    #$curseur = $exposants[$i];
    #echo "Nom : $curseur[nom] <br>";
    #echo "Description : $curseur[description] <br>";
    #echo "Service : $curseur[service] <br>";
    #echo "Stand : $curseur[stand] <br><br>";
#}

?>


