<?php

    include "../Marksman.php";

    if(!empty($_POST['name']))
    {
        $marksman = new Marksman($_POST['name'], $_POST['hp'], $_POST['xp'], $_POST['gender'], $_POST['dexterity'], $_POST['speed']);
        $connection = @new mysqli('localhost', 'root', '', 'zaliczenie');
        
        $name = $marksman->getName();
        $hp = $marksman->getHP();
        $xp = $marksman->getXP();
        $gender = $marksman->getGender();
        $dexterity = $marksman->getDexterity();
        $speed = $marksman->getSpeed();

        $connection->query("INSERT INTO marksman_objects VALUES(NULL, '$name', $hp, $xp, '$gender', $dexterity, $speed)");
        $connection->close();

        session_start();
        $_SESSION['result'] = "Obiekt Marksman [name = ".$name.", gender = ".$gender.", hp = ".$hp.", xp = ".$xp.", dexterity = ".$dexterity.", speed = ".$speed."]";
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
<title>Marksman</title>
</head>
<body>
    <h1>Marksman</h1>
    <form method="post">
        <label for="name">Imię:</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="gender">Płeć:</label><br>
        <input type="text" name="gender" id="gender"><br><br>
        
        <label for="hp">Punkty życia:</label><br>
        <input type="number" name="hp" id="hp"><br><br>

        <label for="xp">Punkty doświadczenia:</label><br>
        <input type="number" name="xp" id="xp"><br><br>

        <label for="dexterity">Punkty zręczności:</label><br>
        <input type="number" name="dexterity" id="dexterity"><br><br>

        <label for="speed">Punkty prędkości:</label><br>
        <input type="number" name="speed" id="speed"><br><br>

        <button type="submit">Utwórz obiekt</button>
    </form>
    <br>
    <a href="..">Do strony głównej</a>
</body>
</html>