# Error Monitor System

## Goals of the Project
1. Easy to use
2. Easy to deploy
3. Multiple log levels
4. Organize errors by project and assign projects to user groups
5. Email notifications for critical errors
6. Option to save the solution for an error
7. Show potential error fixes based on your committed solutions (using AI and ElasticSearch)

## Deployment
1. Clone the project
2. Run `composer install` and `npm install`
3. Run `php artisan migrate` to execute the migrations
4. Run `php artisan serve`
