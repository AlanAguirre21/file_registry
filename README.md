# file_registry
Web application designed as a file manager to digitize, organize, and classify physical documents in a centralized and efficient manner.

## Description
FileRegistry is a web solution designed to centralize and organize scattered documents. It allows you to categorize files, view them in interactive tables, and manage an efficient digital repository.

## Features
- Organization of documents by categories
- Visualization in interactive tables
- Search and filtering system
- Intuitive and responsive interface

## Technologies Used
- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript
- **Editor**: Sublime Text

## Installation

### Prerequisites
- Apache
- MySQL
- PHP 7.0 or higher
- jQuery 3.7.1

### Installation Steps

1. **Clone or download the repository**
```bash
   git clone https://github.com/AlanAguirre21/file_registry.git
   cd file_registry
```

2. **Configure the database**
   - Create a database in MySQL
   - Import the database structure file (if it exists)
   - Edit the `conexionBD.php` file with your MySQL server credentials:
```php
     $host = "localhost";
     $user = "your_user";
     $password = "your_password";
     $database = "database_name";
```

3. **Place files on the Apache server**
   - Copy all project files to Apache's `htdocs` folder

4. **Verify dependencies**
   - Ensure that jQuery 3.7.1 is included in the project

5. **Access the application**
   - Open your browser and navigate to `http://localhost`

## Usage

### Accessing the Application

1. **Create a user account**
   - On the login screen, select the registration option
   - Complete the required information and create your user

2. **Log in**
   - Enter your username and password

### Main Features

#### Category Management
- Access the **"Categories"** section
- Create new categories to organize your documents
- Categories are displayed in a table where you can edit or delete them

#### Document Management
- Go to the **"Administration"** section
- Upload documents using the upload form
- Assign each document to a specific category
- Documents are organized in a table for easy viewing

#### Viewing and Downloading
- In the documents table, you can **view** files directly
- You can also **download** files to your computer

## Status
Completed

## Author
Alan Haziel Aguirre García
