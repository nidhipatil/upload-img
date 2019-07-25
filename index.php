<Doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Img</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 	
	 <link rel="stylesheet"  href="upload.css">
</head>
<body>
<div class="container">
	<h1>Upload Image</h1>
<form class="new" action="upload.php" method="post" enctype="multipart/form-data">
    
    <input  type="file" name="fileToUpload" id="fileToUpload">
    <input  type="submit" value="Upload file" name="submit">
</form>
</div>
</body>
</html>
