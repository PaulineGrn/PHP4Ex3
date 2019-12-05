<?php
// Déclaration d'une fonction calcul et de 2 paramètres number et number2
function calcul($number, $number2){
  // Si le number et plus grand que le number2
  if ($number > $number2){
    // Alors cette phrase s'affiche ci-dessous
    $result = 'Le premier nombre est plus grand';
    // Sinon si le number et le number2
  }elseif ($number < $number2){
    // Alors cette phrase s'affiche ci-dessous
    $result = 'Le premier nombre est plus petit';
    // Sinon
  }else{
    // Les 2 nombres sont donc identiques
    $result = 'Les deux nombres sont identiques';
  }
  // Return pour que le résultat soit stocker sur l'ordi et pour qu'il puisse être appeler grâce à la fonction pour qu'il s'affiche dans le body
  return $result;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>PHP4Ex3</title>
</head>
<body>
  <!-- Appel de la fonction calcul avec les paramètres entre parenthèse -->
  <p><?php echo calcul(6,5); ?></p>
</body>
</html>
