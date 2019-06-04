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
    <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.</p>
    <p class="b">
    <?php
    function FunctionName($number,$string)
    {
      $result ="$string $number";
      return $result;
    }
    echo FunctionName(1,"phrase");
    ?>
    </p>
  </div>
</body>
</html>
