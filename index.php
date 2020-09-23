<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>index</title>
    </head>
    <body>
        <?php
        include 'Student.php';
        $students = array();
        ##first Student
        $first = new Student(); 
        $first->surname = "Doe"; 
        $first->first_name = "John"; 
        $first->add_status('Status','Senior');
        $first->add_email('home','john@doe.com'); 
        $first->add_email('work','jdoe@mcdonalds.com'); 
        $first->add_grade(65); 
        $first->add_grade(75); 
        $first->add_grade(55); 
        $students['j123'] = $first;
        ##second Student
        $second = new Student(); 
        $second->surname = "Einstein"; 
        $second->first_name = "Albert"; 
        $second->add_status('Status','Junior');
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca'); 
        $second->add_email('work2','albert@physics.mit.edu'); 
        $second->add_grade(95); 
        $second->add_grade(80); 
        $second->add_grade(50); 
        $students['a456'] = $second;
        ##third Student
        $third = new Student(); 
        $third->surname = "Pan"; 
        $third->first_name = "Gaofeng";
        $third->add_status('Status','Senior');
        $third->add_email('work','1254066225@qq.com'); 
        $third->add_grade(100);
        $third->add_grade(80); 
        $third->add_grade(90); 
        $students['g864'] = $third;
         ##fourth Student
        $fourth = new Student(); 
        $fourth->surname = "Parker"; 
        $fourth->first_name = "Gavin";
        $fourth->add_status('Status','Freshman');
        $fourth->add_email('work','1234567890@qq.com'); 
        $fourth->add_grade(60);
        $fourth->add_grade(80); 
        $fourth->add_grade(70); 
        $students['g486'] = $fourth;
        ksort($students); // one of the many sort functions
        foreach($students as $student) 
            echo $student->toString(); 
        
        ?>      
    </body>
</html>
