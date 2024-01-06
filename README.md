# ERP-System

## How to set up the project in my local environment.

Setting up a local environment for a PHP and MySQL-based ERP system involves a few steps. Here's a basic idea of how to set up and run the project:

Install a Local Server - Here I Used a local server environment XAMP. 

Project Directory - Create a new directory in my local server's web directory (htdocs in XAMPP).

Database Setup - Import the provided database dump (SQL file) into my MySQL server using phpMyAdmin. Ensure that my database credentials in my PHP files match my MySQL server setup.

PHP Configuration - Verify PHP version and configuration settings. Ensure compatibility with my ERP system.

Make sure I have included Bootstrap, CSS, and JavaScript files in my project. 

Testing - Opened my web browser and navigated to http://localhost/my_project_directory. Verify that the project runs without errors.

Run the Project - Access different pages of your ERP system and test functionalities. Ensure that data retrieval, insertion, update, and deletion work as expected.

## Overview

This ERP system is designed to efficiently manage customer and item data, along with comprehensive invoice and reporting functionalities. The system is built using PHP for server-side scripting and MySQL for database management. Frontend components are developed with HTML, Bootstrap, CSS, and JavaScript.

## Assumptions

Database Import - The provided SQL dump file should be imported into a MySQL server to set up the necessary database schema and initial data.

Browser Compatibility - The system assumes users are accessing the application via modern web browsers with JavaScript enabled.

## Functionality

Customers Module - The system enables the registration and management of customer data, including titles, names, contact numbers, and associated districts.

Items Module - Users can register and view item details, including item codes, names, categories, subcategories, quantities, and unit prices.

Reports Module - Comprehensive invoicing capabilities are provided, allowing users to create and view invoices with associated customers, items, quantities, and amounts. Here generated report is displayed in the table format. The system supports reporting functionalities with three specific reports: Invoice Report, Invoice Item Report, and Item Report (Shown in the table format).

## Usage
Users can navigate through the various modules using the provided interfaces(left side bar).
Data validation is implemented in the forms to ensure accurate input.

