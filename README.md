# Hang7e
CS306 - Database Systems Course Project


- [Introduction](#introduction)
- [Objectives](#objectives)
- [Installation and usage](#installation)
- [Games](#games)


## Introduction
- This is a project created for the CS 306 Database Systems course at Sabanci University. 
- The project is a simple website rendered in the server in which one can play Hangman and Word7e and see their points via the leaderboard.
- XAMPP's Apache module is used to host the website locally and MySQL is used as the database. The backend code is written in PHP and the frontend in HTML, CSS and vanilla JavaScript.

## Objectives
- Learn the basics of database design and implementation.
- Learn the basics of PHP.
- Learn the basics of HTML, CSS and JavaScript.

## Installation
1. Download and install XAMPP from [here](https://www.apachefriends.org/download.html). 
2. Start the Apache and MySQL modules in XAMPP.
3. Create a folder called hang7e inside the htdocs folder and clone this repository to it. <br>
(Usually C:\xampp\htdocs\hang7e)
4. Open the MySQL admin page in your browser.<br>(Usually http://localhost/phpmyadmin)
5. Create a new database called "hang7e".
6. Click on the SQL tab, paste the contents of the "data.txt" file (inside the "steps" folder into the text box and click Go.
7. Navigate [here](http://localhost/hang7e/) in your browser.

## Games
- [Hangman](http://localhost/hang7e/hangman/game.php)
<br>Classic hangman game 
- [Word7e](http://localhost/hang7e/word7e/game.php)
<br>Wordle but with 7 letters