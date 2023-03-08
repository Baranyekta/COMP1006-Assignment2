create table students (
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(60) NOT NULL,
    student_description VARCHAR(150) NOT NULL,
    student_value VARCHAR(20),
    student_email VARCHAR(160) NOT NULL,
    student_birthday DATE NOT NULL
);