# E-commerce Web Developer Exam
## Overview
This project implements an order management system for an e-commerce platform. The purpose of the project is to allow users to place orders from their shopping cart and manage those orders efficiently.

## Installation

### Prerequisites
Before you begin, ensure you have met the following requirements:

- PHP (version 7.4 or higher)
- Composer
- Node.js and npm
- MySQL or SQLite database

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

## API Endpoints
| Method | URL | Description | Request Parameters (if any) | Example Response |
| ------------- | ------------- | ------------- | ------------- | ------------- |
| POST  | /api/orders/place | Place an order from the cart | { "user_id": 1, "total_price": 50.00, "items": [{ "id": 1, "name": "Product 1", "price": 25.00 }, { "id": 2, "name": "Product 2", "price": 25.00 }] } | { "message": "Order placed successfully", "order": { "id": 1, "user_id": 1, "total_price": 50.00, "status": "pending", "created_at": "2024-06-09 10:00:00", "updated_at": "2024-06-09 10:00:00" } } | 
| GET | /api/orders  | Get all orders placed by the user | - | [ { "id": 1, "user_id": 1, "total_price": 50.00, "status": "pending", "created_at": "2024-06-09 10:00:00", "updated_at": "2024-06-09 10:00:00" }, { "id": 2, "user_id": 1, "total_price": 80.00, "status": "shipped", "created_at": "2024-06-08 15:30:00", "updated_at": "2024-06-08 15:45:00" } ] |


This README.md file provides an overview of the project, installation instructions, API endpoints documentation, and any additional setup required. Please refer to this documentation for guidance on running the project locally and understanding its functionalities.
