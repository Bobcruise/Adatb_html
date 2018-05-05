<?php
$tns = " 
     (DESCRIPTION = 
         (ADDRESS_LIST = 
             (ADDRESS = (PROTOCOL = TCP)(HOST = orania)(PORT = 1521)) )
             (CONNECT_DATA = (SID = kabinet) ) )";
$db_username = "h668201";
$db_password = "levCSI21";
try{
    $conn = new PDO("oci:dbname=".$tns,$db_username,$db_password);
}catch(PDOException $e){
    echo ($e->getMessage());
} ?>