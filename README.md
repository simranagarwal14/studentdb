🎓 Student Portal Website (PHP + MySQL)
A complete PHP and MySQL-based web application that allows users to register, log in, and manage student records through an easy-to-use dashboard.
________________________________________
🧩 Features
•	User authentication system
o	Registration and Login using PHP sessions
o	Password hashing for secure login
•	Student Management Dashboard
o	Add new students
o	Edit, Delete, and View student records
o	Search bar for quick filtering
•	Additional pages
o	About page
o	Header and footer for consistent layout
•	Fully functional CRUD operations (Create, Read, Update, Delete)
•	Organized, beginner-friendly PHP and MySQL code
________________________________________
⚙️ Requirements
•	XAMPP (or any PHP + MySQL environment)
•	PHP version 7.4 or higher
•	MySQL database
•	Web browser (Chrome, Edge, Firefox, etc.)
________________________________________
🧠 Installation
1.	Clone this repository:
2.	git clone https://github.com/yourusername/student_portal.git
3.	cd student_portal
4.	Move the folder to your XAMPP htdocs directory:
5.	C:\xampp\htdocs\student_portal
6.	Create a new database in phpMyAdmin:
7.	CREATE DATABASE student_db;
8.	Create the following tables:
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
9.	Start XAMPP Services:
o	Apache
o	MySQL
10.	Access the project in your browser:
11.	http://localhost/student_portal/
________________________________________
🖥️ Usage
1.	Open the site and register a new user.
2.	Log in using your credentials.
3.	Add, edit, delete, or search student records from the dashboard.
4.	View the about section for project details.
5.	Log out safely when done.
________________________________________
📂 Project Structure
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
________________________________________
🧬 How It Works
•	The website uses PHP to handle server-side logic and MySQL to store user and student data.
•	The login system manages sessions to keep users authenticated.
•	CRUD operations are handled via SQL queries.
•	The dashboard dynamically loads data from the database using mysqli_fetch_assoc().
________________________________________
💡 Notes
•	Ensure your XAMPP services (Apache & MySQL) are running.
•	If you face any “URL not found” errors, check that all files are in the same directory (htdocs/student_portal).
•	Always create the dept column in the students table to avoid SQL errors.
•	Works perfectly offline — no internet connection needed.

