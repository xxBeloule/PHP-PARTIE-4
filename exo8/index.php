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
    <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
      Tous les paramètres doivent avoir une valeur par défaut.</p>
      <p class="b">
        <?php
        function name($nmbr1,$nmbr2,$nmbr3)
        {
          $result = $nmbr1 + $nmbr2 + $nmbr3;
          return $result;
        }
        echo name(rand(1,100),rand(1,100),rand(1,1000));
        ?>
      </p>
    </div>
  </body>
  </html>
