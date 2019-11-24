<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'test');

	// initialize variables
	$cell_phones = "";
	$brand = "";
	$os_version = "";
	$id = 0;
	$update = false;

	if (isset($_POST['submit'])) {
		$cell_phones = $_POST['cell_phones'];
		$brand = $_POST['brand'];
		$os_version = $_POST['os_version'];

		$query = mysqli_query($db, "INSERT INTO cell_phone (cell_phones, brand,os_version) VALUES ('$cell_phones', '$brand', '$os_version')"); 
		if($query)
		{
			echo json_encode('successfully');
			exit;
		}
		else
		{
			echo json_encode('error');
			exit;
		}
		header('location: index.php');
	}
	
	if(isset($_POST['edit_id']))
	{
		$id = $_POST['edit_id'];
		$query = mysqli_query($db,'select * from cell_phone where id = "'.$id.'"');
		$result = mysqli_fetch_assoc($query);
		echo json_encode($result);
		exit;
	}
	
	if(isset($_POST['update']))
	{
		$id = $_POST['id'];
		$cell_phones = $_POST['cell_phones'];
		$brand = $_POST['brand'];
		$os_version = $_POST['os_version'];
		$query = mysqli_query($db,'update cell_phone set cell_phones="'.$cell_phones.'", brand="'.$brand.'", os_version="'.$os_version.'" where id="'.$id.'"');
		if($query)
		{
			echo json_encode('successfully');
			exit;
		}
		else
		{
			echo json_encode('error');
			exit;
		}
	}
	
	if(isset($_POST['delete_id']))
	{
		$id = $_POST['delete_id'];
		$query = mysqli_query($db,'delete from cell_phone where id = "'.$id.'"');
		if($query)
		{
			echo json_encode('successfully');
			exit;
		}
		else
		{
			echo json_encode('error');
			exit;
		}
	}