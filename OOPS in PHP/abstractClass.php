<?php
//abstract class is a class that cannot be instantiated on its own and may contain abstract methods. 
//Abstract methods are methods that are declared in the abstract class but do not have an implementation
// -- an abstract class must have an abstract menthod
// -- the abstract method should be implimented in subclass
abstract class shape{
   public $name;
   function __construct($name){
      $this->name = $name;
   }
   // delaire the method
   abstract function calulateArea();
}

class triangle extends shape{
    public $height;
    public $breath;
    function __construct($name,$height,$breath)
    {   
        $this->height = $height;
        $this->breath = $breath;
        parent::__construct($name);
    }
    public function calulateArea(){
        $area = ($this->height*$this->breath)/2;
        echo "area of $this->name is : $area";
    }
}
class reactangle extends shape{
    public $height;
    public $width;
    function __construct($name,$height,$width)
    {
        $this->height = $height;
        $this->width = $width;
        parent::__construct($name);
    }
    public function calulateArea(){
        $area = $this->height*$this->width;
        echo "area of $this->name is : $area";
    }
}

$areaTriangle = new triangle('triangle',22,10);
$arearectangle = new reactangle('rectangle',20,10);

$arearectangle->calulateArea();
$areaTriangle->calulateArea();