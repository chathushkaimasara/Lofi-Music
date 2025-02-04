# Lofi-Music

Launched website doesnt support php so after you download it to the ht docs on xampp,

Open http://localhost/phpmyadmin/ in your browser.
Click on "New" > Name the database user_db.
Run the following SQL query to create a users table:

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
);
