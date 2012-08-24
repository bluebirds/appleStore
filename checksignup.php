<?php 



require_once('Connections/connection.php');?>



<?php



$data=$_POST['email'];



if (!function_exists("GetSQLValueString")) {



function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 



{



  if (PHP_VERSION < 6) {



    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;



  }







  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);







  switch ($theType) {



    case "text":



      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";



      break;    



    case "long":



    case "int":



      $theValue = ($theValue != "") ? intval($theValue) : "NULL";



      break;



    case "double":



      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";



      break;



    case "date":



      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";



      break;



    case "defined":



      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;



      break;



  }



  return $theValue;



}



}



$query_Recordset1 = "select * from authors where email='$data'";



$Recordset1 = mysql_query($query_Recordset1) or die(mysql_error());



?>



<?php



if(mysql_num_rows($Recordset1)==1){

		echo 1;

}else{

		echo 0;

}



	



?>



<?php



mysql_free_result($Recordset1);



?>