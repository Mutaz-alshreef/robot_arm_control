# Robot Arm Control

A project for controlling a robotic arm through a web interface that sends commands to move the arm and perform different operations.


---
## 📋 Description

This project is a robotic arm control system, allowing users to control the arm via a simple and user-friendly web interface.  
Commands are sent to the server which communicates with the physical device.


---
## ⚙️ Requirements

- PHP 7.4 or higher  
- A web server like Apache or Nginx with PHP support  
- MySQL or MariaDB database  
- Modern web browser (Chrome, Firefox, Edge)


---
## 🛠️ Database Setup

1. Create a new database, e.g., `robot_arm_db`.  
2. Execute the provided `database.sql` file to create necessary tables:

   ```sql
   CREATE TABLE commands (
       id INT AUTO_INCREMENT PRIMARY KEY,
       command VARCHAR(255) NOT NULL,
       status TINYINT(1) DEFAULT 0,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
 

3. Adjust database connection settings in db.php according to your setup:
```php
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "robot_arm_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
```
---
## 🚀 Running the Project

1. Place the project files inside your web server's root folder (e.g., htdocs for XAMPP).

2. Open your browser and navigate to: http://localhost/robot_arm_control/ (or your project path).

3. The control interface will load for operating the robotic arm.

---
## 🧩 Project Structure

robot_arm_control/
│
├── index.php
├── db.php
├── process_command.php
├── database.sql
├── style.css
└── js/
    └── main.js

---
## Result
<img width="1892" height="811" alt="لقطة شاشة 2025-07-19 192435" src="https://github.com/user-attachments/assets/a8ada121-7443-43ef-a8ae-415f1b86ee43" />

---
<img width="1891" height="878" alt="لقطة شاشة 2025-07-19 192454" src="https://github.com/user-attachments/assets/4d9e2220-325c-4f9d-8fbc-eaa48bed22dc" />

---
<img width="1897" height="949" alt="لقطة شاشة 2025-07-19 192511" src="https://github.com/user-attachments/assets/cb005434-7d21-4272-96f7-5b4211d1d8f2" />

---

## 👨‍💻 Usage

Open the control page in your browser.

Use buttons or controls to send commands to move the robotic arm.

Commands are stored in the database and executed by the connected system.

---
## 🛡️ Security Notes
Protect the control page with passwords or access restrictions before deploying online.

Avoid using default database credentials.

Validate all user input before saving or processing.

