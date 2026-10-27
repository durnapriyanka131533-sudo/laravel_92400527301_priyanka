# Laravel Student Data Insertion Example

This package contains the code snippets for inserting student data into a MySQL database in Laravel.

## Requirements
- PHP and Composer
- MySQL / phpMyAdmin
- A Laravel project

## 1. Configure the database
Create a MySQL database named `student_db`, then set these values in your Laravel project's `.env` file:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=student_db
DB_USERNAME=root
DB_PASSWORD=
```

Change username/password if your MySQL setup requires it.

## 2. Add the files to your Laravel project
Copy the included files into the matching paths shown in the ZIP:
- `app/Models/Student.php`
- `app/Http/Controllers/StudentController.php`
- `routes/web.php`
- `resources/views/students/create.blade.php`
- `database/migrations/2026_01_01_000000_create_students_table.php`

**Important:** If Laravel already has a migration that creates the `students` table, do not run a second migration for the same table. You can instead update your existing students migration.

## 3. Run commands
From the root folder of your Laravel project:

```bash
php artisan migrate
php artisan serve
```

Open `http://127.0.0.1:8000`.

Fill in Name, Email, and Course, then click **Insert Data**. The submitted record is saved to the `students` table.

## Notes
- The form includes Laravel's `@csrf` token.
- The controller validates inputs and rejects duplicate email addresses.
- This ZIP contains the needed example source files, not the Laravel framework itself. Add these files to a Laravel project created with Composer.
