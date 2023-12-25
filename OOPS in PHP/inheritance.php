<?php 
class Company{
    //accessspecifers 
    public $name;
    public $role;
    function __construct($name,$role)  
    {
        $this->name = $name;
        $this->role = $role;   
    }
    function job(){
       echo "Name of the Empolyee $this->name and role is $this->role";
    }
}

class Empolyee extends Company{
    public $salary;

    function __construct($name,$role,$salary)
    {   
        parent::__construct($name,$role);
        $this->salary = $salary;
    }
    function employeeSalary(){
        //acess the perent class properties 
        echo "Name of the Empolyee $this->name , role is $this->role and salary $this->salary";
    }
}
$empolyee = new Empolyee('Albin','SDE',3000000);
//calling the parent method using child object 
$empolyee->employeeSalary();
//calling the parent method 
$empolyee->job();