<?php

    include "Character.php";

    class Warrior extends Character
    {
        protected int $strength;
        protected int $armor;

        function __construct(string $name, int $hp, int $xp, string $gender, int $armor, int $strength)
        {
            parent::__construct($name, $hp, $xp, $gender);
            $this->strength = $strength;
            $this->armor = $armor;
        }

        function swordAttack()
        {
            echo "Atakuję moim mieczem<br>";
        }

        function getStrength()
        {
            return $this->strength;
        }

        function setStrength(int $strength)
        {
            $this->strength = $strength;
        }

        function getArmor()
        {
            return $this->armor;
        }

        function setArmor(int $armor)
        {
            $this->armor = $armor;
        }
    }

    // $warrior = new Warrior("Maximus", 200, 500, "male", 700, 600);
    // echo $warrior->__toString();

?>