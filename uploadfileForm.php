<!DOCTYPE html>
<html lang='en-US'>

<head>
    <title>Simple File Sharing Website</title>
    <link rel="stylesheet" type="text/css" href="fileM2.css" />
</head>

<body>
<!--from wiki-->
    <form enctype="multipart/form-data" action="uploadfile.php" method="POST">
	    <p>
		    <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
		    <label for="uploadfile_input">Choose a file to upload:</label>
            <input name="uploadedfile" type="file" id="uploadfile_input" />
	    </p>
	    <p>
		    <input type="submit" value="Upload File" />
	    </p>
    </form>

</body>

</html>
