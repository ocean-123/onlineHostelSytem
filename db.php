<?php 



$dbhost = "localhost"; // 127.0.0.1
    $dbname = "bookhostel";
    $dbuser = "root";
    $dbpass = "";
    
    $options = [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ];
      
      $dsn = "mysql:host=" . $dbhost . ";dbname=" . $dbname;
      
      try {
        $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
      } catch (PDOException $e) {
        die("Cannot Connect to Database: " . $e->getMessage());
      }
      ?>