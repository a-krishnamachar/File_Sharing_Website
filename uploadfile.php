<?php
//NOT CHECKED YET

session_start();

//Need to ensure filename is valid. From wiki
$filename = basename($_FILES['selectedFile']['name']);
if(!preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename";
	exit;
}

//Need to ensure username is valid. From wiki
$username = $_SESSION['username'];
if(!preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
}

$full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

if(move_uploaded_file($_FILES['selectedFile']['tmp_name'], $full_path)) {
    echo("Your upload succeeded.");
	header("Location: homepage.php");
	exit;
}
else {
	echo("Your upload failed.");
    header("Location: homepage.php");
	exit;
}

?>