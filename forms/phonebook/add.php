<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =$_POST['course name'];

        $code =$_POST['course code'];

            if(!empty($name)&& !empty($code)) {
                $sql= "INSERT INTO courses (course_name, course_code) VALUES ('$name', '$code')";

                if($conn->query($sql)=== TRUE) {
                    echo "New course added successfully!";
                } else {
                    echo "Failed to add new course.";
                }
            } else {
                echo "Please fill in all fields.";
            }
    }
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width, initial-scale=1.8">
        <title>Add New Course</title>
    </head>
    <body>
        <h2> Add a New Course</h2>

        <form method = "post" action="add.php">
            Course Name: <input type="text" name="course name"><br><br>
            Code: <input type="text" name="course code"><br><br>

            <input type="submit" value ="Add Course">
        </form> 
        <a href="index.php">Back to Subjects</a>
    </body>
</html>