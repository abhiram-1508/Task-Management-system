# Task-Management-system
It is a tool or methodology designed to help individuals and teams organize, track, and manage tasks effectively. It involves planning, assigning, and monitoring tasks to ensure they are completed efficiently and on time, ultimately contributing to the achievement of goals and project completion. 

A modern, responsive **Task Management Web Application** built with **PHP**, **MySQL**, **HTML/CSS**, and **Bootstrap**. This system allows users to manage their daily tasks efficiently with options to add, update, delete, and track progress.

---

 📌 Project Features

- 🔐 **User Registration and Login**
- ✅ **Dashboard with Task Summary**
- ➕ **Add New Tasks**
- ✏️ **Edit and Delete Tasks**
- 📅 **Set Due Dates**
- 🔄 **Track Task Status** (Pending, In Progress, Completed)
- 📊 **Visual Task Statistics**
- 📁 Clean UI with a sidebar and rainbow-themed status badges
- 🚪 **Logout Functionality**

---

---

## ⚙️ Setup Instructions

### ✅ Requirements

- PHP 7.x or later
- MySQL / MariaDB
- XAMPP / WAMP / LAMP stack

---

### 🚀 How to Run the Project Locally

1. **Download or Clone this Repository**  

2. **Move the Project Folder to XAMPP**  
Place it inside:  
`C:\xampp\htdocs\`

3. **Start Apache and MySQL via XAMPP Control Panel**

4. **Create the Database**
- Go to [phpMyAdmin](http://localhost/phpmyadmin)
- Create a new database:  
  ```sql
  CREATE DATABASE task_management;
  ```
- Import the tables:
  ```sql
  -- Users Table
  CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL
  );

  -- Tasks Table
  CREATE TABLE tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task_name VARCHAR(255) NOT NULL,
    priority ENUM('Low', 'Medium', 'High') NOT NULL,
    due_date DATE NOT NULL,
    status ENUM('pending', 'inprogress', 'completed') NOT NULL
  );
  ```

5. **Update DB Credentials in `db.php`**
```php
$conn = new mysqli("localhost", "root", "", "task_management");
6.Open the App in Browser





