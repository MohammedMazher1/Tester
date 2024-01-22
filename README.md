# Tester - Education Platform

Welcome to Tester,

## Project Overview

Tester offers a cutting-edge solution for educators in the field of education. Our specialized platform is designed to streamline the process of managing tests in training camps, providing a digital environment for both trainers and students.

### Key Features

- **Digital Test Preparation:** Trainers can effortlessly prepare pre and post-tests with digital questions and answers, creating a seamless and efficient testing experience.

- **Scheduled Testing:** The platform allows trainers to set specific times for conducting tests, simplifying the evaluation of the learning process.

- **Automated Grading:** Our system automatically grades students' tests, ensuring accurate and efficient assessment of their performance.

- **Secure Grade Storage:** Grades are securely stored within the platform, providing a reliable record of student performance.

- **Progress Evaluation:** Students can revisit tests after completing the educational course to track their progress and understand areas of improvement.

## How It Works

1. Trainers prepare digital tests with ease.
2. Students access tests within the specified time on the Laravel platform.
3. The Laravel-based system automatically grades tests and securely stores results.

## Laravel Setup

To get started with Tester in a Laravel environment, follow these steps:

```bash
# Clone the repository
git clone https://github.com/MohammedMazher1/Tester.git

# Navigate to the project directory
cd Tester

# Install Laravel dependencies
composer install

# Copy the .env.example file and configure your database connection
cp .env.example .env


# database : you will find the sql file for the project in TesterDB folder;
#import the sql file to create the project database 
# admin email : muhmmed711300411@gmail.com , password : 0776533887;
#and other users the password is the phone number 

# Serve the application
php artisan serve
