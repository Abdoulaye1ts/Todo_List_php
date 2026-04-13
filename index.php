<?php 
require_once "Gestionnaire.php";

$gestionnaire = new Gestionnaire();

// Les taches
$gestionnaire->creerTache("Reviser les maths", "Reviser les math pour le contrôle", new DateTime("2026-04-14"));
$gestionnaire->creerTache("Faire les courses", "Acheter du pain, du jus avant le 10/04", new DateTime("2026-04-10"));

$gestionnaire->tacheFaite(2);

$taches = $gestionnaire->getMesTaches();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Todo List</title>

</head>
<body>
    <h1>Mes taches</h1>

<?php 
echo "<table>";

echo "<thead>";
echo "<tr>";

echo "<th> ID </th>";
echo "<th> Titre </th>";
echo "<th> Description </th>";
echo "<th> Statut </th>";
echo "<th> Date limite </th>";
//echo "<th> Actions </th>";

echo "</tr>";
echo "</thead>";

echo "<tbody>";
            
foreach ($taches as $tache) {
    echo "<tr>";

    echo "<td>" . $tache->getId() . "</td>";
    echo "<td>" . $tache->getTitre() . "</td>";
    echo "<td>" . $tache->getDescription() . "</td>";
    echo "<td>" . ( $tache->getEstFait() 
        ? "<img src='img/icons8-ok-16.png' alt='check mark image'>" 
        : "<img src='img/icons8-croix-16.png' alt='croix image'>") . "</td>";
    echo "<td>" . $tache->getDateLimite()->format("d/m/Y") . "</td>"; //format() pour afficher la date de type DateTime

    echo "</tr>";
}
    echo "</tbody>";
    echo "</table>";

?>   
</body>
</html>