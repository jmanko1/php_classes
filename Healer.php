<?php

    include "Magician.php";

    class Healer extends Magician
    {
        protected int $healingPower;

        function __construct(string $name, int $hp, int $xp, string $gender, int $mana, int $knowledgePoints, int $healingPower)
        {
            parent::__construct($name, $hp, $xp, $gender, $mana, $knowledgePoints);
            $this->healingPower = $healingPower;
        }

        function heal()
        {
            echo "Uzdrawiam<br>";
        }

        function getHealingPower()
        {
            return $this->healingPower;
        }

        function setHealingPower(int $healingPower)
        {
            $this->healingPower = $healingPower;
        }
    }

    // $healer = new Healer("Druid", 400, 1000, "male", 500, 1000, 600);
    // echo $healer->__toString();

?>