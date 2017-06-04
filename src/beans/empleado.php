<?php
class Empleado {
    public $id;
    public $isOnline;
    public $salary;
    public $age;
    public $position;
    public $name;
    public $gender;
    public $email;
    public $phone;
    public $address;
    public $skills;
     //etc...
   function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__,$key)) {
                $this->$key = $val;
            }
        }
    }
/*
    function __construct(array $data) {
       // var_dump($data);
        foreach($data as $key => $val) {
                //$this->id = $val;
            $this->$key = $val;
        }
    }*/

    public function __toString()
    {
        return 'Id-->'. $this->id .'Name'.$this->name.'email'.$this->email;
    }
}
?>