# journal-hosting-app
The Journal Hosting web app is a PHP-based application that allows users to create and manage personal journals online
# Journal Hosting Web App Documentation

Welcome to the documentation for the Journal Hosting web app. This document provides a comprehensive guide to the structure, components, and usage of this application.

## Table of Contents

1. [Overview](#overview)
2. [Project Structure](#project-structure)
3. [Key Components](#key-components)
   - [1. User.php](#1-userphp)
   - [2. Journal.php](#2-journalphp)
   - [3. EntryManager.php](#3-entrymanagerphp)
4. [Database Schema](#database-schema)
5. [Installation and Setup](#installation-and-setup)
6. [Usage Examples](#usage-examples)
7. [Contributing](#contributing)
8. [License](#license)

## Overview

The Journal Hosting web app is a PHP-based application that allows users to create and manage personal journals online. Users can register, log in, create multiple journals, and write and manage entries within these journals. The application follows a modular structure with key components handling user management, journal operations, and entry management.

## Project Structure

The project directory structure is organized to promote clarity and separation of concerns:

- **`/public`:** Contains PHP files for different pages (index.php, dashboard.php, etc.), the main CSS file (style.css), and the main JavaScript file (script.js).

- **`/src`:** Holds PHP source code. Each PHP class or logical component gets its own file.

- **`/database`:** Stores the SQLite database file (journals.db).

- **`README.md`:** Provides a quick start guide and project overview.

- **`LICENSE`:** Contains the MIT License for the project.

- **`.gitignore`:** Specifies files intentionally untracked by Git, including sensitive files like the database.

## Key Components

### 1. User.php

The `User.php` file contains the `User` class responsible for user-related operations:

- User registration
- User authentication (login)
- ...

### 2. Journal.php

The `Journal.php` file includes the `Journal` class handling journal-related functionalities:

- Creating new journals
- Managing privacy settings
- ...

### 3. EntryManager.php

The `EntryManager.php` file hosts the `EntryManager` class managing entry-related tasks:

- Creating and editing entries
- Retrieving entries for display
- ...

## Database Schema

The SQLite database (`journals.db`) follows this schema:

- **`users` Table:**
  - `id` (INTEGER, PRIMARY KEY)
  - `username` (TEXT, NOT NULL)
  - `password` (TEXT, NOT NULL)

- **`journals` Table:**
  - `id` (INTEGER, PRIMARY KEY)
  - `user_id` (INTEGER, FOREIGN KEY)
  - `name` (TEXT, NOT NULL)
  - `privacy` (TEXT, NOT NULL)
  - ...

- **`entries` Table:** (Add more tables as needed)

## Installation and Setup

To run the Journal Hosting web app locally, follow these steps:

1. Clone the repository:

    ```bash
    git clone https://github.com/georgeagbo/journal-hosting.git
    ```

2. Navigate to the project directory:

    ```bash
    cd journal-hosting
    ```

3. Create the database:

    ```bash
    sqlite3 database/journals.db
    ```

    Run the following SQL commands in the SQLite shell:

    ```sql
    -- Example SQL commands to create tables
    -- Modify based on your actual database structure

    CREATE TABLE users (
        id INTEGER PRIMARY KEY,
        username TEXT NOT NULL,
        password TEXT NOT NULL
    );

    CREATE TABLE journals (
        id INTEGER PRIMARY KEY,
        user_id INTEGER,
        name TEXT NOT NULL,
        privacy TEXT NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(id)
    );

    -- Add more tables as needed
    ```

4. Start a PHP development server:

    ```bash
    php -S localhost:8000
    ```

    Visit `http://localhost:8000` in your browser.

## Usage Examples

Here are some examples demonstrating how to use various features of the app:

1. **User Registration:**

   ...

2. **Creating a New Journal:**

   ...

3. **Adding an Entry:**

   ...

## Contributing

We welcome contributions from the community. Before contributing, please review our [Contribution Guidelines](CONTRIBUTING.md).

## License

This project is licensed under the [MIT License](LICENSE).
