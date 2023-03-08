<?php

require_once("./connect.php");        

    $sql = "SELECT 
        id, student_name, student_description, student_value, student_email, student_birthday 
    FROM 
        students
    WHERE
        id = :id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_GET["id"], PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_OBJ);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Student</title>
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./new.php">New Student</a></li>
            </ul>
        </nav>
       
        <h1>Edit Student </h1>

        <form action="./update.php" method= "post">
            <input type="hidden" name="id" value="<?= $row->id ?>">
            <div>
                <label for="student_name">Name</label><br>
                <input type="text" name="student_name" value="<?= $row->student_name ?>">
            </div>

            <div>
                <label for="student_description">Description</label><br>
                <input type="text" name="student_description" value="<?= $row->student_description ?>">
            </div>

            <div>
                <label for="student_value">Value</label><br>
                <input type="text" name="student_value" value="<?= $row->student_value ?>">
            </div>

            <div>
                <label for="student_email">Student Email</label><br>
                <input type="email" name="student_email" value="<?= $row->student_email ?>">
            </div>

            <div>
                <label for="student_birthday">Date of Birth</label><br>
                <input type="date" name="student_birthday" value="<?= $row->student_birthday ?>">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </body>
</html>