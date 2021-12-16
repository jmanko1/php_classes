<?php

if(isset($_FILES['DarkWizard']))
{
    $file_tmp =$_FILES['DarkWizard']['tmp_name'];

    $img_src = "../img/darkwizard.png";
    session_start();
    if(move_uploaded_file($file_tmp, $img_src))
    {
        $_SESSION['feedback'] = "Zdjęcie klasy DarkWizard zostało pomyślnie zmienione";
    }
    else
    {
        $_SESSION['feedback'] = "Wystąpił błąd przy zmianie zdjęcia klasy DarkWizard";
    }
    header('Location: ..');
    exit();
}

?>