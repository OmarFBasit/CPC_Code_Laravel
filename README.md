# Project Details
I have made a simple Laravel project of two pages. The following image shows the web route of the Laravel project.


![This is an image](readme_image/1.png)


I have created two functions inside HomeController. The user will enter the default page through a function. And another function will calculate the user's data.


![This is an image](readme_image/2.png)

- These calculation data have been transferred to the home page. The following image shows the home page UI.

![This is an image](readme_image/3.png)

- Take the input field for the operand and the selection field for the operator. The operator selection options are shown in detail in the image below.

![This is an image](readme_image/7.png)


- And the result is the output page.

![This is an image](readme_image/4.png)

## And another example is given below.

![This is an image](readme_image/5.png)

![This is an image](readme_image/6.png)


# Author

[Omar Faruk](https://www.linkedin.com/in/omar-f-basit/)


# Installation
- Clone your project
- Go to the folder application using cd command on your cmd or terminal
- Run composer install on your cmd or terminal
- Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu
Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.(**The database is not used in this project so the database name should not be changed.**)

- Run php artisan key:generate
- Run php artisan migrate (If use DB)
- Run php artisan serve
- Go to http://localhost:8000/