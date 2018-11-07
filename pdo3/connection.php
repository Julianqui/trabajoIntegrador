<?php

  $dsn = 'mysql:host=127.0.0.1; dbname=movies_db; port=8889; charset=utf8mb4';
  $user = 'root';
  $pass = 'root';
  $opt =  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

  try {
    $conn = new PDO($dsn, $user, $pass, $opt);
  } catch (PDOException $exception) {
    echo "El error de conexion es: ".$exception->getMessage();
  }







// <?php
//
// 	$host = 'mysql:host=127.0.0.1; dbname=movies_db; port=8889; charset=utf8mb4';
// 	$user = 'root';
// 	$pass = 'root';
// 	$opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
//
// 	try{
// 		$conn = new PDO($host, $user, $pass, $opt);
// 	}catch( PDOException $Exception ) {
//    	echo $Exception->getMessage();
// 	}














// <?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $dbname = "movies_db";
//
// try {
//     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//     // set the PDO error mode to exception
//     // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Connected successfully";
//
//     }
// catch(PDOException $e)
//     {
//     echo "Connection failed: " . $e->getMessage();
//      }






 // <?php
 //
	// $host = 'mysql:host=localhost; dbname=movies_db';
	// $user = 'root';
	// $pass = 'root';
	// $opt= [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
 //
	// try{
	// 	$conn = new PDO($host, $user, $pass, $opt);
	// }catch( PDOException $Exception ) {
 //   	echo $Exception->getMessage();
	// }
