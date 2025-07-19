CREATE DATABASE robot_arm;
USE robot_arm;

CREATE TABLE poses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    motor1 INT,
    motor2 INT,
    motor3 INT,
    motor4 INT,
    motor5 INT,
    motor6 INT
);

CREATE TABLE status (
    id INT PRIMARY KEY,
    run_status INT DEFAULT 0
);

INSERT INTO status (id, run_status) VALUES (1, 0);