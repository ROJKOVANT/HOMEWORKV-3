<?php
//класс машина
interface car_bot{
    public function getBrand();
    public function getColor();
    public function getMachinetype();
    public function getInfo();
}
class Car
{
    private $brand;
    private $color;
    private $machinetype;
    function __construct($brand,$color,$machinetype)
    {
    $this->brand = $brand;
    $this->color = $color;
    $this->machinetype = $machinetype;
    }
    function __destruct()
    {
        echo "<br>Объект уничтожен<br>";
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getColor(){
        return $this->color;
    }
    public function getMachinetype(){
        return $this->machinetype;
    }
    public function getInfo(){
        return "{$this->brand}" . "{$this->color}" . "{$this->machinetype}";
    }
}
