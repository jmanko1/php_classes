var character = document.getElementsByName("Character");
character[0].addEventListener("input", () => { sendAlert("Character"); });

var warrior = document.getElementsByName("Warrior");
warrior[0].addEventListener("input", () => { sendAlert("Warrior"); });

var marksman = document.getElementsByName("Marksman");
marksman[0].addEventListener("input", () => { sendAlert("Marksman"); });

var magician = document.getElementsByName("Magician");
magician[0].addEventListener("input", () => { sendAlert("Magician"); });

var healer = document.getElementsByName("Healer");
healer[0].addEventListener("input", () => { sendAlert("Healer"); });

var darkwizard = document.getElementsByName("DarkWizard");
darkwizard[0].addEventListener("input", () => { sendAlert("DarkWizard"); });

function sendAlert(alert_class)
{
    alert("Dodano plik graficzny do zmiany zdjęcia klasy " + alert_class);
}