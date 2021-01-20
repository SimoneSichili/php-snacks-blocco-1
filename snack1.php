<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php 
    $matches = [
        [
            "homeTeam" => "Nets",
            "visitingTeam" => "Bucks",
            "homeScore" => 125,
            "visitingScore" => 123
        ],
        [
            "homeTeam" => "Raptors",
            "visitingTeam" => "Mavericks",
            "homeScore" => 116,
            "visitingScore" => 93
        ],
        [
            "homeTeam" => "Heat",
            "visitingTeam" => "Pistons",
            "homeScore" => 113,
            "visitingScore" => 107
        ],
        [
            "homeTeam" => "Bulls",
            "visitingTeam" => "Rockets",
            "homeScore" => 125,
            "visitingScore" => 120
        ],
        [
            "homeTeam" => "Lakers",
            "visitingTeam" => "Warriors",
            "homeScore" => 113,
            "visitingScore" => 115
        ],
    ];

    $printMatches = "";

    for ($i=0; $i < count($matches); $i++) { 
        $printMatches .= "<h3>" . $matches[$i]["homeTeam"] . " - " . $matches[$i]["visitingTeam"] . " | " . $matches[$i]["homeScore"] . " - " . $matches[$i]["visitingScore"] . "</h3>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack 1</title>
</head>
<body>
    <h1>NBA matches</h1>
    <?php echo $printMatches; ?>
</body>
</html>