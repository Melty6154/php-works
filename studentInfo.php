<?php

//inclusion of files to make the file work
include "ui.php";
//using DIR to include files from other folders
include __DIR__ . "/students/studentsData.php";
include __DIR__ . "/students/studentsFunctions.php";
include __DIR__ . "/students/studentsForms.php";
//if student code is set you will get the student based on the code you entered but if not set it will give you a message that reads "student not found"
if(isset($_GET['code'])) {
    $student = findStudentByCode($_GET["code"]);
        if($student == false){
            echo "Student not Found!";
        }
}
//in case you want to add a new student
if(isset($_POST['code'])) {
    $newStudent = [
        'code'=> $_POST["code"],
        'name' => $_POST['name'],
    ];
    storeNewStudentInfo($newStudent);
}


// start outbut buffering ---------------


head($title = "Student Info");

showForm_insertNewStudent();
showForm_getStudentCode();
showform_updatestudentinfo();
global $student;
if($student == true) {
    showForm_studentsInfo([$student]);
}else{
    if($student == false /* and showForm_insertNewStudent() == ""*/){
    // echo "Student not Found!";
    echo "<hr>";
    showForm_studentsInfo($allStudents);
}
}
footer();
