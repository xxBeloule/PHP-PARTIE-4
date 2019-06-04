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
    <p>
      Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. Le genre peut être :</p>
      <ul>
        <li>Homme</li>
        <li>Femme</li>
      </ul>
      <p class="b">
        <?php
        function nameFunction($age,$gender)
        {
          if ($gender == "Homme")
          {
            if ($age > 18)
            {
              $result = "Bonjour vous êtes majeur et vous êtes un homme";
            } else if ($age < 18)
            {
              $result = "Bonjour vous êtes mineur et vous êtes un homme";
            }
          } elseif ($gender == "Femme")
          {
            if ($age > 18)
            {
              $result = "Bonjour vous êtes majeur et vous êtes une femme";
            } elseif ($age < 18) {
              $result = "Bonjour vous êtes mineur et vous êtes une femme";
            }
          }
          return $result;
        }
        echo nameFunction(10,Femme);
        ?>
      </p>
    </div>
  </body>
  </html>
