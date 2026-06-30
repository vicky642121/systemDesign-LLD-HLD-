<?php


class ConfigurationManager
{
    private static ?ConfigurationManager $instance = null;
    private array $configurations = [];

    private function __construct()
    {
        $this->configurations = [
            'theme' => 'light',
            'language' => 'English',
            'currency' => 'INR',
            'timezone' => 'Asia/Kolkata'
        ];
    }

    public static function getInstance(): ConfigurationManager
    {
        if (self::$instance === null) {
            self::$instance = new ConfigurationManager();
        }
        return self::$instance;
    }

    public function setConfiguration(string $key, mixed $value):void
    {
        $this->configurations[$key] = $value;
    }

    public function get(string $key): mixed
    {
        return $this->configurations[$key] ?? null;
    }

    public function getAllConfigurations(): array
    {
        return $this->configurations;
    }
}
