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
      <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines</p>
      <p class="b">
        <?php
        function Concat($string1, $string2){
          $result ="$string1 + $string2";
          return $result;
        }
        echo "Ma fonction retournerString retourne <b>", Concat("Hello","Le monde"),"</b>";
        ?></p>
    </div>
  </body>
</html>
