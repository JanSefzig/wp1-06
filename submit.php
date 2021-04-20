<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Vyplněná data<h1>
    <?php
    $username = filter_input(INPUT_POST, 'username');
    $username = filter_input(INPUT_POST, 'password');
    $age = filter_input(INPUT_POST, 'age');
    echo "Bylo vyplněno jméno $username <br>";
    echo "Váš věk: $age";

    if(($age >= 15) && ($username == 'jansefzig')) {
        echo "je ti víc jak 15 a jsi Jan Sefzig";
    } else {
        echo "není ti více jak 15 let ";
    }


    ?>
    
</body>
</html>