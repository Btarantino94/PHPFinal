 <?php

try{
	// MAMP
  $db = new PDO('mysql:host=localhost;dbname=btarantino_Challenge_one', 'root', 'root');
  // Server
  //$db = new PDO('mysql:host=localhost;dbname=btarantino_Challenge_one', 'r2hstudent', 'SbFaGzNgGIE8kfP');

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
  
  echo "Can't Connect: ".$e->getMessage();
  exit;

}


