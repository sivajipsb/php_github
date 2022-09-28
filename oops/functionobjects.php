<?php 
class Student{
    var $name;
    var $major;
    var $gpa;

    function __construct($aname,$amajor,$agpa)
    {
            $this->name=$aname;
            $this->major=$amajor;
            $this->gpa=$agpa;
    }

    function hashonor()
    {
        if($this->gpa>=3.5)
        {
            return "true";
        }
        else
        {
            return "false";
        }
    }
}

$student1 = new Student("sivaji","cse","4.0");
echo $student1->name;

echo $student1->hashonor();
?>