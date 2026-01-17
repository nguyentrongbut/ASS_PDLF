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

Example table: `categories`

| Field | Type |
|------|------|
| id | int |
| name | string |
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
http://127.0.0.1:8000/categories
```
## Images
-- category
<img width="1911" height="886" alt="image" src="https://github.com/user-attachments/assets/f7d609f2-78b3-48ab-8985-74a97eb13669" />
<img width="1917" height="847" alt="image" src="https://github.com/user-attachments/assets/1b09e870-9d69-48f6-8f6c-afe7b6769fa4" />
<img width="1917" height="902" alt="image" src="https://github.com/user-attachments/assets/fcc963e6-56e6-482e-a526-71c2a52c4a4d" />
<img width="1918" height="892" alt="image" src="https://github.com/user-attachments/assets/3ffc093c-5f49-4758-9701-c4818bab23d1" />
<img width="1915" height="912" alt="image" src="https://github.com/user-attachments/assets/c6a68e7c-fb90-4245-8111-4ba7b374a3a4" />
<img width="1918" height="895" alt="image" src="https://github.com/user-attachments/assets/b6420f10-a193-4bb5-9182-d81ad151ce3b" />

-- product
<img width="1917" height="923" alt="image" src="https://github.com/user-attachments/assets/f258eb3b-61b2-4974-869a-7da0792d2f37" />
<img width="1918" height="907" alt="image" src="https://github.com/user-attachments/assets/9409c0a3-3055-4b80-ab9c-a192d07d4606" />
<img width="1917" height="895" alt="image" src="https://github.com/user-attachments/assets/6502d7ee-2473-4f8f-8866-ecd584938ff0" />
<img width="1918" height="908" alt="image" src="https://github.com/user-attachments/assets/ce2e98a4-b33a-4964-ad0b-bc44bfb2181f" />
<img width="1916" height="908" alt="image" src="https://github.com/user-attachments/assets/7a48119c-50c5-4f75-a172-c34fa77ba662" />
<img width="1917" height="911" alt="image" src="https://github.com/user-attachments/assets/e1955e2b-f6cb-4e94-a576-9b885ac6b402" />
<img width="1918" height="900" alt="image" src="https://github.com/user-attachments/assets/46068421-39ae-4001-b946-167d4c6ac18e" />












