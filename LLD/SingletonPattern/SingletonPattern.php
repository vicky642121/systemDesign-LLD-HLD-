<?php
//Singleton Pattern is one instance global access point:
class SchoolPrincipal
{

    private static ?SchoolPrincipal $principal = null;
    private string $name;

    private function __construct()
    {
        $this->name = "Vicky";
        echo "school principal Hired";
    }


    public static function getInstance(): SchoolPrincipal
    {
        if (self::$principal === null) {
            self::$principal = new SchoolPrincipal();
        }
        return self::$principal;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

