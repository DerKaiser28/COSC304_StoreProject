<?php
include "db.php";
if (isset($_POST['search'])) {

   $Name = $_POST['search'];

   $Query = "SELECT Name FROM search WHERE Name LIKE '%$Name%' LIMIT 5";

   $ExecQuery = MySQLi_query($con, $Query);

   echo '
<ul>
   ';

   while ($Result = MySQLi_fetch_array($ExecQuery)) {
       ?>
  
   <li onclick='fill("<?php echo $Result["Name"]; ?>")'>
   <a>
   
       <?php echo $Result['Name']; ?>
   </li></a>
 
   <?php
}}
?>
</ul>