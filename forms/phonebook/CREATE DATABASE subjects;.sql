CREATE DATABASE subjects;
use subjects;

CREATE TABLE courses (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    course_name VARCHAR(100) NOT NULL,
    course_code VARCHAR(100) NOT NULL
);