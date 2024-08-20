<?php

// functions related to all the students including the codes and functions used to insert new students
function showForm_getStudentCode()
{
    ?>
    
    <form action="/studentInfo.php">
       <div style="border: 1px solid #888; border-radius: 10px; padding: 10px;">
        <h4>Find Student Info</h4>
            Student Code: <input type="text" name="code"  value="<?php echo $_GET["code"] ?? "" ?>">
        <br>
        <input type="submit" value="Get Data">
       </div>
    </form> 
    <?php
}

function showForm_insertNewStudent(){
    global $allStudents;
    global $student;
    $code = $_POST["code"];
    $name = $_POST["name"];
    if(in_array($_POST["code"], $allStudents)){
        echo "Student already Exists!";
    }
    
    ?>
    
    <form action="/studentInfo.php" method="post">
       <div style="border: 1px solid #888; border-radius: 10px; padding: 10px;">
        <h4>Store New Student Info</h4>
        Student Code: <input type="text" name="code"  value="<?php echo $code ?? "" ?>">
        Student Name: <input type="text" name="name"  value="<?php echo $name ?? "" ?>">
        <br>
        <input type="submit" value="Add New Student">
       </div>
    </form>    
    
    <?php
    
    
    
}
function showform_updatestudentinfo(){
    global $student;
    global $allStudents;
    $code = $_POST["code"];
    $name = $_POST["name"];
    if(in_array($code, $allStudents)){
        echo "";
    }
    //else{
    //echo "Student not in database";
    //}


?>
    <form action="/studentinfo.php" method="post">
        <div style="border: 1px solid #888; border-radius: 10px; padding: 10px;">
            <h4>Update Student Info</h4>
            Update Student Code: <input type="text" name="code" value="<?php echo $code ?? "" ?> ">
            Update Student Name: <input type="text" name="name" value="<?php echo $name ?? "" ?> ">
            <br>
            <input type="submit" value="Update Student">
        </div>
    </form>    
<?php 
}
function showForm_studentsInfo($students, $message = "")
{
    if($message != "") {
        echo "<h4>$message</h4>" ;
    }

    ?>

    <div>
        <table>
            <tr>
                <th>Code</th>
                <th>Name</th>
            </tr>
            <?php
            foreach($students as $student) {
                ?>
            <tr>
                <td><?php  echo $student['code'] ?></td>
                <td><?php  echo $student['name'] ?></td>
            </tr>
            <?php
            }
    ?>
        </table>
    </div>
    <?php
}
