Step 1 : Download demo.zip containing demo directory and demo.sql file in demo directory.Extract in your local syatel xampp/wamp htdocs or www directory.

Step 2 : Create database name demo in your phpmyadmin.

Step 3 : Import demo.sql in your demo database.

Step 4 : Set your database configration in demo/application/config/database.php flie.

step 5 : set your base url in demo/application/config/config.php if required.By default it is http://localhost/demo.

step 6 : open browser and enter url http://localhost/demo. It will open login page.

step 7 : Enter 

username: demo@gmail.com 
password:test1234

After successful login it will redirect dashboard page.

step 8 : In sidebar you can see the invoice link.

step 9 : on click invoice link it will display all record of invoice.

step 10: we can search invoice using different search criteria.

step 11: set your date default time zone if required in demo/application/controllers/Dashboard , Invoice ,login.default it is Asia/Calcutta.


Javascript File
------------------
/asset/dist/js/custom.js 



