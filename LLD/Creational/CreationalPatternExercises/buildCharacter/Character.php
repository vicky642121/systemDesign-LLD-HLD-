<?php

class Character
{
    public string $name = "";
    public int $health = 0;
    public string $weapon = "";
    public int $level = 1;
    public int $gender = 1;
    public string $dress = "Warrior Armor";


    public function getSummary(): string
    {
        $gender = [1 => "Male", 2 => "Female"];
        return "Character Details:\n
                Name: {$this->name}\n
                Health: {$this->health}\n
                Weapon: {$this->weapon}\n
                Level: {$this->level}\n
                Gender: {$gender[$this->gender]}\n
                Dress: {$this->dress}\n";
    }
}
