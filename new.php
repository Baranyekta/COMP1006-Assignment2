<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New Student</title>
    </head>

    <body>
        <nav>
            <ul>
                <li><a href="./">Home</a></li>
                <li><a href="./new.php">New Student</a></li>
            </ul>
        </nav>
       
        <h1>New Student </h1>

        <form action="./create.php" method= "post">
            <div>
                <label for="student_name">Name</label><br>
                <input type="text" name="student_name">
            </div>

            <div>
                <label for="student_description">Description</label><br>
                <input type="text" name="student_description">
            </div>

            <div>
                <label for="student_value">Value</label><br>
                <input type="text" name="student_value">
            </div>

            <div>
                <label for="student_email">Student Email</label><br>
                <input type="email" name="student_email">
            </div>

            <div>
                <label for="student_birthday">Date of Birth</label><br>
                <input type="date" name="student_birthday">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </body>
</html>