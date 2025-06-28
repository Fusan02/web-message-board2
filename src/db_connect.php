<?php
try {   //ロジック（処理）
  $dbHost = getenv('DB_HOST');
  $dbPort = getenv('DB_PORT');
  $dbName = getenv('DB_NAME');
  $dbUser = getenv('DB_USER');
  $dbPass = getenv('DB_PASS');
  $dsn = "mysql:dbname=$dbName;host=$dbHost:$dbPort";
  $dbh = new PDO($dsn, $dbUser, $dbPass);
} catch (PDOException $e) {     //例外処理
  echo 'データベース接続失敗:';
  echo $e->getMessage();
  exit();
}