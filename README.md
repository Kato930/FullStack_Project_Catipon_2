# Full Stack Project - Catipon

This is my final project for the Full Stack activity. It's a simple "Vector Vault" system where users can register, log in, and see a list of other members. 

## What's inside?
* **Login/Register**: A glassmorphism style page for user access.
* **Dashboard**: Shows user stats (name length, level, system load).
* **User List**: A table that pulls all the registered users from the database.
* **Backend**: Done with PHP and PDO.
* **Database**: MySQL (I've included the .sql file).

## How to make it work
1. Open XAMPP and start Apache and MySQL.
2. Go to phpMyAdmin and create a database called `user_system`.
3. Import the `user_system.sql` file that is in this folder.
4. Put the whole folder in your `htdocs`.
5. Open your browser and go to: `http://localhost/FullStack_Project_Catipon/index.php`

## Note for the Prof
- The "User List" button is on the main dashboard after you log in.
- I used Tailwind CSS for the dashboard and registry pages.
- For the sensitive info requirement, I'm using the default 'root' and no password so it works on any local XAMPP setup.