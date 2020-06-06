## About this project

This project was made for the purpose of a technical challenge during a recruiting process. 
It includes nearly all the features required by the directions except the priority update on drag'n drop change. It required more implementation/time and I found the directions a bit unclear about how the priority should be calculated. 

Please, have in mind that the code produced here was made according the time limit I was given to fulfill this challenge (1h) and therefore doesn't reflect how I'd code in a real working situation. 

It was made completely from scrach without any external library (except jQuery). Feel free to check the commit history to get to know how things were implemented.

I'll eventually complete this project in the future.

## Directions 

Create a very simple Laravel web application for task management: -Create task (info to save: task name, priority, timestamps) -Edit task -Delete task -Reorder tasks with drag and drop in the browser. Priority should automatically be updated based on this. #1 priority goes at top, #2 next down and so on. -Tasks should be saved to a mysql table.

BONUS POINT: add project functionality to the tasks. User should be able to select a project from a dropdown and only view tasks associated with that project.

You will be graded on how well-written & readable your code is, if it works, and if you did it the Laravel way.

## Install

```
composer install
```

Create a new local database and rename the '.env.example' file into '.env'. Don't forget to also update it according your local database configuration.

Run base migrations and then the server

```
php artisan migrate
php artisan serve
```

Project will then be accessible through http://localhost:8000/

