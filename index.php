<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice2</title>
</head>
<body>
</body>
<?php
    
    require_once 'personne.php';
    require_once 'etudiant.php';

    //Creation de deux personnes
    $personne1 = new Personne("Faye", "Marie", 23);
    $personne2 = new Personne("Aliou", "Sarr", 30);

    $personne1 -> affichagePersonne();
    $personne2 -> affichagePersonne();
    
    //donner à Marie une age de 28ans
    
    $personne1 ->setAge(29);
    echo 'Aprés modification on obtient'."\n";
    $personne1 -> affichagePersonne();

    //les modification de le prenom et le nom de aliou sarr

    $personne2 -> setPrenom('Thomas');
    $personne2 -> setNom('Faye');
    echo 'Aprés modification de Nom et Prénom'."\n";
    $personne2 ->affichagePersonne();
    
    //creation d'un etudiant et affihage
    $etudiant = new Etudiant("Salimata", "Diarra", 20, "Blaise Diagne", "Terminal");
    $etudiant -> afficheEtudiant();

?> 
</html>   