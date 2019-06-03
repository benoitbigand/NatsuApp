function francais(){
    document.getElementById('s_titre').innerHTML="BIENVENUE";
    document.getElementById('txt_liste_expo').innerHTML="Exposants";
    document.getElementById('txt_liste_actus').innerHTML="Actualites";
    document.getElementById('txt_carte').innerHTML="Carte";
    document.getElementById('txt_retour').innerHTML="Fermer";
    document.getElementById('txt_search').innerHTML="Recherche";
    document.getElementById('txt_list').innerHTML="Liste";
    document.getElementById('txt_personne').innerHTML="Personnes";
    document.getElementById('txt_all').innerHTML="Tous";
    document.getElementById('txt_anims').innerHTML="Animations";
    document.getElementById('txt_shops').innerHTML="Boutiques";
    document.getElementById('txt_shops').innerHTML="Shops";
    document.getElementById('champ').placeholder="Nom de l'exposant ...";
    document.getElementById('onygo').value="Rechercher";
}

function anglais(){
    document.getElementById('s_titre').innerHTML="WELCOME";
    document.getElementById('txt_liste_expo').innerHTML="Exhibitors";
    document.getElementById('txt_liste_actus').innerHTML="News";
    document.getElementById('txt_carte').innerHTML="Map";
    document.getElementById('txt_retour').innerHTML="Close";
    document.getElementById('txt_search').innerHTML="Search";
    document.getElementById('txt_list').innerHTML="List";
    document.getElementById('txt_personne').innerHTML="People";
    document.getElementById('txt_all').innerHTML="All";
    document.getElementById('txt_anims').innerHTML="Animations";
    document.getElementById('txt_shops').innerHTML="Shops";
    document.getElementById('champ').placeholder="Exhibitor's name ...";
    document.getElementById('onygo').value="Search";
}

function allemand(){
    document.getElementById('s_titre').innerHTML="WILLKOMMEN";
}

function popup(a){
    alert("Zone "+a);
}

/** Pour passer une var php en JS (string uniq.) => var val = "<?php echo $val ?>"; */ 