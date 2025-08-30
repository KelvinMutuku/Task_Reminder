Task Reminder Application
A web-based task reminder application built with the Laravel framework and MongoDB. This project was developed by following a step-by-step tutorial on Laravel News, providing a great example of how to integrate a non-relational database with a modern PHP framework.

Project Description
This application serves as a simple task manager where users can create, view, and manage their tasks. Each task can be assigned a due date, acting as a reminder. The project demonstrates the power of using Laravel for the backend and MongoDB as the data store, which is particularly useful for flexible and scalable data schemas.

Features
Task Creation: Easily add new tasks with a title and due date.

Task Management: View a list of all tasks, including their details.

MongoDB Integration: Utilizes the jenssegers/laravel-mongodb package for seamless integration with a MongoDB database.

Laravel Backend: Leverages Laravel's robust routing, Eloquent-like models, and Blade templating for a clean and structured application.

Technologies Used
PHP

Laravel (Framework)

MongoDB (Database)

Composer (Dependency Management)

HTML5 & CSS3

Getting Started
Follow these steps to get a local copy of the project up and running on your machine.

Prerequisites
PHP 8.0+

Composer

MongoDB Server (running locally or a remote instance)

Installation
Clone the repository:

git clone [https://github.com/KelvinMutuku/Task_Reminder.git](https://github.com/KelvinMutuku/Task_Reminder.git)


Navigate to the project directory:

cd your-repository-name


Install PHP dependencies:

composer install


Configure your environment:
Copy the .env.example file to create your .env file.

cp .env.example .env


Open the .env file and configure your MongoDB connection.

# .env

DB_CONNECTION=mongodb
DB_HOST=127.0.0.1
DB_PORT=27017
DB_DATABASE=Task_Reminder_DB
DB_USERNAME=null
DB_PASSWORD=null


Run the application:
Start the Laravel development server.

php artisan serve


The application will be available at http://127.0.0.1:8000.
