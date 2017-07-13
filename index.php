
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Exo 1</h1>
    <?php

class Hello {
  public function message(){

    echo "bonjour tout le monde";
  }
}

$swal = new Hello;
echo $swal->message();
   ?>
   <h1>Exo 2</h1>
   <?php
// ça marche ! mais peut etre pas bonne méthode !
//   class Hell {
//
//   public $chaines = "Bonjour Tout Le Monde, moi c'est ";
//   public $votrenom = "Guillaume";
//
//    public function presentation(){
//      return $this->chaines;
//    }
//    public function votreNom() {
//      return $this->votrenom;
//   }
//  }
//
// $swey = new Hell();
// echo $swey->presentation(), $swey->votreNom();
class Bonjour {
    private $message = "Bonjour tout le monde, moi c'est ";
    public function présentation($VotreNom)
    {
        return $this->message.$VotreNom."<br>";
    }
}
$MonObjet = new Bonjour();
echo $MonObjet->présentation('Guillaume');
echo "<hr>";

  ?>
  <h1>Exo 3</h1>
  <?php
class Phrase {
private $chaine = "Programmation orienté objet en php ";

  public function gras(){
    return $this->chaine;
  }

    public function italique(){
      return $this->chaine;
    }

      public function souligne(){
        return $this->chaine;
      }

        public function majuscules(){
          return $this->chaine;
        }
}
$sent = new Phrase();
echo '<b>',$sent->gras(),'</b><br><i>', $sent->italique(),'</i><br><u>', $sent->souligne(),'</u><br><font style="text-transform: uppercase;">', $sent->majuscules(),'</font><br>';
   ?>
   <h1>Exo 4</h1>
   <?php


    ?>
  </body>
</html>
