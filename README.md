# Blog Post App

In this project I built a blog post app using Laravel 7 which allows visitors of the website to comment on the post specified by the admin and to reply to the comments made by others for that post.
There is a special route for the admin to allow for creating and deleting posts. Technologies used for this project include Laravel Eloquent (ORM) for the relationship between the tables, and MySQL.
For the front-end view, blade template was used and for building the database schema, migrations were used. For building the Laravel project, Artisan Console which is a Laravel CLI was used.
Below are snapshots of the project.

##### Comment Page
#
![Blog Post App](Assets/BlogPost2.PNG)
##### Admin page
![Blog Post App](Assets/BlogPost.PNG)

## Instructions

1. Download XAMPP or WAMP.
2. Set the environment variables in the .env file including the name of your desired database in the Laravel project.
3. run **php artisan migrate**.
4. run **php artisan serve**.

You can now access the project at localhost:8000.

## Usage
This app can be used for posting topics and commenting on them.

## Tests
This app was tested manually.

## Future
More Laravel features such as Laravel authentication for user login is planned to be added.
