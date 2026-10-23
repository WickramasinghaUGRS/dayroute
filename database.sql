CREATE DATABASE IF NOT EXISTS dayroute_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE dayroute_db;

DROP TABLE IF EXISTS nature_places;

CREATE TABLE nature_places (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    opening_hours VARCHAR(100) DEFAULT NULL,
    ticket_price VARCHAR(100) DEFAULT NULL
);

INSERT INTO nature_places (title, opening_hours, ticket_price) VALUES 
('Kotmale Dam', '9.00 AM - 6.00 PM', NULL),
('Kadiyanlena Ella Falls', NULL, 'Free Entry'),
('Galpoththa Ella Falls', NULL, 'Free Entry'),
('Peradeniya Botanical Garden', '7.30 AM - 6.00 PM', 'Rs.300.00');
