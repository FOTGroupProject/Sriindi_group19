# Sriindi E-Commerce Platform

[![Laravel](https://img.shields.io/badge/Laravel-10.x-red?logo=laravel)](https://laravel.com/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-blue?logo=mysql)](https://www.mysql.com/)
[![Blade](https://img.shields.io/badge/Blade-Templates-orange)](https://laravel.com/docs/10.x/blade)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-5-purple?logo=bootstrap)](https://getbootstrap.com/)
[![Livewire](https://img.shields.io/badge/Livewire-Enabled-brightgreen)](https://laravel-livewire.com/)
[![Chart.js](https://img.shields.io/badge/Chart.js-Integrated-yellow?logo=chart.js)](https://www.chartjs.org/)

A feature-rich e-commerce solution built with Laravel featuring an admin dashboard, product management, and real-time analytics.

---

## Tech Stack

- **Backend:** Laravel 10
- **Database:** MySQL
- **Frontend:** Blade Templates, Bootstrap 5
- **Interactivity:** Livewire
- **Charts:** Chart.js
- **Server:** PHP 8.1+

---

## Installation Guide

### Prerequisites

- PHP 8.1 or higher
- Composer 2.5+
- Node.js 18+
- MySQL 8.0+
- Git

### Setup Instructions

1. **Clone Repository**
    ```bash
    git clone https://github.com/FOTGroupProject/Sriindi_group19.git
    cd Sriindi_group19
    ```

2. **Install Dependencies**
    ```bash
    composer install
    npm install
    ```

3. **Configure Environment**
    ```bash
    cp .env.example .env
    ```
    Update database credentials in `.env`:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_db_name
    DB_USERNAME=your_db_user
    DB_PASSWORD=your_db_password
    ```

4. **Generate Application Key**
    ```bash
    php artisan key:generate
    ```

5. **Database Setup**
    ```bash
    php artisan migrate --seed
    php artisan storage:link
    ```

6. **Build Assets**
    ```bash
    npm run build
    ```

7. **Start Development Server**
    ```bash
    php artisan serve
    ```

---

## Admin Access

- **Email:** `admin@example.com`
- **Password:** `password123`

> **Important:** Change these credentials after your first login!

---

## Key Features

- Product Management (CRUD operations, categories, inventory)
- Financial Dashboard with Chart.js analytics
- Order & Purchase Tracking
- Admin Account Management (roles & permissions)
- Responsive UI (Bootstrap, Blade)
- Dynamic Interactivity (Livewire components)

---

## Troubleshooting

- **Missing Dependencies:**  
  Run `composer install && npm install`
- **Migration Issues:**  
  Check your `.env` database settings
- **Asset Loading:**  
  Run `php artisan storage:link`
- **Livewire Components:**  
  Clear cache with `php artisan view:clear`

---

## Chart.js Integration

Ensure Chart.js is loaded in your Blade templates:
