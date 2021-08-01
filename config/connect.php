<?php  
//old mssql database------------------------------------
//$host ="10.40.96.4"; 
//$username ="vnpt";
//$password ="F5rx!\K;}uJEgJWx";
//$database ="mobileshop";
//mssql_connect($host, $username, $password);
//mssql_select_db($database);

//new mysql database------------------------------------
 $conn = mysqli_connect('localhost','vnpt','Abc123!@#','mobileshop');
 mysqli_query($conn,"SET NAMES 'utf8'");

?>
