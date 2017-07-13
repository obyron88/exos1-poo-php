# POO PHP

## Exercice 1
* Écrire une classe PHP simple qui affiche le message suivant « Bonjour tout le monde !».
* Utiliser une méthode __contstruc() publique.


## Exercice 2
* Ecrire une classe PHP contenant la propriété **$chaine** suivante: "Bonjour Tout Le Monde, moi c'est "
* Créer la méthode **presentation** qui permet d'afficher la chaine suivi de **VotreNom**".
* **VotreNom** est un argument(paramètre) de la méthode **presentation**.

## Exercice 3
* Définissez la classe **Phrase** qui contient :

      - Une propriété private nommée "chaine"
      - Quatre méthodes de type public nommées gras(), italique(), souligne() et majuscules()
        qui retournent respectivement la chaîne passée en argument mise en gras, en italique,
        soulignée et mise en majuscules(voir le résultat image1.png)

## Exercice 4
* Écrivez une classe PHP qui trie un tableau d'entiers dans l'ordre croissant en utilisant la fonction **sort()** de PHP.
* Créer une méthode __construc() qui prend en argument le tableau.
* Créer la méthode **tri** qui renvoie le tableau trié.
* Afficher le tableau trié à l'aide de **var_dump** ou **print_r**

          Exemple:
          Tableau d'entiers : array(11, -2, 4, 35, 0, 8, -9)
          Résultat : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )

## Exercice 5
* Réaliser une calculatrice:
* Ecrire une classe PHP avec un constructeur qui possède deux arguments,
* Écrire les méthodes qui permettent de calculer l'addition, la soustraction , la multiplication,  ou la division des deux arguments.

          Exemple d'exécution:
          $calc = new MaCalculatrice( 8, 4);
          echo $calc- > ajout(); // affichera 12
          echo $calc- > produit(); // affichera32
