<?php

    include "../Healer.php";

    if(!empty($_POST['name']))
    {
        $healer = new Healer($_POST['name'], $_POST['hp'], $_POST['xp'], $_POST['gender'], $_POST['mana'], $_POST['knowledge_points'], $_POST['healing_power']);
        $connection = @new mysqli('localhost', 'root', '', 'zaliczenie');
        
        $name = $healer->getName();
        $hp = $healer->getHP();
        $xp = $healer->getXP();
        $gender = $healer->getGender();
        $mana = $healer->getMana();
        $knowledge_points = $healer->getKnowledgePoints();
        $healing_power = $healer->getHealingPower();

        $connection->query("INSERT INTO healer_objects VALUES(NULL, '$name', $hp, $xp, '$gender', $mana, $knowledge_points, $healing_power)");
        $connection->close();

        session_start();
        $_SESSION['result'] = "Obiekt Healer [name = ".$name.", gender = ".$gender.", hp = ".$hp.", xp = ".$xp.", mana = ".$mana.", knowledgePoints = ".$knowledge_points.", healingPower = ".$healing_power."]";
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
    <title>Healer</title>
</head>
<body>
    <h1>Healer</h1>
    <form method="post">
        <label for="name">Imię:</label><br>
        <input type="text" name="name" id="name"><br><br>

        <label for="gender">Płeć:</label><br>
        <input type="text" name="gender" id="gender"><br><br>
        
        <label for="hp">Punkty życia:</label><br>
        <input type="number" name="hp" id="hp"><br><br>

        <label for="xp">Punkty doświadczenia:</label><br>
        <input type="number" name="xp" id="xp"><br><br>

        <label for="mana">Punkty many:</label><br>
        <input type="number" name="mana" id="mana"><br><br>

        <label for="knowledge_points">Punkty wiedzy:</label><br>
        <input type="number" name="knowledge_points" id="knowledge_points"><br><br>

        <label for="healing_power">Punkty uzdrawiania:</label><br>
        <input type="number" name="healing_power" id="healing_power"><br><br>

        <button type="submit">Utwórz obiekt</button>
    </form>
    <br>
    <a href="..">Do strony głównej</a>
</body>
</html>