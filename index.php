<?php
    $sql = "SELECT 
        id, student_name, student_description, student_value, student_email, student_birthday 
    FROM 
        students";

    require_once("./connect.php");        

    $rows = [];
    if ($conn) {
        $result = $conn->query($sql);
        $rows = $result->fetchAll(PDO::FETCH_OBJ);
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Students</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
        crossorigin="anonymous">    
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./new.php">New Student</a></li>
            </ul>
        </nav>
    <div class="container">
        <h1>Students </h1>
        <table>
            <thead>
                <tr>
                    <style>
                        th {
                            background-color: #f2f2f2;
                            border: 1px solid #ddd;
                            padding: 8px;
                            text-align: center;
                            font-size: 13px;
                            font-weight: bold;
                            text-transform: uppercase;
                        }
                        
                        ul {
                            list-style: none;
                            margin: 0;
                            padding: 0;
                            background-color: #f2f2f2;
                            border: 1px solid #ddd;
                            display: flex;
                            justify-content: space-between;
                            align-items: center;
                        }
            
                        li a {
                            display: block;
                            padding: 8px 16px;
                            color: #333;
                            text-decoration: none;
                            font-size: 16px;
                        }
  
                        li a:hover {
                            background-color: #ddd;
                        }

                    </style>

                    <ul>
                    <li><a href="./">Home</a></li>
                    <li><a href="./new.php">New Student</a></li>
                    </ul>
                        <th>ID </th> 
                        <th>Name </th> 
                        <th>Description </th> 
                        <th>Value </th> 
                        <th>Student Email </th> 
                        <th>Date of Birth </th> 
                        <th>Actions </th> 
                </tr>
            </thead>
            
            <tbody>
                <?php foreach($rows as $row): ?>
                    <tr>
                        <td><?= $row->id ?></td>
                        <td><?= $row->student_name ?></td>
                        <td><?= $row->student_description ?></td>
                        <td><?= $row->student_value ?></td>
                        <td><?= $row->student_email ?></td>
                        <td><?= $row->student_birthday ?></td>
                        <td>
                            <a href="edit.php?id=<?= $row->id ?>">Edit</a>
                            <a href="delete.php?id=<?= $row->id ?>"onclick="return confirm('Are you sure you want to delete forever?')">Delete</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
    </body>
</html>