# Blog App

A simple blog application built with Laravel. This project is designed to demonstrate basic functionalities such as CRUD operations for posts and authentication.

## Features
- User authentication (registration, login, logout)
- Create, read, update, and delete blog posts
- Post management (title, content, etc.)
- Simple and intuitive UI

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/youssefelzahar/blog-app.git
   
2. Navigate to the project directory:
cd blog-app

4. Install dependencies:
composer install

5. Install dependencies:
cp .env.example .env

6. Generate the application key:
php artisan key:generate

Set up the database configuration in the .env file.

7. Run migrations to create the necessary database tables:
php artisan migrate

8.Serve the application:
php artisan serve

Technologies Used
PHP
Laravel
MySQL
Blade (Laravel templating engine)
Contributing
Feel free to fork the repository, submit pull requests, or create issues to contribute to the project.

License
This project is licensed under the MIT License - see the LICENSE file for details.
