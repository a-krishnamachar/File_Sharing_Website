<!DOCTYPE html>
<html lang='en-US'>

<head>
  <meta charset="utf-8"/>
  <title>Simple File Sharing Website - HomePage Screen</title>
  <link rel="stylesheet" type="text/css" href="fileM2.css" />

</head>

    <body>
        <h1>Simple File Sharing Website</h1>


        <div id= "hello">
        <h2>WELCOME TO THE SITE.</h2>
            <?php
                session_start();

                echo "We're happy you're here, ". $_SESSION['username'] . "."
            ?>
        </div>

        <br><br>
        Your options follow here! You can:
        <br>

        <div id="addfile">
            <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
            <div id="addbutton"><a id="uploadLink" href="uploadfileForm.php"><p id="add">ADD FILES</p></a></div>
        </div>
        <br><br>

        VIEW YOUR FILES:

        <form method="GET" action="viewfile.php">
        <?php

        $username = htmlentities($_SESSION['username']);
        $userpath = "/srv/uploads/$username";
        $files = scandir($userpath);
        //foreach from examples in wiki
        foreach($files as $file) {
            echo("<p class='view'>$file</p>
            <button class='view' name='view' value='$file' type='submit'>VIEW</button>");
        }

        ?>
        </form>

        <br><br>

        DELETE YOUR FILES:
        <!--pretty much the same logic as view. could have combined logic into 1 file :/ -->

        <form method="GET" action="deletefile.php">
        <?php
        $username = htmlentities($_SESSION['username']);
        $userpath = "/srv/uploads/$username";
        $files = scandir($userpath);

        foreach($files as $file) {
            echo("<p class='delete'>$file</p>
            <button class='delete' name='delete' value='$file' type='submit'>DELETE</button>");
        }

        ?>
        </form>

        <br><br>

        <!-- logout form here -->
        <form method="GET" action="logout.php">
        <button name='logout' value='logout' type='submit'>LOGOUT</button>
        </form>



</html>