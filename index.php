<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // include the student class
            include('student.php');
            
            $students = array();
            
            // add the first student
            $first = new Student();
            $first->surname = "Doe";
            $first->first_name = "John";
            $first->add_email('home', 'john@doe.com');
            $first->add_email('work', 'jdoe@mcdonalds.com');
            $first->add_grade(65);
            $first->add_grade(75);
            $first->add_grade(55);
            $students['j123'] = $first;
            
            // add the second student
            $second = new Student();
            $second->surname = "Einstein";
            $second->first_name = "Albert";
            $second->add_email('home', 'albert@braniacs.com');
            $second->add_email('work1', 'a_einstein@bcit.com');
            $second->add_email('work2', 'albert@physics.mit.edu');
            $second->add_grade(95);
            $second->add_grade(80);
            $second->add_grade(50);
            $students['a456'] = $second;
            
            // add the third student
            $third = new Student();
            $third->surname = "Liu";
            $third->first_name = "Tianyang";
            $third->add_email('home', 'lty0711@qq.com');
            $third->add_email('school', 'anyyhmy@gamil.com');
            $third->add_grade(60);
            $third->add_grade(65);
            $third->add_grade(75);
            $students['t789'] = $third;
            
            ksort($students); // sort the output
            
            // print every students' info
            foreach($students as $student){
                echo $student->toString();
            }
        ?>
    </body>
</html>
