<?php

    include "../Character.php";    

    if(!empty($_POST['name']))
    {
        $character = new Character($_POST['name'], $_POST['hp'], $_POST['xp'], $_POST['gender']);
        $connection = @new mysqli('localhost', 'root', '', 'zaliczenie');
        
        $name = $character->getName();
        $hp = $character->getHP();
        $xp = $character->getXP();
        $gender = $character->getGender();

        $connection->query("INSERT INTO character_objects VALUES(NULL, '$name', $hp, $xp, '$gender')");
        $connection->close();

        session_start();
        $_SESSION['result'] = "Obiekt Character [name = ".$name.", gender = ".$gender.", hp = ".$hp.", xp = ".$xp.']';
        header("Location: ..");
        exit();
    }

?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character</title>
</head>
<body>
    <h1>Character</h1>
    <form method="post">
        <label for="name">Imię:</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="gender">Płeć:</label><br>
        <input type="text" name="gender" id="gender"><br><br>
        
        <label for="hp">Punkty życia:</label><br>
        <input type="number" name="hp" id="hp"><br><br>

        <label for="xp">Punkty doświadczenia:</label><br>
        <input type="number" name="xp" id="xp"><br><br>

        <button type="submit">Utwórz obiekt</button>
    </form>
    <br>
    <a href="..">Do strony głównej</a>
</body>
</html>