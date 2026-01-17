# Laravel Web Application – Assignment

## 1. Overview
- Framework: Laravel 9
- Language: PHP 8.x
- Database: MySQL
- Tools: Composer, XAMPP, PhpStorm
- Architecture: MVC (Model – View – Controller)

---

## 2. Objectives
- Build a web application using Laravel
- Apply MVC architecture
- Connect and work with MySQL database
- Implement basic CRUD functionality

---

## 3. System Architecture
- **Model**: Handles database logic
- **Controller**: Handles business logic
- **View**: User interface using Blade templates

---

## 4. Project Structure
```bash
app/
├── Http/Controllers/ # Controllers
├── Models/ # Models
database/
├── migrations/ # Database migrations
resources/
├── views/ # Blade views
routes/
└── web.php # Web routes
```
---

## 5. Database
- DBMS: MySQL
- Database configuration via `.env`

Example table: `products`

| Field | Type |
|------|------|
| id | int |
| name | string |
| price | decimal |
| description | text |
| created_at | timestamp |
| updated_at | timestamp |

---

## 6. Main Features
- Display data list
- Create new records
- Update existing records
- Delete records
- MySQL database integration

---

## 7. Installation & Run

### Step 1: Install dependencies
```bash
composer install
```
### Step 2: Environment setup
```bash
cp .env.example .env
php artisan key:generate
```
### Step 3: Database migration
```bash
php artisan migrate
```
### Step 4: Run application
```bash
php artisan serve
```

Access the application:
```bash
http://127.0.0.1:8000
```
