<?php

// Include Libraries
include "lib/php/print_o.php";
include "load_data.php";

function makeUser($user) {
	// print_o($user);

	// TERNARY
	?>
	<div class='user-profile'>
	<div>
		<strong class='user-profile-name'><?php echo @$user->name ?></strong>
		<br>Age: <em><?php echo @$user->age?></em>
		<br>Job: <em><?php echo @$user->job ?></em>
	</div>
	<form action="friends_crud.php?<?php 
		echo @$user->name!=""?
		"action=update&id={$_GET['id']}":
		"action=create&id=add" ?>" method="post">
		<div>
			<label for="user-name">Name</label>
			<input type="text" value="<?php echo @$user->name ?>" name="user-name" id="user-name" required>
		</div>
		<div>
			<label for="user-age">Age</label>
			<input type="number" value="<?php echo @$user->age ?>" name="user-age" id="user-age">
		</div>
		<div>
			<label for="user-job">Job</label>
			<input type="text" value="<?php echo @$user->job ?>" name="user-job" id="user-job">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
	</div>
	<?php

}

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Friends Viewer</title>
	<link rel="stylesheet" href="css/users.css">
</head>
<body>

<header>
	<hgroup>
		<h1>Data</h1>
		<p>look at all my friends</p>
	</hgroup>
</header>

<div>
<?php

if(!isset($_GET['id'])) {
	echo "No user selected";
	makeUser((object)array());
} else {
	makeUser($data->users[$_GET['id']]);
}
echo "<div><a href='friends_list.php'>Back</a></div>";

?>
</div>
	
</body>
</html>