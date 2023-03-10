# html_form
This html form takes input from web application and save data into database

1. The first steps in to creae a html page or html form which use can see to input the data, lets call it index.html
2. The second things is to create a server side php script which will allow user to save data into mysql database.


Follow the below steps:


mysql:

install mysql and login

1. install:
sudo apt update
sudo apt install mysql-server
sudo systemctl start mysql
sudo systemctl status mysql
sudo mysql_secure_installation

2. login:
sudo mysql -u root -p

3. create schema:
create database user_data;

CREATE TABLE users (   id INT(11) NOT NULL AUTO_INCREMENT,   name VARCHAR(50) NOT NULL,   email VARCHAR(100) NOT NULL,   mobile VARCHAR(20) NOT NULL,   PRIMARY KEY (id) );

===========================================================================================================================================================
Apache:

1. Install apache2
sudo apt install apache2
sudo systemctl status apache2
sudo systemctl start apache2
sudo systemctl enable apache2

===========================================================================================================================================================
PHP:

1. install php
sudo apt install php7.4-cli
sudo apt install libapache2-mod-php -y
