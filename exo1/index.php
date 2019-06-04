<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>PHP partie 4 exo 1</title>
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
    <p>Faire une fonction qui retourne <i>true</i>.</p>
    <p class="p">
      <?php
      function maFonction()
      {
        return (TRUE);
      }
        echo maFonction();
      ?></p>
    </div>
  </body>
  </html>
