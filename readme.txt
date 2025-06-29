localhost/phpMyAdmin

✅ Step 1: Create the Database
Open phpMyAdmin or your MySQL terminal and run:

CREATE DATABASE my_restaurant;




You can also do this via phpMyAdmin > New > Database Name: my_restaurant > Create

✅ Step 2: Create the Table
After creating the database, select my_restaurant and run:



CREATE TABLE contact_messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(150) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);