-- Create the database
CREATE DATABASE edm;

-- Use the database
USE edm;

-- Create Users table
CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(255) NOT NULL,
    pass VARCHAR(255) NOT NULL
);
