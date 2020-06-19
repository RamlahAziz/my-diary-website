# my-diary-website
A web application designed using html and css for its users to maintain a daily diary and publishing the entries as blogs.
## Screenshots
<img src="https://github.com/RamlahAziz/my-diary-website/blob/master/images/home.png" width="350">
<img src="https://github.com/RamlahAziz/my-diary-website/blob/master/images/logon.png" width="350">
<img src="https://github.com/RamlahAziz/my-diary-website/blob/master/images/settings.png" width="350">
<img src="https://github.com/RamlahAziz/my-diary-website/blob/master/images/contact-us.png" width="350">
<img src="https://github.com/RamlahAziz/my-diary-website/blob/master/images/about.png" width="350">
<img src="https://github.com/RamlahAziz/my-diary-website/blob/master/images/home-loggedin.png" width="350">
<img src="https://github.com/RamlahAziz/my-diary-website/blob/master/images/blog.png" width="350">


## BASIC IDEA:
-----------
To provide our user with the functionality to write diary entries which could be read by other users as a blog works.

## USED LANGUAGES:
-----------------
1. HTML
2. CSS
3. Php
5. MySQL
4. Javascript (Jquery) (Your browser must have enabled Jquery for the website to function properly)

## MAIN FOLDER:
-------
The main folder of the project is named ‘webpro’. This folder must be placed in the Wamp64/www directory if you have Wampserver or in ProgramFiles(x86)/Ampps/http or ProgramFiles(x86)/Ampps/www directory if you have AMPPS Stack

## CSS:
-------
1. Ensure calendarstyle.css and web.css are both in webpro  folder with all the php files

## IMAGES:
-------
Ensure images 394482-PCGX1X-951.jpg, Capture.jpg, Capture1.jpg, Capture2.jpg, Capture3.jpg, Capture4.jpg are in webpro/_____

## PRE REQUISITES:
---------------
1. To run the website you must have installed a local server such as Wampserver or AMPPS Stack. Ensure all services they provide are running such as Apache, mySQL, and PHPMyAdmin.
2. Wampserver version 3.1.3 and above are compatible.
3. PHPMyAdmin database must be created named ‘mediarydb’ with tables ‘signup’, ‘contact’ and ‘diaryentries’. SQL for creation of tables with required attributes is under.

## SQL FOR DATABASE:
-----------------
Run this sql file on phpmyadmin: localhost(1).sql .

## INTERNET CONNECTION:
-------------------
1. Jquery, font styles, and other icons are loaded from online sources, so not having a good internet connection may cause the website to load slowly or cause problems.
2 . The website runs on all browsers, but Google Chrome is recommended

## TO START:
------------------
The landing page of our website is guest.php . To start open the file guest.php in browser. We have 8 total php files. Their functionality is as follows:
1. guest.php : landing page
2. user.php : logged in user page
3. contact.php : to forward contact info into database from guest and user side
4. delete.php : to delete a user from database
5. diary.php : to add a diary entry
6. login.php : to log in to view user side
7. signout.php : to sign out of a logged in page
8. signup.php : to create a user
