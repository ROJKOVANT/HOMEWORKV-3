<?php
interface handleRobot{
    public function getBrand();
    public function getPastecolor();
    public function getPastethickness();
    public function getInfo();
}
//класс ручка механическая
class mechanicalHandle
{
    private $brand;
    private $pastecolor;
    private $pastethickness;
    function __construct($brand,$pastecolor,$pastethickness)
    {
    $this->brand = $brand;
    $this->pastecolor = $pastecolor;
    $this->pastethickness = $pastethickness;
    }
    function __destruct()
    {
        echo "Объект уничтожен<br>";
    }
    public function getBrand(){
        return $this->brand;
    }
    public function getPastecolor(){
        return $this->pastecolor;
    }
    public function getPastethickness(){
        return $this->pastethickness;
    }
    public function getInfo(){
        return "{$this->brand}" . "{$this->pastecolor}" . "{$this->pastethickness}";
    }
}