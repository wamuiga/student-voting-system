<?php
require "config.php"; // Database Connection

// Sql Query
$sql="SELECT first_name, second_name FROM registeredStudents"; 
$row=$dbo->prepare($sql);
$row->execute();
$result=$row->fetchAll(PDO::FETCH_ASSOC);
//echo $row;
echo json_encode(array('data'=>$result));

?>



