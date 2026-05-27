CREATE DATABASE todo_app;
USE todo_app;

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100)
);

CREATE TABLE tasks(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    user_id INT
);

INSERT INTO users(username)
VALUES ('Martin'), ('Peter');

INSERT INTO tasks(title, user_id)
VALUES ('Nakúpiť', 1);
