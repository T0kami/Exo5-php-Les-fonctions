<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>exos fonctions</h1>
    <h2>exo 1</h2>
    <?php echo returnTrue(); ?>

    <h2>exo 2</h2>
    <?php echo chaine("Yo :)"); ?>

    <h2>exo 3</h2>
    <?php echo chaine2(); ?>

    <h2>exo 4</h2>
    <?php echo Compare(3, 5); ?>

    <h2>exo 5</h2>
    <?php echo concat(5, "test"); ?>

    <h2>exo 6</h2>
    <?php echo bonjour("Michel", "Jean", 49); ?>

    <h2>exo 7</h2>
    <?php echo mineurOrNot(4, "Femme"); ?>

    <h2>exo 8</h2>
    <?php echo somme(); ?>
  </body>
</html>

<?php
function returnTrue(){
  return true;
}

function chaine($chaine = "chaine de caractère"){
  return $chaine;
}

function chaine2($chaine1 = "Bonjour", $chaine2 = " Jean Michel"){
  return $chaine1 . $chaine2;
}

function Compare($nb1, $nb2){
  if ($nb1 > $nb2){
    return "Le premier nombre est plus grand";
  } else if ($nb1 < $nb2){
    return "Le premier nombre est plus petit";
  } else{
    return "Les nombres sont identiques ";
  }
}

function concat($nb = 0, $carac = ""){
  return $nb . $carac;
}

function bonjour($nom, $prenom, $age){
  return "Bonjour $prenom $nom, tu as $age ans";
}

function mineurOrNot($age = 0, $genre = "Femme"){
  if ($age >= 18){
    echo ($genre == 'Homme') ? 'Vous etes un homme majeur' : 'Vous etes une femme majeur';
  }else{
    echo ($genre == 'Homme') ? 'Vous etes un homme mineur' : 'Vous etes une femme mineur';
  }
}

function somme($nb1=42, $nb2=69, $nb3=4269){
  return $nb1 + $nb2 + $nb3;
}
 ?>
