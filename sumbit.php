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
    $fullname = filter_input(INPUT_POST, 'fullname');
    $age = filter_input(INPUT_POST, 'age');
    echo "Bylo vyplněno jméno": $fullname <br>";
    echo "Váš věk: $age";

    if(($age >= 18) && ($fullname == 'Jan Sefzig')) {
        echo "je ti víc jak 18 a jsi Jan Sefzig";
    } else {
        echo "máš smůlu";
    }


    ?>
    
</body>
</html>