<?php

    include "Character.php";

    class Magician extends Character
    {
        protected int $mana;
        protected int $knowledgePoints;

        function __construct(string $name, int $hp, int $xp, string $gender, int $mana, int $knowledgePoints)
        {
            parent::__construct($name, $hp, $xp, $gender);
            $this->mana = $mana;
            $this->knowledgePoints = $knowledgePoints;
        }

        function spellCast()
        {
            echo "Rzucam magiczne zaklęcie<br>";
        }

        function getMana()
        {
            return $this->mana;
        }

        function setMana(int $mana)
        {
            $this->mana = $mana;
        }

        function getKnowledgePoints()
        {
            return $this->knowledgePoints;
        }

        function setKnowledgePoints(int $knowledgePoints)
        {
            $this->knowledgePoints = $knowledgePoints;
        }
    }

    // $magician = new Magician("Harry Potter", 100, 150, "male", 200, 150);
    // echo $magician->__toString();

?>