<?php
class Student{
    public $propname; 
    protected $propage; 
    private $propgender; 
    public $proplevel; 
    const BR = '<br>';

    function __construct($name, $age, $gender, $level)
    {
        $this->propname = $name;
        $this->propage = $age;
        $this->propgender = $gender;
        $this->proplevel = $level;
    }
 
    public function bath()
    {
        return  $this->propname . ' go and have your bath';
    }

    public function get_gender(){
        return $this->propgender;
    }

    public function set_gender($gender){
        $this->propgender = $gender;
        return $this->propgender;
    }

    public function cook($food){
        $this->food = $food;
        return 'cook ' . $this->food;
    }
}

class Member extends Student{
    public $club;
    public function __construct($name, $age, $gender, $level, $club)
    {
        parent::__construct($name, $age, $gender, $level);
        $this->club = $club;
    }
    public function get_kini(){
       echo $this->club;
    }

    // $this->propage = 10;



}



$adebayo = new Student('Adebayo', 100, 'F', '120');
$member = new Member('Adebayo', 100, 'Mamama', '120', 'jet club');
$member->get_kini();
// var_dump($adebayo);
// $yomi = new Student('Yomi', 200, 'M', '1');
// echo $yomi->get_gender() . '<br>';
// echo $yomi->set_gender('mmmmm');
// var_dump($koya);
// echo $koya->bath();
// echo $koya->cook('water');