<?php
//Database connection.
$con = MySQLi_connect(
   "localhost", 
   "root", 
   "yatharth711", 
   "autocomplete" 
);
//Check connection
if (MySQLi_connect_errno()) {
   echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
?>