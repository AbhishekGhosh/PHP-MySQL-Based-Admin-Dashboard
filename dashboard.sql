CREATE DATABASE dashboard;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE settings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    setting_key VARCHAR(50),
    setting_value TEXT,
    FOREIGN KEY (user_id) REFERENCES users(id)
);
