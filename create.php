<?php

    require_once("./connect.php");

    $sql = "INSERT INTO students (
        student_name, 
        student_description, 
        student_value, 
        student_email, 
        student_birthday
        
    ) VALUES (
        :student_name, 
        :student_description, 
        :student_value, 
        :student_email, 
        :student_birthday
    )";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":student_name", $_POST["student_name"], PDO::PARAM_STR);
    $stmt->bindParam(":student_description", $_POST["student_description"], PDO::PARAM_STR);
    $stmt->bindParam(":student_value", $_POST["student_value"], PDO::PARAM_STR);
    $stmt->bindParam(":student_email", $_POST["student_email"], PDO::PARAM_STR);
    $stmt->bindParam(":student_birthday", $_POST["student_birthday"], PDO::PARAM_STR);
    $stmt->execute();

    header("Location: ./index.php");
?>