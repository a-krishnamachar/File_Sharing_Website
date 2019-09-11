<?php
    session_start();
?>

<!DOCTYPE html>
<html lang='en-US'>

<head>
  <meta charset="utf-8"/>
  <title>Simple File Sharing Website</title>
  <link rel="stylesheet" type="text/css" href="fileM2.css" />

</head>

    <body>
        <h1>Simple File Sharing Website</h1>


        <div id= "hello">
        <h2>WELCOME TO THE SITE.</h2>
            <?php
                echo "We're happy you're here, ". $_SESSION['username'] . "."
            ?>
        </div>

        <br><br>
        Your options follow here! You can:
        <br>

        <div id="addfile">
            <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
            <div id="addbutton"><a id="uploadLink" href="uploadfileForm.php"><p id="add">Add Files</p></a></div>
        </div>
        <br><br>

        View your files:





</html>