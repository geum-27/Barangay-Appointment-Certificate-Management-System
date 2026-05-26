-- ====================================================================
-- DATABASE TIER: SCHEMA BLUEPRINT FOR BARANGAY 25 J.P. RIZAL
-- ====================================================================

CREATE DATABASE IF NOT EXISTS barangay_management_db;
USE barangay_management_db;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('Resident', 'Staff') NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS residents (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT UNIQUE,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    middle_name VARCHAR(50),
    suffix VARCHAR(10),
    household_id VARCHAR(50) NOT NULL,
    contact_number VARCHAR(15) NOT NULL,
    complete_address TEXT NOT NULL,
    privacy_consent TINYINT(1) DEFAULT 0 NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS certificate_types (
    id INT AUTO_INCREMENT PRIMARY KEY,
    type_name VARCHAR(100) NOT NULL UNIQUE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS appointment_statuses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status_name VARCHAR(20) NOT NULL UNIQUE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS appointments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    reference_number VARCHAR(20) NOT NULL UNIQUE, -- Standard Layout: BGY-YYYY-XXX
    resident_id INT NOT NULL,
    certificate_type_id INT NOT NULL,
    status_id INT NOT NULL DEFAULT 1, -- Defaults to 'Pending' row ID
    scheduled_date DATE NOT NULL,
    purpose TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (resident_id) REFERENCES residents(id) ON DELETE CASCADE,
    FOREIGN KEY (certificate_type_id) REFERENCES certificate_types(id),
    FOREIGN KEY (status_id) REFERENCES appointment_statuses(id)
) ENGINE=InnoDB;

-- INITIAL SEEDS
INSERT INTO certificate_types (type_name) VALUES 
('Barangay Clearance'), ('Certificate of Residency'), ('Business Clearance'), ('Certificate of Indigency')
ON DUPLICATE KEY UPDATE type_name=type_name;

INSERT INTO appointment_statuses (status_name) VALUES 
('Pending'), ('Approved'), ('Completed')
ON DUPLICATE KEY UPDATE status_name=status_name;

INSERT INTO users (username, password_hash, role) VALUES 
('admin_staff', '$2y$10$Z3U5aDdlZGVtb3Bhc3N3b3JkaGFzaDk5OQ==', 'Staff')
ON DUPLICATE KEY UPDATE username=username;