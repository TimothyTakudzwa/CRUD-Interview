## About Project

This project was developed as to answer question provided to develop a web-based application using PHP with the below Requirements:

1.        Create a web application to record:

 <ul><li> A list of people (first name, surname, date of birth, age (calculated field)).</li>

<li> A list of attribute types e.g. Height, Hair Colour, Weight etc.  These should not be hardcoded but a list the user can add / edit and delete.</li>

<li>Ability to link one or more attributes with a corresponding value when editing a person.</li></ul>

2.        The list of people must use a Bootstrap compatible grid to display data, sortable and filterable on first name, surname.

3.        Grid data must be fetched via an Ajax request (not loaded into the initial page and then tabulated).

4.       Create / Edit / Delete on each line either via their own pages or via modal popup.

## How to Run Project

<ol>
  <li>Clone the Oriject from Github Link : https://github.com/TimothyTakudzwa/CRUD-Interview.git</li>
  <li>Go to the folder application using cd command on your cmd or terminal
<li>Run composer install on your cmd or terminal</li>
<li> Create a .env file </li>
<li>Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu</li>
<li>Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration. </li>
<li>Create Database in Xampp or Lammp with the database name (DB_DATABASE)</li>
<li>By default, the username is root and you can leave the password field empty. (This is for Xampp) 
<li>By default, the username is root and password is also root. (This is for Lamp)</li>
<li>Run php artisan key:generate</li>
<li>Run php artisan migrate</li>
<li>Run php artisan serve</li>
<li>Go to localhost:8000</li>
  <li>Click on Get user Data to get user data </li>
</ol>
