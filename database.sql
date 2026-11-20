-- ===================================================
-- Database: college
-- Table: students
-- Description: SQL script to create the database and table
-- ===================================================

-- 1. Create the database if it doesn't already exist
CREATE DATABASE IF NOT EXISTS college;

-- 2. Select the database to use
USE college;

-- 3. Create the 'students' table
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    branch VARCHAR(50) NOT NULL,
    address TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
