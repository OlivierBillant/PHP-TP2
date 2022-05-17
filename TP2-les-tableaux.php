<?php
//Excercice 1
/*
Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes et 
les valeurs des tableaux indicés contenant le prénom, 
la ville de résidence et l’âge de la personne. 
*/
$val_Antoine[] = "Antoine";
$val_Antoine[] = "Lorient";
$val_Antoine[] = "34";

$val_Phileas[] = "Phileas";
$val_Phileas[] = "Quimper";
$val_Phileas[] = "26";

$annuaire["Guillou"] = $val_Antoine;
$annuaire["Peron"] = $val_Phileas;

var_dump($annuaire);

//Excercice 2
/*
* Créer un tableau multidimensionnel associatif dont les clés sont des noms de personnes 
* et les valeurs des tableaux associatifs dont les clés sont le prénom, 
* la ville de résidence et l’âge de la personne avec une série de valeurs associées. 
*/

$val_Clement["Prenom"] = "Clement";
$val_Clement["Ville"] = "LeFaou";
$val_Clement["Age"] = "14";
$val_Olivier["Prenom"] = "Olivier";
$val_Olivier["Ville"] = "Brest";
$val_Olivier["Age"] = "98";

$annuaire_detail["Duval"] = $val_Clement;
$annuaire_detail["Billant"] = $val_Olivier;

var_dump($annuaire_detail);

?>
//Excercice 3
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php foreach ($annuaire as $key => $val) : ?>
            <ul>
                <li>
                    Element <?= $key ?> :
                    <?php foreach ($val as $key2 => $val2) : ?>
                        <ul>
                            <li>
                                élement <?= $key2 ?> : <?= $val2 ?>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                </li>
            </ul>
        <?php endforeach; ?>

        <?php foreach ($annuaire_detail as $key => $val) : ?>
            <ul>
                <li>
                    Element <?= $key ?> :
                    <?php foreach ($val as $key2 => $val2) : ?>
                        <ul>
                            <li>
                                <?= $key2 ?> : <?= $val2 ?>
                            </li>
                        </ul>
                    <?php endforeach; ?>
                </li>
            </ul>
        <?php endforeach; ?>
    </div>
</body>

</html>

<?php
//Excercice 4
$mailing_list[] = "antoine.guillou2022@campus-eni.fr";
$mailing_list[] = "phileas.peron2022@campus-eni.fr";
$mailing_list[] = "clement.duval2022@campus-eni.fr";
$mailing_list[] = "olivier.billant2022@campus-eni.fr";
$mailing_list[] = "olivier@guilben.bzh";
$mailing_list[] = "francois@billant.bzh";

