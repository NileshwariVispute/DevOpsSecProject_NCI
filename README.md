Hotel-Booking-System (Elastic Beanstalk URL : http://devopssec.us-east-1.elasticbeanstalk.com/)

About system
*************************************************************************************************************************************
This application built in PHP, HTML, and CSS and MYSQL used as a database.

*************************************************************************************************************************************
***How To Run The Project on local machine***

Pre-requisites :
1.Clone the respository from URL "https://github.com/NileshwariVispute/DevOpsSecProject_NCI.git" or download the ZIP file.
2.Install PHP.
3.Install Xampp.

*************************************************************************************************************************************
***Steps to follow***
STEP I   : To run this project,XAMPP installation is mandatory on your system.
STEP II  : After Starting Apache and MySQL in XAMPP, follow the steps from step III.
STEP III : Extract the ZIP file which was downloaded from git. 
STEP IV  : Copy the project folder
STEP V   : Paste your project folder in xampp/htdocs/
STEP VI  : Import the database.sql file into phpMyAdmin
After creating database 
STEP VII : Open a browser and Run using URL "http://localhost/DevOpsSecProject_NCI"

*************************************************************************************************************************************


*** How to deploy the project on Public cloud***

Pre-requisites : 
1.AWS account.
2.Mysql Workbench. 
3.git installation.
4.Clone the respository from URL "https://github.com/NileshwariVispute/DevOpsSecProject_NCI.git" 

*************************************************************************************************************************************
***Steps to follow***

STEP I    : Create elastic beanstalk environment with sample application using PHP platform
STEP II   : Create RDS instance for MYSQL using standard create and make it publically accessible. Copy the endpoint of an instance and paste in 'config.php'.Also put the same endPoint in mysql workbench and import databsase.sql file there.
STEP III  : Push the cloned code in your personal respository.
STEP IV   : Go to the AWS CodePipeline Service
STEP V    : Connect the pipeline with your GitHub repository
STEP VI   : For Build stage select AWS Code Build and select then click on create project in AWS CodePipeline
STEP VII  : Select host provider as AWS elastic beanstalk in AWS CodePipeline
STEP VIII : Select the AWS elastic beanstalk environment
STEP IX   : Create AWS CodePipeline 
STEP X    : Click on URL Of elastic beanstalk, and your application is successfully deployed.

*************************************************************************************************************************************