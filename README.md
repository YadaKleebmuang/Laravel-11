# 🎓 Laravel Learning Hub — Eloquent ORM & Authentication Demo
Laravel Learning Hub is a comprehensive Laravel 10 web application demonstrating authentication, Eloquent ORM relationships, database operations, and CRUD functionality.
It serves as an educational scaffold for learning Laravel's core features and best practices.
---
## 🚀 Features
* 🔐 User Authentication (Register / Login / Logout)
* 👤 Profile Management (CRUD operations with image upload)
* 🔗 Eloquent Relationships Demo (One-to-One, One-to-Many, Many-to-Many)
* 🗄️ Database Joins (Inner, Left, Right, Full Outer)
* 📝 Post Management (Basic CRUD)
* 🧪 Unit + Feature Tests for core functionalities
* 🛡 Protected Routes with Authentication Middleware
---
## 🏗 Tech Stack
* **Backend:** PHP 8.1+, Laravel 10.x
* **Auth:** Laravel Sanctum for API authentication
* **Database:** MySQL
* **Frontend:** Blade Templates, Tailwind CSS, Vite
* **Packages:** laravel/sanctum, guzzlehttp/guzzle, laravel/tinker
* **Dev tooling:** phpunit, laravel/pint, spatie/laravel-ignition
---
## 📂 Project Structure
```
app/
  Http/Controllers/
    AuthenController.php     → Custom authentication controller
    ProfileController.php    → Profile CRUD operations
    EloquentController.php   → Eloquent relationships demo
    JoinController.php       → Database joins demonstration
    PostController.php       → Basic post management
database/
  migrations/
    create_users_table.php
    create_students_table.php
    create_teachers_table.php
    create_programmers_table.php  → One-to-One with projects
    create_projects_table.php
    create_books_table.php        → One-to-Many with programmers
    create_roles_table.php
    create_role_users_table.php   → Many-to-Many pivot
    create_profile_table.php      → Profile management
resources/
  views/
    auth/                        → Login/register templates
    profiles/                    → Profile CRUD views
    welcome.blade.php            → Landing page
    home.blade.php               → Dashboard
routes/
  web.php                       → Main application routes
  api.php                       → Sanctum API routes
tests/
  Feature/                      → Feature tests for auth and profiles
  Unit/                         → Unit tests
```
---
## 🧠 Project Concept
A comprehensive learning platform for Laravel developers to understand:
* Authentication workflows and security
* Eloquent ORM relationships and database design
* CRUD operations with file uploads
* Database query optimization with joins
* API development with Sanctum
* Testing strategies for Laravel applications
---
## 📌 Current Progress
* ✅ Phase 1: User Authentication complete
* ✅ Phase 2: Profile Management complete
* ✅ Phase 3: Eloquent Relationships (1:1, 1:M, M:M) complete
* ✅ Phase 4: Database Joins demonstration complete
* ✅ Phase 5: Basic CRUD operations complete
* 🚧 Phase 6: Advanced features (API expansion, admin panel) in planning

