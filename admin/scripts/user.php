<?php

function createAdmin($user,$fname,$lname,$email,$userLevel,$pass){
		include('connect.php');
	
		$create_user_query = 'INSERT INTO us01_users (user,fname,lname,email,userLevel,pass)';
		$create_user_query .= ' VALUES(:user,:fname,:lname,:email,:userLevel,:pass)';

		$create_user_set = $pdo->prepare($create_user_query);
		$create_user_set->execute(
			array(
				
				':user'=>$user,
				':fname'=>$fname,
                ':lname'=>$lname,
                ':email'=>$email,
                ':userLevel'=>$userLevel,
                ':pass'=>$pass
			)
		);

		if($create_user_set->rowCount()){
			redirect_to('admin.php');
		}else{
			$message = 'Your hiring practices have failed you.. this individual sucks...';
			return $message;
		}

}

function deleteAdmin($ID){
	include('connect.php');

	$queryAll='DELETE FROM us01_users WHERE ID = :id';

	$runFilter = $pdo ->prepare($queryAll);

	$runFilter->execute(
		array(
			':id'=>$ID 
		)
	);

	if($runFilter){
		redirect_to('../admin.php');
	}else{
		$error = 'There is problem in Filter';
		return $error;
	}
}