



CREATE TABLE registration (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    phone_number VARCHAR(15) NOT NULL,
    dob DATE NOT NULL,
    address VARCHAR(255) NOT NULL,
    joining_date DATE NOT NULL,
    sharing_type INT NOT NULL,
    payment_option VARCHAR(10) NOT NULL
);
