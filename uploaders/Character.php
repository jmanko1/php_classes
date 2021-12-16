<?php

if(isset($_FILES['Character']))
{
    $file_tmp =$_FILES['Character']['tmp_name'];

    $img_src = "../img/character.png";
    session_start();
    if(move_uploaded_file($file_tmp, $img_src))
    {
        $_SESSION['feedback'] = "Zdjęcie klasy Character zostało pomyślnie zmienione";
    }
    else
    {
        $_SESSION['feedback'] = "Wystąpił błąd przy zmianie zdjęcia klasy Character";
    }
    header('Location: ..');
    exit();
}

?>