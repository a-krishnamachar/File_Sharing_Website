<?php

session_start();

//Almost all of this from wiki
$filename = basename($_FILES['uploadedfile']['name']);
if(!preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename";
	exit;
}

$username = $_SESSION['username'];
if(!preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

$full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path)) {
    echo("Your upload succeeded.");
	header("Location: homepage.php");
	exit;
}
else {
	echo("Your upload failed. Sending you back to the main screen.");
    header("Location: homepage.php");
	exit;
}

?>