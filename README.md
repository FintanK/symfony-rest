Symfony REST API Example
========================

This application provides a skeleton application and reference for creating a rest API with Symfony 2.5.
It returns both JSON and XML depending on the content type set in each request to the endpoints.

1) Install dependencies with composer
----------------------------------

If you don't have Composer yet, download it following the instructions on
http://getcomposer.org/ or just run the following command in this projects root directory:

    curl -s http://getcomposer.org/installer | php

Then, use the `create-project` command to generate a new Symfony application:

    php composer.phar install


2) Checking your System Configuration
-------------------------------------

Before starting coding, make sure that your local system is properly
configured for Symfony.

Execute the `check.php` script from the command line:

    php app/check.php

The script returns a status code of `0` if all mandatory requirements are met,
`1` otherwise.

Access the `config.php` script from a browser:

    http://localhost/path-to-project/web/config.php

If you get any warnings or recommendations, fix them before moving on.

3) Run the migrations using Doctrine and populate demo data using the fixtures bundle
----------------------

Create the database

    app/console doctrine:database:create
    
Generate the schema

    app/console doctrine:schema:create
    
Generate example data using the fixtures

    app/console doctrine:fixtures:load
   


3) Run the application using the built in development server
-------------------------

    app/console server:run 127.0.0.1:8080


4) Test
--------------

    bin/phpunit -c app/ src
    
5) Useful Commands
--------------------

View all available routes

    app/console router:debug 
    
Clear cache (dev)

    app/console cache:clear --env=dev
    
 



