<!DOCTYPE html>
<html lang='en-US'>

<head>
    <title>File Sharing Website: Delete Files</title>
    <link rel="stylesheet" type="text/css" href="fileM2.css" />
</head>

<body>

    <?php

        session_start();

        $filename = $_GET['delete'];
        $username = $_SESSION['username'];

        $filepath = "/srv/uploads/$username/$filename";

        if(unlink($f)) {
            echo("Your file was deleted. Sending you back to the homepage.");
        }

        else {
            echo("Uh oh! Something went wrong. Sending you back to the homepage so you can try again.");
        }

    ?>

</body>

</html>


