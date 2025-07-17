# 💳 Basic Banking System

A simple full-stack web application built during a Web Development Internship at Exposys Data Labs (Summer 2021).  
The system allows users to transfer money between accounts, view balances, and track transaction history.

---

## 🔧 Tech Stack

- **Frontend**: HTML, CSS, JavaScript, Bootstrap  
- **Backend**: PHP  
- **Database**: MySQL

---

## 📦 Features

- View all users and their account details (name, email, current balance)
- Select users to initiate secure money transfers
- Record all transfers with timestamps in a transaction history table
- Structured UI flow:  
  `Home → View Users → Select User → Transfer Money → View History`

---

## 🗃️ Database Schema

**1. Users Table**  
- Fields: `id`, `name`, `email`, `current_balance`

**2. Transaction Table**  
- Fields: `id`, `sender`, `receiver`, `amount`, `timestamp`

---

## 🚀 Project Highlights

- Designed and implemented full CRUD functionality using PHP and MySQL
- Reduced SQL query time by ~60% using primary keys and optimized joins
- Tested with 10+ simulated users for relational consistency and data integrity
