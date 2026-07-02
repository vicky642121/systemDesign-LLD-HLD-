<?php

require_once __DIR__ . '/Character.php';

class CharacterBuilder
{
    private Character $character;

    public function __construct()
    {
        $this->character = new Character();
    }

    public function setName(string $name): CharacterBuilder
    {
        $this->character->name = $name;
        return $this;
    }

    public function setHealth(int $health): CharacterBuilder
    {
        $this->character->health = $health;
        return $this;
    }

    public function setWeapon(string $weapon): CharacterBuilder
    {
        $this->character->weapon = $weapon;
        return $this;
    }

    public function setLevel(int $level): CharacterBuilder
    {
        $this->character->level = $level;
        return $this;
    }

    public function setGender(int $gender): CharacterBuilder
    {
        if (!in_array($gender, [1, 2])) {
            throw new InvalidArgumentException("Invalid gender value. Use 1 for Male and 2 for Female.");
        }

        $this->character->gender = $gender;
        return $this;
    }

    public function setDress(string $dress): CharacterBuilder
    {
        $this->character->dress = $dress;
        return $this;
    }

    public function build(): Character
    {
        if ($this->character->name == "") {

            throw new Exception("Character name is required.");
        }
        return $this->character;
    }
}
