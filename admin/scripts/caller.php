<?php
	require_once('config.php');
	confirm_logged_in();
	if(isset($_GET['caller_id'])){
		$action = $_GET['caller_id'];

		switch($action){
			case 'logout':
				logged_out();
				break;

			case 'delete':
				$id = $_GET['id'];
				deleteAdmin($id);
				break;
			case 'update':
				$id = $_GET['ID'];
				$_SESSION['ID']=$_GET['id'];
				redirect_to('../adminUpdateInfo.php?ID='.$id);
				break;
		}
	}
?>