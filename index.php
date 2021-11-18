<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lidé a filmy</title>
</head>
<body>
<?php
// Lidé a filmy //
$people[0]['firstname'] = "Jakub";
$people[0]['lastname'] = "Vlček";
$people[0]['age'] = 30;
$people[0]['height'] = 181;
$people[0]['weight'] = 83;

$people[1]['firstname'] = "Martin";
$people[1]['lastname'] = "Fenin";
$people[1]['age'] = 34;
$people[1]['height'] = 180;
$people[1]['weight'] = 81;

$people[2]['firstname'] = "Karel";
$people[2]['lastname'] = "Gott";
$people[2]['age'] = 80;
$people[2]['height'] = 176;
$people[2]['weight'] = 70;

$people[3]['firstname'] = "Jakub";
$people[3]['lastname'] = "Janeček";
$people[3]['age'] = 35;
$people[3]['height'] = 185;
$people[3]['weight'] = 68;

$people[4]['firstname'] = "Daniel";
$people[4]['lastname'] = "Vávra";
$people[4]['age'] = 46;
$people[4]['height'] = 169;
$people[4]['weight'] = 90;


$movies[0]['name'] = "Tenkrát v Hollywoodu";
$movies[0]['director'] = "Quentin Tarantino";
$movies[0]['year'] = "2019";
$movies[0]['genre'] = "Drama/Komedie";

$movies[1]['name'] = "El Camino";
$movies[1]['director'] = "Vince Gilligan";
$movies[1]['year'] = "2019";
$movies[1]['genre'] = "Thriller";

$movies[2]['name'] = "Vlk z Wall Street";
$movies[2]['director'] = "Martin Scorsese";
$movies[2]['year'] = "2014";
$movies[2]['genre'] = "Životopisný";

$movies[3]['name'] = "South Park: Peklo na Zemi";
$movies[3]['director'] = "Trey Parker";
$movies[3]['year'] = "1999";
$movies[3]['genre'] = "Komedie";

$movies[4]['name'] = "8. míle";
$movies[4]['director'] = "Curtis Hanson";
$movies[4]['year'] = "2003";
$movies[4]['genre'] = "Drama";

for ($i=0; $i <count($people); $i++) { ?>{ 
    <h2><?= $people[$i]['name'];?></h2>
    <p><strong>Jméno: </strong><?= $people[$i]['name'];?></p>
    <p><strong>Přijmení: </strong><?= $people[$i]['lastname'];?></p>
    <p><strong>Věk: </strong><?= $people[$i]['age'];?></p>
    <p><strong>Výška: </strong><?= $people[$i]['height'];?></p> 
    <p><strong>Váha: </strong><?= $people[$i]['weight'];?></p>
}

for ($i=0; $i < count($movies); $i++) { ?>
    <h2><?= $movies[$i]['name'];?></h2>
    <p><strong>Jméno: </strong><?= $movies[$i]['name'];?></p>
    <p><strong>Režisér: </strong><?= $movies[$i]['director'];?></p>
    <p><strong>Rok vydání: </strong><?= $movies[$i]['year'];?></p>
    <p><strong>Žánr: </strong><?= $movies[$i]['genre'];?></p>

<?php
}
?>
</body>
</html>
