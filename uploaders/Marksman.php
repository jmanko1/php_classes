<?php

if(isset($_FILES['Marksman']))
{
    $file_tmp =$_FILES['Marksman']['tmp_name'];

    $img_src = "../img/marksman.png";
    session_start();
    if(move_uploaded_file($file_tmp, $img_src))
    {
        $_SESSION['feedback'] = "Zdjęcie klasy Marksman zostało pomyślnie zmienione";
    }
    else
    {
        $_SESSION['feedback'] = "Wystąpił błąd przy zmianie zdjęcia klasy Marksman";
    }
    header('Location: ..');
    exit();
}

?>