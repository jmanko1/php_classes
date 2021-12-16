<?php

if(isset($_FILES['Warrior']))
{
    $file_tmp =$_FILES['Warrior']['tmp_name'];

    $img_src = "../img/warrior.png";
    session_start();
    if(move_uploaded_file($file_tmp, $img_src))
    {
        $_SESSION['feedback'] = "Zdjęcie klasy Warrior zostało pomyślnie zmienione";
    }
    else
    {
        $_SESSION['feedback'] = "Wystąpił błąd przy zmianie zdjęcia klasy Warrior";
    }
    header('Location: ..');
    exit();
}

?>