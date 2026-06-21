<h1 align="center">
  🎓 Student Hub
</h1>

<p align="center">
  A simple CRUD web application built with PHP and MySQL for managing student data.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8-blue?style=for-the-badge&logo=php">
  <img src="https://img.shields.io/badge/MySQL-Database-orange?style=for-the-badge&logo=mysql">
  <img src="https://img.shields.io/badge/Status-Completed-success?style=for-the-badge">
</p>

---

## ✨ About Project

This project is a simple student management application created as part of my journey in learning PHP and MySQL.

The application implements CRUD (Create, Read, Update, Delete) operations to manage student data through a simple and user-friendly web interface.

---

## 🚀 Features

* ➕ Add student data
* ✏️ Edit student data
* 🗑️ Delete student data
* 📋 Display student data
* 💾 Store data using MySQL database

---

## 🛠️ Built With

* PHP Native
* MySQL
* HTML5
* CSS3
* XAMPP

---

## 📂 Project Structure

```bash
student-hub/
│
├── koneksi.php
├── index.php
├── siswa.sql
└── README.md
```

---

## ⚙️ How to Run

1. Clone this repository:

```bash
git clone https://github.com/devilovers/student-hub.git
```

2. Move the project into the `htdocs` folder.

3. Start Apache and MySQL from XAMPP.

4. Import `siswa.sql` into phpMyAdmin.

5. Open your browser and visit:

```text
http://localhost/student-hub
```

---

## 🧾 Database

```sql
CREATE DATABASE sekolah;

USE sekolah;

CREATE TABLE siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    kelas VARCHAR(50),
    alamat TEXT
);
```

---

## 🎯 Learning Goals

* Understanding CRUD operations in PHP
* Learning database connectivity with MySQL
* Practicing form handling and data management
* Improving web development fundamentals

---

## 👩🏻‍💻 Author

**Nur Islami Sabila**

Frontend Developer & Informatics Student Candidate from Indonesia 🇮🇩

> "Learning by building, growing by creating."

---

⭐ If you like this project, don't forget to give it a star.
