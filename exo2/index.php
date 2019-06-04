<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>PHP partie 4 exo 2</title>
</head>
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
<body>
  <div class="div">
    <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
    <p class="b">
      <?php
      function retournerString($string){
        return $string;
      }
      echo "Ma fonction retournerString retourne <b>",retournerString("Hello world"),"</b>";
      ?></p>
    </div>
  </body>
  </html>
