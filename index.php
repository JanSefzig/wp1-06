<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>sčítaní lidu<h1>
    <form action="sumbit.php" method="post">
        <label for="username">Jméno a Příjmení:</label>
        <input type="text" name="Uživatelské jméno" id="username">
        <br>
        <label for="password">Heslo:</label>
        <input type="text" name="Heslo" id="password">
        <br>
        <label for="age">Věk:</label>
        <input type="number" name="age" id="age" min="0" max="150">
        <br>
        <input type="submit" value="odeslat">
    </form>
</body>
</html>