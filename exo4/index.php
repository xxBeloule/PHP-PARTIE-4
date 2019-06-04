<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title></title>
  <style media="screen">
  .div {
    background-color: grey;
    font-weight: 400;
    border: 3px solid black;
    margin: 20px;
    padding: 20px;
    text-align: center;
    border-radius: 200px;
    font-weight: bolder;
  }
  .b {
    color: white;
  }
  </style>
</head>
<body>
  <div class="div">
    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

      Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
      Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
      Les deux nombres sont identiques si les deux nombres sont égaux
    </p>
    <p class="b">
    <?php
    function nomDeFonction($number1, $number2)
    {
      $calcul ="$number1 $number2";
      if ($number1 > $number2)
      {
        echo "Le premier nombre est plus grand";
      }
      elseif ($number1 < $number2)
      {
        echo "Le premier nombre est plus petit";
      } else {
        echo "Les deux nombres sont identiques";
      }
    }
    echo nomDeFonction(2,2);
    ?>
    </p>
  </div>
</body>
</html>
