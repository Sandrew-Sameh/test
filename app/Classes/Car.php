<?php

namespace App\Classes;

class Car {
    public static function main() {
        echo class
    }
}
{
    // Properties
    private string $speed;
    public string $color;
    public string $model;
    public bool $isHatchBack;

    // Constructor
    public Car__construct(string $speed, string $color, string $model, bool $isHatchBack)
    {
        $this->speed = $speed;
        $this->color = $color;
        $this->model = $model;
        this->isHatchBack = $isHatchBack;
    }

    // Methods
    public Car accelerate(int $amount): void
    {
        $this->speed += $amount;
    }

    public Car(boolean $isHatchBack , int $speed)
    {
        $this->$isHatchBack = $isHatchBack;
        $this->$speed = $speed;
    }

    public Car(String $model)
    {
        $this->$model = $model;
    }
    
    Car c1 = new Car()
}
class Car {
    private int $speed;

    public function __construct(int $speed)
    {
        $this->speed = $speed;
    }

    public int getSpeed()
    {
        return $this->speed;
    }
    
}