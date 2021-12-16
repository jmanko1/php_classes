<?php

if(isset($_FILES['Magician']))
{
    $file_tmp =$_FILES['Magician']['tmp_name'];

    $img_src = "../img/magician.png";
    session_start();
    if(move_uploaded_file($file_tmp, $img_src))
    {
        $_SESSION['feedback'] = "Zdjęcie klasy Magician zostało pomyślnie zmienione";
    }
    else
    {
        $_SESSION['feedback'] = "Wystąpił błąd przy zmianie zdjęcia klasy Magician";
    }
    header('Location: ..');
    exit();
}

?>