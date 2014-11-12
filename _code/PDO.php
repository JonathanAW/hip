<?


$db_host ="aw.inikoo.com";
$db_user ="appuser";
$db_pass = "JhNyY8vf4ijb87rm";
$db_name = "dw";   


  
  try {
	$dbh4 = new PDO(
		"mysql:host=$db_host;dbname=$db_name;charset=UTF-8",
		$db_user,
		$db_pass
	);

 //   $dbh->query("SET NAMES 'utf8'");
//	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
	error_log($e->getMessage());
	die("A database error was encountered..");
  
  
  
}

?>