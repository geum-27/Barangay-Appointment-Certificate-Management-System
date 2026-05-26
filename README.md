### Barangay Appointment & Certificate Management System

## 📌 Project Description
The Barangay Appointment & Certificate Management System is a web-based platform that allows residents to book appointments, request certificates, and manage transactions with the barangay efficiently. It also provides staff dashboard tools for processing and tracking requests.

---

## Features
- Resident login system
- Appointment booking system
- Certificate request module
- Staff dashboard management
- Reference number generator
- Database-driven architecture

---

### Setup Instructions

### Requirements
- PHP 8+
- MySQL
- XAMPP / WAMP / Laragon

### 1. Clone the repository
```bash
git clone https://github.com/geum-27/Barangay-Appointment-Certificate-Management-System.git
```

### 2. Navigate to project folder
```bash
cd Barangay-Appointment-Certificate-Management-System
```

### 3. Move project to web server directory
Place inside:
```
XAMPP → htdocs
```

### 4. Import database
- Open phpMyAdmin  
- Create database (if needed)  
- Import:
```
database/schema.sql
```

### 5. Run the system
Open browser:
```
http://localhost/Barangay-Appointment-Certificate-Management-System/public/
```

## 👥 Team Members
Morillon, Geuel — Lead Developer / QA
Godiz, Kenly — Project Manager
Sato, Mirai — Business Analyst
Abejay, Franz Jedd — UI/UX Designer

## 📁 Project Structure
public/ → Frontend entry points
src/ → Backend logic modules
database/ → SQL schema
css/js/ → Assets
docs/ → Documentation

## Notes
Uses feature branching workflow
Commit messages follow conventional format
Built for Software Engineering Lab Worksheet 10 submission
System developed for Software Engineering Lab Worksheet 10 submission
Version note: Final submission prepared for Lab Worksheet 10

## Code Quality Evidence (Sample Implementations)

This section demonstrates that the system follows professional coding standards, proper structure, and documented implementation practices.

The following snippets demonstrate backend architecture, database handling, and system logic following professional coding standards.

---


## 1. Database Connection (Singleton Pattern)
### Purpose: 

```php

Ensures only one database connection instance exists across the system.

// Establish secure database connection using PDO
class DatabaseConnection {
    private static $instance = null;
    private $conn;

    private function __construct() {
        try {
            $this->conn = new PDO(
                "mysql:host=localhost;dbname=barangay_db",
                "root",
                "",
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }

    // Ensure only one instance exists (Singleton Pattern)
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }
}
```


## 2. Appointment Reference Number Generator
### **Purpose:**
```php

Generates unique tracking reference numbers for each appointment.

// Generate unique reference number for appointment tracking
$currentYear = date('Y');
$prefix = "BGY-" . $currentYear . "-";

// Fetch latest reference number
$query = "SELECT reference_number FROM appointments 
          WHERE reference_number LIKE :prefix 
          ORDER BY id DESC LIMIT 1";

$stmt = $db->prepare($query);
$stmt->execute(['prefix' => $prefix . '%']);
$lastRecord = $stmt->fetch();

// Compute next sequence number
if ($lastRecord) {
    $parts = explode('-', $lastRecord['reference_number']);
    $nextNumber = intval(end($parts)) + 1;
} else {
    $nextNumber = 1;
}

// Format final reference number
$referenceNumber = $prefix . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);
```

## 3. Dashboard Statistics Query (Admin View)
### **Purpose:**
```SQL

Displays real-time appointment summary for staff dashboard.

// Retrieve dashboard statistics
$query = "SELECT 
            COUNT(*) as total_appointments,
            SUM(CASE WHEN status = 'pending' THEN 1 ELSE 0 END) as pending,
            SUM(CASE WHEN status = 'approved' THEN 1 ELSE 0 END) as approved,
            SUM(CASE WHEN status = 'completed' THEN 1 ELSE 0 END) as completed
          FROM appointments";

$stmt = $db->prepare($query);
$stmt->execute();
$stats = $stmt->fetch();
```


## 4. Frontend Form Validation (JavaScript)
### **Purpose:**
```JS

Prevents invalid appointment submissions from users.

// Validate appointment form before submission
function validateAppointmentForm() {
    let name = document.getElementById("name").value;
    let date = document.getElementById("appointment_date").value;

    if (!name || !date) {
        alert("Please complete all required fields.");
        return false;
    }

    let selectedDate = new Date(date);
    let today = new Date();

    if (selectedDate < today) {
        alert("Invalid date. Please select a future schedule.");
        return false;
    }

    return true;
}
```


## 5. Update Appointment Status (Admin Action)
### **Purpose:**
```PHP

Allows staff to approve or reject appointment requests.

// Update appointment status after staff review
$appointmentId = $_POST['id'];
$newStatus = $_POST['status'];

$query = "UPDATE appointments SET status = :status WHERE id = :id";
$stmt = $db->prepare($query);

$stmt->bindParam(':status', $newStatus);
$stmt->bindParam(':id', $appointmentId);

$stmt->execute();
```
