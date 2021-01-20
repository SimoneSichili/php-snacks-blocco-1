<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e
verificare (cercando i metodi che non
conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. mail contenga un punto e una chiocciola
3. age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti
“Accesso negato”. -->

<?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    
    $mailSymbols = ["@", "."];
    $message = "";

    if(strlen($name) > 3 && str_contains($mail, "@") && str_contains($mail, ".") && is_numeric($age)) {
        $message = "Accesso riuscito";
    } else {
        $message = "Accesso negato";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php snack 2</title>
</head>
<body>
    <h1><?php echo $message; ?></h1>
    <hr>
    <h2>Dati GET scritti</h2>
    <h3><?php echo $name; ?></h3>
    <h3><?php echo $mail; ?></h3>
    <h3><?php echo $age; ?></h3>
</body>
</html>