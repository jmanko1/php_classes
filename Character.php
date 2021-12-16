<?php

    class Character
    {
        protected string $name;
        protected int $hp;
        protected int $xp;
        protected string $gender;

        function __construct(string $name, int $hp, int $xp, string $gender)
        {
            $this->name = $name;
            $this->hp = $hp;
            $this->xp = $xp;
            $this->gender = $gender;
        }

        function run()
        {
            echo "Biegnę<br>";
        }

        function sit()
        {
            echo "Siadam<br>";
        }

        function sleep()
        {
            echo "Idę spać<br>";
        }

        function getName()
        {
            return $this->name;
        }

        function setName(string $name)
        {
            $this->name = $name;
        }

        function getHP()
        {
            return $this->hp;
        }

        function setHP(int $hp)
        {
            $this->hp = $hp;
        }

        function getXP()
        {
            return $this->xp;
        }

        function setXP(int $xp)
        {
            $this->xp = $xp;
        }

        function getGender()
        {
            return $this->gender;
        }

        function setGender(string $gender)
        {
            $this->gender = $gender;
        }

        function __toString()
        {
            $str = "<strong>".get_class($this)."</strong><br>";

            foreach($this as $key => $value)
            {
                $str .= "$key = $value<br>";
            }

            return $str;
        }

    }

    // $character = new Character("Postac123", 100, 300, "male");
    // echo $character->__toString();
?>