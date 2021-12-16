<?php

    include "Character.php";

    class Marksman extends Character
    {
        protected int $dexterity;
        protected int $speed;

        function __construct(string $name, int $hp, int $xp, string $gender, int $dexterity, int $speed)
        {
            parent::__construct($name, $hp, $xp, $gender);
            $this->dexterity = $dexterity;
            $this->speed = $speed;
        }

        function shoot()
        {
            echo "Strzelam z mojego łuku<br>";
        }

        function getDexterity()
        {
            return $this->dexterity;
        }

        function setDexterity(int $dexterity)
        {
            $this->dexterity = $dexterity;
        }

        function getSpeed()
        {
            return $this->speed;
        }

        function setSpeed(int $speed)
        {
            $this->speed = $speed;
        }
    }

    // $marksman = new Marksman("Legolas", 200, 200, "male", 300, 100);
    // echo $marksman->__toString();

?>