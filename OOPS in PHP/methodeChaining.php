<?php 
// If you have multiple classes with the same name or 
//if you want to organize your classes in a structured way, you can use namespaces in PHP. 
// note that to create an object use the namespace eg #obj = methodeChaining\className;
namespace methodeChaining;
class A{
    public function One(){
        echo "method one";
        return $this;
    }
    public function Two(){
        echo "method Two";
        return $this;
    }
    public function Three(){
        echo "method Three";
        return $this;
    }
    public function Four(){
        echo "method Four";
        return $this;
    }
}
$ch = new A();
//method chaining
$ch->One()->Two()->Three()->Four();
