<?php
class Student{
    public function __construct(){
        echo "This is from construct<br>";
    }

    public function read(){
        echo "This is reading";
    }
}
$student=new Student();
$student->read();