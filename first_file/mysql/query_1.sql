CREATE DATABASE laravel;
USE laravel;

CREATE TABLE users (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  phone VARCHAR(20) NOT NULL
);

INSERT INTO users (name, email, phone) VALUES
('John Smith', 'john.smith@example.com', '01711111111'),
('Emma Johnson', 'emma.johnson@example.com', '01722222222'),
('Michael Brown', 'michael.brown@example.com', '01733333333'),
('Sarah Davis', 'sarah.davis@example.com', '01744444444'),
('David Wilson', 'david.wilson@example.com', '01755555555');

SELECT * FROM users;

SELECT * FROM jobs;


INSERT INTO users (name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES
('John Smith', 'john.smith@example.com', NOW(), 'password123', NULL, NOW(), NOW()),
('Emma Johnson', 'emma.johnson@example.com', NOW(), 'password123', NULL, NOW(), NOW()),
('Michael Brown', 'michael.brown@example.com', NULL, 'password123', NULL, NOW(), NOW()),
('Sarah Davis', 'sarah.davis@example.com', NOW(), 'password123', 'aB3xY7zQpL9mK2nR5tWv', NOW(), NOW()),
('David Wilson', 'david.wilson@example.com', NOW(), 'password123', NULL, NOW(), NOW());


INSERT INTO jobs (queue, payload, attempts, reserved_at, available_at, created_at) VALUES
('default', '{"uuid":"a1b2c3d4-e5f6-7890-abcd-ef1234567890","displayName":"App\\Jobs\\SendWelcomeEmail","job":"Illuminate\\Queue\\CallQueuedHandler@call","maxTries":3,"data":{"commandName":"App\\Jobs\\SendWelcomeEmail","command":"O:25:\\"App\\\\Jobs\\\\SendWelcomeEmail\\":1:{}"}}', 0, 1, 1, 1),
('emails', '{"uuid":"b2c3d4e5-f6a7-8901-bcde-f12345678901","displayName":"App\\Jobs\\SendInvoiceEmail","job":"Illuminate\\Queue\\CallQueuedHandler@call","maxTries":5,"data":{"commandName":"App\\Jobs\\SendInvoiceEmail","command":"O:26:\\"App\\\\Jobs\\\\SendInvoiceEmail\\":1:{}"}}', 1, 2, 2, 2),
('default', '{"uuid":"c3d4e5f6-a7b8-9012-cdef-123456789012","displayName":"App\\Jobs\\ProcessImageUpload","job":"Illuminate\\Queue\\CallQueuedHandler@call","maxTries":3,"data":{"commandName":"App\\Jobs\\ProcessImageUpload","command":"O:27:\\"App\\\\Jobs\\\\ProcessImageUpload\\":1:{}"}}', 0, 3, 3, 3),
('notifications', '{"uuid":"d4e5f6a7-b8c9-0123-defa-234567890123","displayName":"App\\Jobs\\NotifyAdmin","job":"Illuminate\\Queue\\CallQueuedHandler@call","maxTries":3,"data":{"commandName":"App\\Jobs\\NotifyAdmin","command":"O:18:\\"App\\\\Jobs\\\\NotifyAdmin\\":1:{}"}}', 2, 4, 4, 4),
('default', '{"uuid":"e5f6a7b8-c9d0-1234-efab-345678901234","displayName":"App\\Jobs\\GenerateReport","job":"Illuminate\\Queue\\CallQueuedHandler@call","maxTries":3,"data":{"commandName":"App\\Jobs\\GenerateReport","command":"O:21:\\"App\\\\Jobs\\\\GenerateReport\\":1:{}"}}', 0, 5, 5, 5);


DROP DATABASE laravel;



-- without migration
CREATE TABLE products (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  category VARCHAR(100) NOT NULL,
  price DECIMAL(10,2) NOT NULL,
  stock_quantity INT UNSIGNED NOT NULL,
  is_active TINYINT NOT NULL DEFAULT 1,
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

INSERT INTO products (name, category, price, stock_quantity, is_active) VALUES
('Wireless Mouse', 'Electronics', 19.99, 150, 1),
('Bluetooth Headphones', 'Electronics', 49.99, 80, 1),
('Yoga Mat', 'Fitness', 24.50, 200, 1),
('Stainless Steel Water Bottle', 'Fitness', 15.75, 300, 1),
('Office Chair', 'Furniture', 129.99, 40, 1),
('Standing Desk', 'Furniture', 249.00, 25, 1),
('Notebook Set', 'Stationery', 8.99, 500, 1),
('Ceramic Coffee Mug', 'Kitchen', 12.30, 120, 1),
('Non-Stick Frying Pan', 'Kitchen', 34.99, 60, 0),
('LED Desk Lamp', 'Electronics', 22.00, 90, 1);

SELECT * FROM products;



CREATE TABLE student (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  batch VARCHAR(50) NOT NULL
);

INSERT INTO student (name, email, batch) VALUES
('John Smith', 'john.smith@example.com', '2018'),
('Emma Johnson', 'emma.johnson@example.com', '2019'),
('Michael Brown', 'michael.brown@example.com', '2020'),
('Sarah Davis', 'sarah.davis@example.com', '2019'),
('David Wilson', 'david.wilson@example.com', '2021');

SELECT * FROM student;
RENAME TABLE student TO students;
RENAME TABLE students TO college_students;
RENAME TABLE college_students TO students;
SELECT * FROM students;


DROP TABLE users;
CREATE TABLE users (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  phone VARCHAR(20) NOT NULL
);

INSERT INTO users (name, email, phone) VALUES
('Olivia Martinez', 'olivia.martinez@example.com', '01766666666'),
('James Anderson', 'james.anderson@example.com', '01777777777'),
('Sophia Taylor', 'sophia.taylor@example.com', '01788888888'),
('William Thomas', 'william.thomas@example.com', '01799999999'),
('Isabella Moore', 'isabella.moore@example.com', '01700000000');

SELECT * FROM users;


CREATE TABLE student2 (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  phone VARCHAR(20) NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
);


INSERT INTO student2 (name, email, phone, created_at, updated_at) VALUES
('John Smith', 'john.smith@email.com', '+1-555-123-4567', '2024-01-15 10:30:00', '2024-01-15 10:30:00'),
('Emma Johnson', 'emma.johnson@email.com', '+1-555-234-5678', '2024-01-16 14:20:00', '2024-01-16 14:20:00'),
('Michael Brown', 'michael.brown@email.com', '+1-555-345-6789', '2024-01-17 09:15:00', '2024-01-17 09:15:00'),
('Sarah Davis', 'sarah.davis@email.com', '+1-555-456-7890', '2024-01-18 16:45:00', '2024-01-18 16:45:00'),
('James Wilson', 'james.wilson@email.com', '+1-555-567-8901', '2024-01-19 11:00:00', '2024-01-19 11:00:00'),
('Maria Garcia', 'maria.garcia@email.com', '+1-555-678-9012', '2024-01-20 13:30:00', '2024-01-20 13:30:00'),
('Robert Martinez', 'robert.martinez@email.com', '+1-555-789-0123', '2024-01-21 08:45:00', '2024-01-21 08:45:00'),
('Jennifer Lee', 'jennifer.lee@email.com', '+1-555-890-1234', '2024-01-22 15:10:00', '2024-01-22 15:10:00'),
('David Taylor', 'david.taylor@email.com', '+1-555-901-2345', '2024-01-23 12:25:00', '2024-01-23 12:25:00'),
('Lisa Anderson', 'lisa.anderson@email.com', '+1-555-012-3456', '2024-01-24 17:50:00', '2024-01-24 17:50:00'),
('William Thomas', 'william.thomas@email.com', '+1-555-123-4560', '2024-01-25 09:40:00', '2024-01-25 09:40:00'),
('Patricia Jackson', 'patricia.jackson@email.com', '+1-555-234-5671', '2024-01-26 14:55:00', '2024-01-26 14:55:00'),
('Charles White', 'charles.white@email.com', '+1-555-345-6782', '2024-01-27 10:05:00', '2024-01-27 10:05:00'),
('Barbara Harris', 'barbara.harris@email.com', '+1-555-456-7893', '2024-01-28 16:35:00', '2024-01-28 16:35:00'),
('Thomas Martin', 'thomas.martin@email.com', '+1-555-567-8904', '2024-01-29 11:50:00', '2024-01-29 11:50:00'),
('Nancy Thompson', 'nancy.thompson@email.com', '+1-555-678-9015', '2024-01-30 13:15:00', '2024-01-30 13:15:00'),
('Daniel Garcia', 'daniel.garcia2@email.com', '+1-555-789-0126', '2024-01-31 08:30:00', '2024-01-31 08:30:00'),
('Susan Miller', 'susan.miller@email.com', '+1-555-890-1237', '2024-02-01 15:40:00', '2024-02-01 15:40:00'),
('Matthew Moore', 'matthew.moore@email.com', '+1-555-901-2348', '2024-02-02 12:55:00', '2024-02-02 12:55:00'),
('Karen Robinson', 'karen.robinson@email.com', '+1-555-012-3459', '2024-02-03 17:20:00', '2024-02-03 17:20:00');

SELECT * FROM student2;

-- for seeding
CREATE TABLE members (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  address VARCHAR(255) NOT NULL
);



-- for eloquent relationship topic
CREATE TABLE sellers (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL
);

CREATE TABLE products (
  id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  price DECIMAL(10, 2) NOT NULL,
  seller_id BIGINT UNSIGNED NOT NULL,
  created_at TIMESTAMP NULL DEFAULT NULL,
  updated_at TIMESTAMP NULL DEFAULT NULL,
  FOREIGN KEY (seller_id) REFERENCES sellers(id)
);

INSERT INTO sellers (id, name, email, created_at, updated_at)
VALUES
(11, 'Anil', 'anil@test.com', NOW(), NOW()),
(12, 'Sam', 'sam@test.com', NOW(), NOW()),
(13, 'Rahim', 'rahim@test.com', NOW(), NOW());


INSERT INTO products (name, price, seller_id, created_at, updated_at)
VALUES
('Samsung', 1000, 11, NOW(), NOW()),
('Walton', 5000, 11, NOW(), NOW()),
('Symphony', 6000, 11, NOW(), NOW()),
('Iphone', 300, 12, NOW(), NOW()),
('Oppo', 400, 13, NOW(), NOW());


SELECT * FROM sellers;
DROP table products;
DROP table products2;
SELECT * FROM products;

DELETE FROM products
WHERE id = 4;


