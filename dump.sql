-- Create database with proper character set and collation
CREATE DATABASE IF NOT EXISTS android
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

-- Use the created database
USE android;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phoneno VARCHAR(20)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create product table
CREATE TABLE IF NOT EXISTS product (
    productid INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(255) NOT NULL,
    category VARCHAR(100),
    subcate VARCHAR(100),
    price DECIMAL(10,2) NOT NULL,
    pic VARCHAR(255),
    description TEXT,
    producer VARCHAR(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create wishlist table
CREATE TABLE IF NOT EXISTS wishlist (
    wishid INT AUTO_INCREMENT PRIMARY KEY,
    wishdate DATE NOT NULL,
    productid INT NOT NULL,
    id INT NOT NULL,
    quantity INT DEFAULT 1,
    FOREIGN KEY (productid) REFERENCES product(productid),
    FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create buylist table
CREATE TABLE IF NOT EXISTS buylist (
    buyid INT AUTO_INCREMENT PRIMARY KEY,
    buydate DATE NOT NULL,
    deliverydate DATE,
    id INT NOT NULL,
    productid INT NOT NULL,
    bought BOOLEAN DEFAULT TRUE,
    quantity INT DEFAULT 1,
    israted BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (productid) REFERENCES product(productid),
    FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create review table
CREATE TABLE IF NOT EXISTS review (
    reviewid INT AUTO_INCREMENT PRIMARY KEY,
    id INT NOT NULL,
    productid INT NOT NULL,
    star INT NOT NULL CHECK (star BETWEEN 1 AND 5),
    description TEXT,
    day DATE NOT NULL,
    FOREIGN KEY (productid) REFERENCES product(productid),
    FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Create message table
CREATE TABLE IF NOT EXISTS message (
    messageid INT AUTO_INCREMENT PRIMARY KEY,
    id INT NOT NULL,
    sentbyuser BOOLEAN DEFAULT TRUE,
    date DATETIME NOT NULL,
    text TEXT NOT NULL,
    isseen BOOLEAN DEFAULT FALSE,
    isseenuser BOOLEAN DEFAULT FALSE,
    FOREIGN KEY (id) REFERENCES users(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Add indexes for better performance
CREATE INDEX idx_product_category ON product(category);
CREATE INDEX idx_buylist_user ON buylist(id);
CREATE INDEX idx_wishlist_user ON wishlist(id);
CREATE INDEX idx_review_product ON review(productid);