# Employee Management System
![GitHub license](https://img.shields.io/badge/license-MIT-blue.svg)

A simple Employee Management System built with Laravel and Bootstrap.

## Table of Contents

- [Description](#description)
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Contributing](#contributing)

## Description

The Employee Management System is a web application built with Laravel, a popular PHP framework, and styled using Bootstrap for a clean and professional look. It allows users to manage employee data, such as names, registration numbers, and roles. The system provides basic CRUD (Create, Read, Update, Delete) operations for employees.

## Features

- Add new employees with their details (name, registration number, role).
- View a list of existing employees with their data.
- Edit the details of an employee.
- Delete an employee from the system.
- Input validation to ensure data integrity.
- Flash messages to provide user feedback on successful operations.
- Responsive design for seamless usage on various devices.

## Installation

1. Prerequisites:
     - Ensure that you have PHP and Composer installed on your PC. You can download PHP from the official website (https://www.php.net/downloads.php) and Composer from https://getcomposer.org/download/.
       
2. Clone the Repository:
    - Open a terminal or command prompt on your PC.
    - Navigate to the directory where you want to install the project.
    - Clone the repository using the following command:
      
       ```bash
       git clone https://github.com/ankitDogra/PHP-CRUD.git
        ```
3. Install dependencies using Composer:
   - Change into the project directory:
     
       ```bash
        cd PHP-CRUD
       ```
    - Install the required dependencies using Composer:
      
      ```bash
      composer install
      ```
4. Set Up the Database:
    - Create a new MySQL database for the project.
    - In the project root directory, rename the .env.example file to .env:
      
       ```bash
        cp .env.example .env
        ```
    - Open the .env file in a text editor and update the following lines with your database credentials:

      ```makefile
        DB_CONNECTION=mysql
        DB_HOST=your_database_host
        DB_PORT=your_database_port
        DB_DATABASE=your_database_name
        DB_USERNAME=your_database_username
        DB_PASSWORD=your_database_password
       ```
5. Generate Application Key:

    - Generate a new application key for your project:

       ```bash
        php artisan key:generate
       ```
6. Run the Development Server:

    - Start the built-in development server:
      
       ```bash
       php artisan serve
       ```
    - You should see a message like "Laravel development server started on http://localhost:8000".


That's it! You should now have the PHP CRUD application up and running on your PC. The user can access the application through the provided URL (http://localhost:8000) and start using it to perform CRUD operations on data.

Please note that these instructions assume that the user has access to a MySQL database server. If they are using a different database server, they should update the .env file accordingly.

Additionally, if the user wants to deploy the application to a production environment, they should consider using a web server like Apache or Nginx, as well as properly securing the environment and database credentials.


## Usage
```vbnet
1. Access the application in your web browser at `http://localhost:8000`.

2. Use the navigation to add, view, edit, and delete employees.

3. Fill in the required fields to add a new employee. Make sure to enter a unique registration number.

4. Click the "Edit" button in the "Actions" column to modify an employee's details.

5. Click the "Delete" button in the "Actions" column to remove an employee from the system.
```
## Contributing

Contributions are welcome! If you find any bugs or have suggestions for improvement, feel free to create an issue or submit a pull request.
