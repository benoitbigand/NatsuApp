function open_menu(){
    document.getElementById('navigation').style.minWidth = "17%";
    document.getElementById('navigation').style.marginRight = "5%";
    document.getElementById('btn_toggle').style.display = "none";
    document.getElementById('btn_carte').style.display = "flex";
    document.getElementById('btn_liste_expo').style.display = "flex";
    document.getElementById('btn_liste_actus').style.display = "flex";
    document.getElementById('btn_search').style.display = "flex";
    document.getElementById('btn_list').style.display = "flex";
    document.getElementById('btn_retour').style.display = "flex";
}

function close_menu(){
    document.getElementById('navigation').style.minWidth = "20px";
    document.getElementById('navigation').style.marginRight = "0%";
    document.getElementById('btn_toggle').style.display = "flex";
    document.getElementById('btn_carte').style.display = "none";
    document.getElementById('btn_liste_expo').style.display = "none";
    document.getElementById('btn_liste_actus').style.display = "none";
    document.getElementById('btn_search').style.display = "none";
    document.getElementById('btn_list').style.display = "none";
    document.getElementById('btn_retour').style.display = "none";
}


function disp_exposants(){
    document.getElementById('directcarte').style.display = "none";
    document.getElementById('liste_expo').style.display = "flex";
}


function hide_btn_list(){
    document.getElementById('btn_search').style.display = "none";
    document.getElementById('btn_list').style.display = "none";
}

function expo_choose_list(){
    document.getElementById('btn_all').style.display = "flex";
    document.getElementById('btn_personne').style.display = "flex";
    document.getElementById('btn_anims').style.display = "flex";
    document.getElementById('btn_shops').style.display = "flex";
}

