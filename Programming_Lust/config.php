<?php
/* Contains database configuration assumimg you are running mysql using user "Akash" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// Datbase Connection
$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// CHECK THE CONNECTION\
if($con == false){
    dir('Error: Conncetion Failed');
}

?>