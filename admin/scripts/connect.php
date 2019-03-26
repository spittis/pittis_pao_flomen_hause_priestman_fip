
<?php
	$db_dsn = array(
		'host'=>'localhost',
		'dbname'=>'db_occ',
		'charset'=>'utf8'
		);
	$dsn = 'mysql:'.http_build_query($db_dsn,'',';');
	$db_user = 'root';
	$db_pass = 'root';
	try{
		$pdo = new PDO($dsn,$db_user,$db_pass);
	}catch(PDOException $exception){
		echo 'Connection Error: '.$exception->getMessage();
		exit();
    }
    
    function ajaxRespond($success = false, $message = "", $data = "")
    { 
        $success     = json_encode($success);
        $message     = json_encode($message);
        $data        = json_encode($data);
        header("Content-type: application/json");
        echo "{\"success\":$success, \"message\":$message, \"data\":$data}";
        return;
    }//end defaultResponse
?>