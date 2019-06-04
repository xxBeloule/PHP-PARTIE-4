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

      Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :
      "Bonjour" + nom + prénom + ",tu as" + age + "ans".</p>
      <p class="b">
        <?php
          function FunctionName($name,$age,$firstname)
          {
            $result = "Bonjour $firstname $name tu as $age ans.";
            return $result;
          }
          echo FunctionName(Belal,20,Siddique);
         ?>
      </p>
    </div>
  </body>
  </html>
