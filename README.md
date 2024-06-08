# E-commerce Web Developer Exam
## Overview
This project implements an order management system for an e-commerce platform. The purpose of the project is to allow users to place orders from their shopping cart and manage those orders efficiently.

## Installation

### Prerequisites
Before you begin, ensure you have met the following requirements:

    PHP (version 7.4 or higher)
    Composer
    Node.js and npm
    MySQL or SQLite database

### Steps
1. Clone the repository:
```bash
git clone https://github.com/arif-hidyawan/ecommerce-app.git
```
2. Navigate to the project directory:
```bash
cd ecommerce-app
```
3. Install PHP dependencies using Composer:
```bash
composer install
```
4. Install JavaScript dependencies using npm:
```bash
npm install
```
5. Set up your environment file:
 - Copy the example environment file: .env.example to .env.
 - Modify .env file according to your environment settings.
6. Generate application key:
```bash
php artisan key:generate
```
7. Run database migrations:
```bash
php artisan migrate
```
9. 
