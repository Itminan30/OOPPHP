<?php
// Class
class Car
{

    // Properties / Fields
    private $brand;
    private $color;
    static $vehicleType = "Car";

    private $allowedBrands = ["Audi", "BMW", "Ferrari", "Ford", "Bently", "Lamborgini", "Bugatti"];
    private $allowedColors = ["Gray", "White", "Blue", "Red", "Black"];

    // Constructor
    public function __construct($brand, $color = "none")
    {
        $this->brand = $brand;
        $this->color = $color;
    }

    // Getter & Setter Methods
    //  // Getters
    public function getBrand()
    {
        return $this->brand;
    }
    public function getColor()
    {
        return $this->color;
    }
    //  // Setters
    public function setBrand($brand)
    {
        if (in_array($brand, $this->allowedBrands)) {
            $this->brand = $brand;
        }
    }
    public function setColor($color)
    {
        if (in_array($color, $this->allowedColors)) {
            $this->color = $color;
        }
    }


    // Methods
    public function getCarInfo()
    {
        return "Brand:" . $this->brand . " Color:" . $this->color;
    }
}
