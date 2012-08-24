<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_connection = "localhost";
$database_connection = "phoenjt8_bookstore";
$username_connection = "phoenjt8_books";
$password_connection = "bookstores";
$connection = mysql_pconnect($hostname_connection, $username_connection, $password_connection) or trigger_error(mysql_error(),E_USER_ERROR); 
$dbConnect=mysql_select_db($database_connection);
?>