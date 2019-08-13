<?php
include "load_data.php";

// print_r($_GET);
// print_r($_POST);

if(isset($_GET['id']) && isset($_GET['action'])) {

	if($_GET['action']=="update") {
		$user = $data->users[$_GET['id']];

		$user->name = $_POST['user-name'];
		$user->age = $_POST['user-age'];
		$user->job = $_POST['user-job'];

		file_put_contents($filename, json_encode($data));
		header("location:friend_page.php?id={$_GET['id']}");
	}
	else if($_GET['action']=="create") {

		if($_POST['user-name']=="") die("You didn't fill out the form right.");
		$id = count($data->users);
		$user = $data->users[] = (object)array();

		$user->name = $_POST['user-name'];
		$user->age = $_POST['user-age'];
		$user->job = $_POST['user-job'];

		file_put_contents($filename, json_encode($data));
		header("location:friend_page.php?id=$id");
	}
	else if($_GET['action']=="delete") {
		array_splice($data->users,$_GET['id'],1);
		file_put_contents($filename, json_encode($data));
		header("location:jq_mobile03.php");
	}

} else {
	header("location:jq_mobile03.php");
}