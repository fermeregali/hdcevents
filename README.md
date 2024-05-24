# HDC Events

Welcome to **HDC Events**, an event management project developed with PHP and Laravel. This repository contains the source code for a web application that allows you to create and view events. The project uses various modern tools and resources such as XAMPP, MySQL, VSCode, Google Fonts, Bootstrap, and Ionicons.

## Table of Contents

- [Introduction](#introduction)
- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Running the Project](#running-the-project)
- [Technologies Used](#technologies-used)
- [Contribution](#contribution)

## Introduction

This project was developed in 2022 and serves as a practical example of how to create an events application using PHP and Laravel. The goal is to provide a starting point for developers who want to learn and apply these skills to their own projects.

## Prerequisites

Before you begin, make sure you have the following tools installed in your development environment:

- [XAMPP](https://www.apachefriends.org/index.html)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [Git](https://git-scm.com/)
- [Visual Studio Code (VSCode)](https://code.visualstudio.com/)

## Installation

Follow the steps below to set up and run the project locally:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/hdc-events.git
   cd hdc-events

2. Install PHP dependencies with Composer:

  ```bash
  composer install
  ```
  
3. Install Node.js dependencies:

 ```bash
  npm install
  ```

4. Set up the environment:

  Rename the .env.example file to .env and configure your environment variables, especially the database connection information.

   ```bash
  cp .env.example .env
  ```
  Generate the Laravel application key:
   ```bash
  php artisan key:generate
  ```

5. Create the database:

  Use phpMyAdmin (included with XAMPP) to create a database with the name you configured in the .env file.


6. Run the migrations:
 ```bash
  php artisan migrate
  ```

Running the Project
To run the project locally, follow the steps below:

1. Start the XAMPP server:

  * Apache
  * MySQL

2. Start the Laravel development server:
 ```bash
  php artisan serve

  ```

3. Open your browser and go to http://localhost:8000.


Technologies Used
- PHP - Server-side programming language.
- Laravel - PHP framework for web development.
- XAMPP - Software package that includes Apache, MySQL, PHP, and Perl.
- MySQL - Database management system.
- VSCode - Source code editor.
- Google Fonts - Web font service.
- Bootstrap - CSS framework for responsive development.
- Ionicons - Icon library.

Contribution
Contributions are welcome! Feel free to open issues and pull requests. For major changes, please open an issue first to discuss what you would like to change.
