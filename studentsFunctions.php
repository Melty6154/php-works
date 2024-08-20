<?php

// two more functions, one stores new students and the other finds the student if given a student code.
function storeNewStudentInfo($student)
{
    global $allStudents;
    // if('code'<254){
    //     array_unshift($allStudents, 'code');
    // }
    // $newstudents = array("");
    $allStudents[$student['code']] = $student;
    // $newstudents[$student['code']] = $student;
    // array_merge($newstudents, $allStudents);
    // array_push($allStudents, $student['code']);
}

function findStudentByCode($code)
{
    global $allStudents;
    if(isset($allStudents[$code])) {
        return $allStudents[$code];
    }

    return false;
}