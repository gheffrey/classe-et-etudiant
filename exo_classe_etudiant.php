<?php 
/**
 * Script qui initialise un tableau d'entiers et 
 * genere une table HTML dont le nbre de ligne est egal 
 * au nbre d'elements du Tableau.
 * Le nbre de colonne de chaque ligne correspond respectivement
 * à la valeur se trouvant dans le tableau entier
 */


$classes=[
            0=> ["niveau" =>"L1", "filiere" => "MAE", "effectif" => 50,
            "etudiant" => [
                    0 => ["nom" => "DIOP", "prenom" => "astou", "date de naissaince" => "1/1/2002", "genre" => 'F'],
                    1 => ["nom" => "OBIANG", "prenom" => "astou", "date de naissaince" => "8/1/2002","genre" => 'M'],
                    2 => ["nom" => "OBIANG", "prenom" => "Moisette", "date de naissaince" => "8/5/2002","genre" => 'M']
                ]] ,
            1=> ["niveau" =>"L1", "filiere" => "GLRS", "effectif" => 60,
            "etudiant" => [
                    0 => ["nom" => "BOUKA", "prenom" => "Nathan", "date de naissaince" => "1/2/2002", "genre" => 'M'],
                    1 => ["nom" => "Charles", "prenom" => "Mhd", "date de naissaince" => "8/12/2005", "genre" => 'M'],
                    2 => ["nom" => "MBA", "prenom" => "Lili", "date de naissaince" => "8/5/2001","genre" => '1']
                ]] ,
            2=> ["niveau" =>"L2","filiere" => "MAE", "effectif" => 40,
             "etudiant" => [
                    0 => ["nom" => "cheikh", "prenom" => "amadou", "date de naissaince" => "7/1/2002", "genre" => 'M'],
                    1 => ["nom" => "Ver","prenom" => "Prince","date de naissaince" => "8/9/2002","genre" => 'M'],
                    2 => ["nom" => "Minkoue", "prenom" => "Nice", "date de naissaince" => "18/5/2002", "genre" => 'F']
                
                ]] ,
            3=> ["niveau" =>"L2", "filiere" => "GLRS", "effectif" => 70,
             "etudiant" => [
                    0 => ["nom" => "Paopo", "prenom" => "Marie", "date de naissaince" => "1/1/2004", "genre" => 'F' ],
                    1 => ["nom" => "OBIANG", "prenom" => "astou", "date de naissaince" => "8/1/2002", "genre" => 'M' ],
                    2 => ["nom" => "OBIANG", "prenom" => "Moisette", "date de naissaince" => "8/5/2002", "genre" => 'F']
                ]] ,
            4=> ["niveau" =>"L3", "filiere" => "MAE", "effectif" => 50,
                "etudiant" => [
                    0 => ["nom" => "Jean", "prenom" => "Paul", "date de naissaince" => "1/7/2002", "genre" => 'M'],
                    1 => ["nom" => "KLO", "prenom" => "Frank", "date de naissaince" => "9/6/2002", "genre" => 'M'],
                    2 => ["nom" => "Edou", "prenom" => "Pascale", "date de naissaince" => "7/5/2002", "genre" => 'F']
                ]] ,
            5=> ["niveau" =>"L3", "filiere" => "GLRS", "effectif" => 80,
                "etudiant" => [
                    0 => ["nom" => "DIOPO", "prenom" => "bamba", "date de naissaince" => "1/2/2002", "genre" => 'M' ],
                    1 => ["nom" => "OBIANGO", "prenom" => "Jule", "date de naissaince" => "8/11/2002", "genre" => 'F'],
                    2 => ["nom" => "Bi", "prenom" => "Rick", "date de naissaince" => "8/5/2002", "genre" => 'M']
                ]] ,
   
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=di, initial-scale=1.0">
    <link rel="stylesheet" href="class.css">
    <title>Exercice classe étudiant</title>
</head>
<body>
    <div>
<table>
<thead >
        <tr id="start">
            <th>
                <label for="niveau">Niveau:</label>
                <select name="allclasse" id="classe">
                        <option value="tout">toutes les classes</option>
                        <option value="L1">L1</option>
                        <option value="L2">L2</option>
                        <option value="L3">L3</option>
                </select>
            </th>

            <th>
                <label for="Filiere">Filiere:</label>
                <select name="Filiere" id="Filiere">
                    <option value="MAE">MAE</option>
                    <option value="GLRS">GRLS</option>
                    <option value="TTL">TTL</option>
                    <option value="MOSIEF">MOSIEF</option>
                </select>
            </th>
            <th>
                <button type="submit">OK</button>
            </th>
         </tr>

                                <?php
                                function cmp($classe,$value){
                            if($classe==$value){
                                return $classe[$value];
                            }
                        }?>
    </thead> 
    </table>
        <table>
            <thead>
                      <th> Niveau </th>
                      <th> filière </th>
                      <th> actions </th>
            </thead>

            <tbody>
            
            <?php foreach($classes as $classe): ?>
                  <tr>
                    
                        <td> 
                            <?=$classe["niveau"] ?>
                        </td>

                        <td> 
                            <?=$classe["filiere"] ?>
                        </td>

                        <td> 
                        <a href="etudiant.php">etudiants</a>
                        </td>
                    </tr> 
                    <?php endforeach  ?>   
            </tbody>
        </table>
    </div>
</body>
</html>

