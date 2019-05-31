# laravel new project_name
# composer install
--- Install all required libraries from composer --
--- it update in the composer.json file ---

# composer update
--- this comment is used to update the required libraries from composer---

# View terminals (View ->  terminals)

# robots.txt 
--- it used for google SEO (Search enging optimization) --
--- to hide some information in out application ---


# LARAVEL COMMAND (using Terminals to execute the below command)
--- php artisan serve : First the ping the public/index.php file ---
--- php artisan route:list : this command is use to see the available routes file  ---
--- php artisan make:controller controllername : use this command to create the controller.--



# Controller file 
app/http/controller file availabel

# MVC (Model View Controller)

Model       : (app/)
Views       : (resource/views)
Controllers : (app/http/controller)


# blade
--- blade is template engine html --
--- save all file with .blade.php formate (ex: aboutus.blade.php) --
--- write php code easy in blade template ---
ex: 
@if($user)
    <h2> Hi user {{ $user->username  }} </h2>
@else
        <h2> Hi Guest</h2>
@endif

# @extends('layouts.app') 
--- include layouts/app.blade.php content in any page using this command


# Database Migration, Model Creation, Table Creation  and Controller creation.
1, Set configuration setting in .env file.

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=attendance // database name 
    DB_USERNAME=root // user name
    DB_PASSWORD=

2,  Run the  php artisan migrate command ---- 

    ERROR : " PDOException::("SQLSTATE[42000]: Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes") ""
    To Solve the above error. Add the below step in the AppServiceProvider.php(app/providers/AppServiceProvider.php). 
    add namespace   ----- use Illuminate\Support\Facades\Schema;
    add this command  in the boot funciton  -------- Schema::defaultStringLength(191);

3,  Creating table using Laravel migrate command (database/migrations)
    
    php artisan make:migration create_posts_table    ------- command is used to create table. posts is table name
    php artisan migrate                              ------- command will execute changes made in the migration file.
    php artisan migrate:refresh (not use always)     ------- command will roll back all of your migrations and then execute the  migrate command. This command effectively re-creates your entire database:
    php artisan migrate:reset (not use always)       ------- command will roll back all of your application's migrations.
    php artisan migrate:rollback                     ------- command will roll back last entire in the migration table.

4, Creating model in Laravel Application (apps/)

    php artisan make:model modelname       ------   Command is used to create Model file.



5, Creating controller file  in Laravel Application (apps/http/controllers)

    php artisan make:controller controllername                 ------   Command is used to create controller file.
    php artisan make:controller controllername --resource      ------   Command is used to create controller file with default Curd method.













# important Points
1, Laravel doesn't work in offline mode
2, REST API : Status code information 




# GIT 
1, Press F1 in visual studio to open seach panel
2, Use git clone command to download file in another machine.
    ex: create new folder ...open the cmd on that folder use the below comment 
    git clone https://github.com/vinothkumarselvam/laravelcode.git