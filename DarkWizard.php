<?php

    include "Magician.php";

    class DarkWizard extends Magician
    {
        protected int $lifeStealPower;

        function __construct(string $name, int $hp, int $xp, string $gender, int $mana, int $knowledgePoints, int $lifeStealPower)
        {
            parent::__construct($name, $hp, $xp, $gender, $mana, $knowledgePoints);
            $this->lifeStealPower = $lifeStealPower;
        }

        function stealHealthPoints()
        {
            echo "Kradnę punkty życia<br>";
        }

        function getLifeStealPower()
        {
            return $this->lifeStealPower;
        }

        function setLifeStealPower(int $lifeStealPower)
        {
            $this->lifeStealPower = $lifeStealPower;
        }
    }

    // $darkwizard = new DarkWizard("Voldemort", 400, 1000, "male", 500, 800, 300);
    // echo $darkwizard->__toString();

?>