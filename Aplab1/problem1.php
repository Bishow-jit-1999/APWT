<?php 

class student{
    public $name;
    public $id;
    public $DOB;
    public $courses;
    function Showinfo(){
        echo "Student name:".$this->name."<br>";
        echo "Student id:".$this->id."<br>";
        echo "Student DOB:".$this->DOB."<br>";
    }

    function Addcourse($coursename){
        $this->courses[]=$coursename;

    }

    function showAllCourses(){
        echo "Student name:".$this->name."<br>";
        echo "Student id:".$this->id."<br>";
        echo "Courses:";
        foreach($this->courses as $c){
            echo $c ."<br>" ;
        }
    }
}
    $student1=new student();
    $student1->name="Bishowjit";
    $student1->id="18-38250-2";
    $student1->DOB="3/2/2000";
    $student1->Addcourse("Computer Networking");
    $student1->Addcourse(" Advance Web technology");
    $student1->Addcourse("Database");
    $student1->Addcourse("Math5");
    $student1->Showinfo();
    $student1->showAllCourses();

    $student2=new student();
    $student2->name="John";
    $student2->id="18-32000-3";
    $student2->DOB="1/1/2001";
    $student2->Addcourse("Math 2");
    $student2->Addcourse("C++");
    $student2->Addcourse("English 2");
    $student2->Addcourse("DLC");
    $student2->Showinfo();
    $student2->showAllCourses();
  
  



