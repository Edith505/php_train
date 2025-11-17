<?php
$nom = trim(htmlspecialchars($_POST['nom']));
$age = $_POST['age'];
$courriel = $_POST['courriel'];

if(empty($nom) || empty($age) || empty($courriel)){
    echo "Veuillez remplir tous les champs";
}elseif($age <= 0 || $age >100){
    echo "age invalide";
}elseif (!filter_var($courriel, FILTER_VALIDATE_EMAIL)){
    echo "courriel invalide";
}else{
    echo "nom : ".$nom."<br> age : ".$age."<br>courriel : ".$courriel;
}
