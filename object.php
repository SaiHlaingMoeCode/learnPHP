<?php
//class

// class Sai{
//     public $name ="Hlaing Moe";
//     function greet(){
//         echo "Hello from sai";
//     }
// }
// $sai=new Sai();
// $sai->greet();
// echo"<br>";
// class John{
//     public $name ="double Doe";
//     function greet(){
//         echo "Hello from john";
//     }
// }
// $john=new John();
// $john->greet();

class Student{
    public $name="Mg Mg";
    public $age=21;
    public $major="CS";
    public function greet(){
        echo "Mingalarbar";
    }
    public function info(){
        echo $this->greet();
        echo "<br>";
        echo " My name is ".$this->name .". I am ". $this->age. ". I am studying ". $this->major;
    }
}
$student=new Student();
echo $student->info();
