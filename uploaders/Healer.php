<?php

if(isset($_FILES['Healer']))
{
    $file_tmp =$_FILES['Healer']['tmp_name'];

    $img_src = "../img/healer.png";
    session_start();
    if(move_uploaded_file($file_tmp, $img_src))
    {
        $_SESSION['feedback'] = "Zdjęcie klasy Healer zostało pomyślnie zmienione";
    }
    else
    {
        $_SESSION['feedback'] = "Wystąpił błąd przy zmianie zdjęcia klasy Healer";
    }
    header('Location: ..');
    exit();
}

?>