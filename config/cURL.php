<?php
$url='https://fakestoreapi.com/products';

$ch= curl_init($url); // Initialise une session cURL avec l'URL spécifiée
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Définit l'option CURLOPT_RETURNTRANSFER pour retourner la réponse de la requête cURL au lieu de l'afficher directement

$resp = curl_exec($ch); // Exécute la requête cURL et stocke la réponse dans la variable $resp

if($e=curl_error($ch)){ // Vérifie s'il y a une erreur lors de l'exécution de la requête cURL
    var_dump($e); // Affiche les détails de l'erreur
}else{
    $products = json_decode($resp, true); // Décode la réponse JSON en un tableau associatif et stocke le résultat dans la variable $products
}

curl_close($ch); // Ferme la session cURL
