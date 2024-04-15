<?php 

$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>
<body>
    <form action="" method="get">
        <input type="text" placeholder="inserisci il tuo nome" name="name" id="name">
        <input type="text" placeholder="inserisci la tua email" name="email" id="email">
        <input type="text" placeholder="inserisci età" name="age" id="age">
        <button type="submit">Invia</button>
    </form>

    <div class="result">
        <?php 
        
        
            if(strlen($name) > 3 && str_contains($email, ".") && str_contains($email, "@") && is_numeric($age)){
                echo "Accesso riuscito";
            }
            else{
                echo "Accesso negato";
            }
        
        ?>
    </div>
</body>
</html>