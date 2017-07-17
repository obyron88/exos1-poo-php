
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
   <h1>AUTRE</h1>

    <h1>EXO 1</h1>
<!--créer une classe avec un attribut  -->
<?php
// Je créé ma classe
class Hella {
// Je lui assigne une fonction
  public function message () {
    echo "Bonjour tout le monde";
  }
}
// Je créé un nouvel objet lié à ma classe
$bobo = new Hella ();
echo $bobo->message();

?>
</p>
<p>
<h1>EXO 2</h1>
<!-- # Exercice 2
* Ecrire une classe PHP contenant la propriété **$chaine** suivante: "Bonjour Tout Le Monde, moi c'est "
* Créer la méthode **presentation** qui permet d'afficher la chaine suivi de **VotreNom**".
* **VotreNom** est un argument(paramètre) de la méthode **presentation**. -->
<?php
  // Je créé ma classe
  class Bambou {
    // Je créé un attribut privé à ma classe
    private $chaine ="Bonjour Tout Le Monde, moi c'est ";
    // Je créé une fonction à ma classe
    public function presentation($VotreNom) {
        return $this->chaine.$VotreNom;
    }
    // Return = permet ici de retourner ici l'attribut de ma classe et de le lier avec ma fonction.
  }
  // Je créé un nouvel objet lié à ma classe
  $yo = new Bambou ();
  // Je lui demande ici d'écrire ma fonction avec comme variable $VotreNom 'Benoît'.
  echo $yo->presentation('Guillaume');

?>
</p>
<p>
<h1>EXO 3</h1>
<?php
  // Je créé ma classe
  class Phrases {
    // Je créé un attribut privé à ma classe
    private $chaine='Programmation orientée objet en PHP';
    // Je créé 4 fonctions différentes à ma classe.
    // La première écrit mon attribut en gras grace aux balises HTML.
    public function gras() {
      echo '<b>'.$this->chaine.'</b>';
    }
    // La seconde écrit mon attribut en italique grace aux balises HTML.
    public function italique() {
       echo '<i>'.$this->chaine.'</i>';
    }
    // La première écrit mon attribut souligné grace aux balises HTML.
    public function souligne() {
      echo '<u>'.$this->chaine.'</u>';
    }
    // La première écrit mon attribut en majuscules grace aux balises HTML.
    public function majuscules() {
      echo strtoupper($this->chaine);
    }
  }
  // Je créé un nouvel objet lié à ma classe et je lui demande d'écrire mon attribut selon mes différents fonctions.
  $romain = new Phrases ();
  echo $romain->gras().'<br>';
  echo $romain->italique().'<br>';
  echo $romain->souligne().'<br>';
  echo $romain->majuscules().'<br>';
?>
</p>
<p>
<h1>EXO 4</h1>
<?php
// Je crée une classe
class Tableau {
  // Je créé un attribut privé (ici un tableau)
  private $tab;
  // Je créé une fonction (ici __construct) qui permet à chaque nouvelle déclaration d'objet de réinitialiser un tableau.
  public function __construct($tab) {
    $this->tab=$tab;
  }
  // Je créé une seconde fonction (ici qui permet de classer par valeur du plus petit au plus grand)
  public function tri() {
    // Cette fonction créé un nouveau tableau qui remplace le second en la triant du plus petit au plus grand)
    $tab2 =$this->tab;
     sort($tab2);
      return $tab2;
  }
}
// Je créé un nouvel objet lié à ma classe(tableau) en lui assignant des données.
$guillaume = new Tableau (array(11, -2, 4, 35, 0, 8, -9));
// Je fais juste un var_dump de mon tableau($tab) pour vérifier que celui-ci a bien été trié par ma seconde fonction et affiche mon $tab2
var_dump ($guillaume->tri());
?>
<h1>EXO 5</h1>
<?php
class Calculatrice {

 private $nb1;
 private $nb2;

  public function __construct($argument1, $argument2){
   $this->nb1=$argument1;
   $this->nb2=$argument2;
  }
public function ajout() {
       return $this->nb1 + $this->nb2.'<br>';
   }
   public function soustraction() {
       return $this->nb1 - $this->nb2.'<br>';
   }
   public function produit() {
       return $this->nb1 * $this->nb2.'<br>';
   }
   public function division() {
       return $this->nb1 / $this->nb2.'<br>';
   }
}
$calcul = new Calculatrice(21, 7);
echo $calcul-> ajout(); // affichera 28
echo $calcul-> produit(); // affichera 147
echo $calcul-> soustraction(); // affichera 14
echo $calcul-> division(); // affichera 3
echo "<hr>";


 ?>
  </body>
</html>
