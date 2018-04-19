#Introduction
<p>Project Bazaar is a system which allows students to propose projects, while reading guidelines on how to compose a scope for a project. The system will be split up into two sections, a section for staff members, a section for students. This project is composed within laravel 5.2</p>

#Requirements
<ul>
    <li>Git</li>
    <li>Composer</li>
    <li>MySQl WorkBench</li>
    <li>PHP</li>
</ul>


#Details
<ul>
    <li>Database name: bazaar</li>
    <li>Database username: root</li>
    <li>Database password: webdev</li>
</ul>

#Sample login data

<ul>
    <li>Student - Username: 22678832 Password: webdev</li>
    <li>Staff - Username: david.walsh@edgehill.ac.uk Password: webdev</li>
</ul>

#Instructions to install
<ol>
    <li>Ensure you have git installed on linux</li>
    <li>Open up a terminal on linux and navigate to the selected folder path to where you wish to install the site</li>
    <li>Using terminal enter the following command <code>git clone https://github.com/barrytickle/project_bazaar.git</code> Doing this will take a few seconds</li>
    <li>Start up MySQl workbench, ensure that you have a working username and password to secure the db. Update the .env file to match your current credentials</li>
    <li>Click add a new schema, call the Schema <b>bazaar</b> with a <b>Utf-8 default Collation</b></li>
    <li>Using terminal, ensure that your file path is located in the same folder as the project. Type <code>php artisan migrate</code> This will populate your database with the tables required to run the application</li>
    <li>Again using terminal, run the command <code>php artisan db:seed</code> This will now populate your tables with some sample information for you to try out</li>
    <li>All login information can be found above.</li>
</ol>