/* 1st TEST
alert("ekip");

freeze = true;

if(freeze){
    alert("Prof Chen est présent");
}
*/

/* 2nd TEST
heure_arrivee = parseInt(prompt("Heure d'arrivée?"));
//heure_arrivee = parseFloat(prompt("Heure d'arrivée?"));
est_en_retard = heure_arrivee > 9;
//alert(est_en_retard);
if(est_en_retard){
    alert("vous êtes en retard");
}
*/

/* 3rd TEST
heure_arrivee = parseInt(prompt("Heure d'arrivée?"));
if(heure_arrivee > 9){
    alert("vous êtes en retard");
}
if(heure_arrivee <= 9){
    alert("vous êtes à l'heure");
}
*/

/* 4th TEST
heure_arrivee = parseInt(prompt("Heure d'arrivée?"));
if(heure_arrivee > 9){
    alert("vous êtes en retard");
} else {
    alert("Vous êtes à l'heure");
}
*/

/* 5th TEST
heure_arrivee = parseFloat(prompt("Heure d'arrivée?"));
if(heure_arrivee <= 9){
    alert("vous êtes à l'heure");
} else if(heure_arrivee <= 10){
    alert("vous êtes en retard");
} else {
    alert("vous êtes très en retard");
}
*/

// 6th TEST
mdp = prompt("Quel est le password ?")
vrai_mdp = "ekip"
if(mdp == vrai_mdp){
    alert("GANG");
} else {
    alert("Pue la merde!");
}
