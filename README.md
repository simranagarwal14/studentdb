# 🎓 Student Portal Website (PHP + MySQL)

A complete PHP and MySQL-based web application that allows users to **register, log in, and manage student records** through an easy-to-use dashboard.

---

## 🧩 Features

- **User Authentication System**
  - Registration and Login using PHP sessions  
  - Password hashing for secure login  

- **Student Management Dashboard**
  - Add new students  
  - Edit, Delete, and View student records  
  - Search bar for quick filtering  

- **Additional Pages**
  - About page  
  - Header and footer for consistent layout  

- **Fully functional CRUD operations (Create, Read, Update, Delete)**  
- **Organized, beginner-friendly PHP and MySQL code**

---

## ⚙️ Requirements

- XAMPP (or any PHP + MySQL environment)  
- PHP version **7.4 or higher**  
- MySQL database  
- Web browser (Chrome, Edge, Firefox, etc.)

---

## 🧠 Installation

1. **Clone this repository:**
   ```bash
   git clone https://github.com/yourusername/student_portal.git
   cd student_portal
Move the folder to your XAMPP htdocs directory:

makefile
Copy code
C:\xampp\htdocs\student_portal
Create a new database in phpMyAdmin:

sql
Copy code
CREATE DATABASE student_db;
Create the following tables:

🧾 users
Column	Type	Attributes
id	INT	AUTO_INCREMENT, PRIMARY KEY
username	VARCHAR(100)	UNIQUE
password	VARCHAR(255)	

🧾 students
Column	Type	Attributes
student_id	INT	AUTO_INCREMENT, PRIMARY KEY
name	VARCHAR(100)	
dept	VARCHAR(100)	
email	VARCHAR(100)	

Start XAMPP Services:

Apache

MySQL

Access the project in your browser:

arduino
Copy code
http://localhost/student_portal/
🖥️ Usage
Open the site and register a new user.

Log in using your credentials.

Add, edit, delete, or search student records from the dashboard.

View the about section for project details.

Log out safely when done.

📂 Project Structure
pgsql
Copy code
student_portal/
├── about.php
├── add_student.php
├── dashboard.php
├── delete_student.php
├── edit_student.php
├── login.php
├── logout.php
├── register.php
├── search.php
├── styles.css
└── db_connection.php
🧬 How It Works
The website uses PHP to handle server-side logic and MySQL to store user and student data.

The login system manages sessions to keep users authenticated.

CRUD operations are handled via SQL queries.

The dashboard dynamically loads data from the database using mysqli_fetch_assoc().

💡 Notes
Ensure your XAMPP services (Apache & MySQL) are running.

If you face any “URL not found” errors, check that all files are in the same directory (htdocs/student_portal).

Always create the dept column in the students table to avoid SQL errors.

Works perfectly offline — no internet connection needed.

👩‍💻 Author
