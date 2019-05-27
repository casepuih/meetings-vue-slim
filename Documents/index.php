<html>
<head>
<title>Hello World</title>
</head>
<body>
<form action="index.php" method="post">
Name: <input type="text" name="name">
<input type="submit">
</form>
	
	
<?php

$filename = 'friends.txt';
$file = fopen( $filename, "r" );
$friendsArray = array();
  if( $file !=false ) {
    while(!feof($file)) {
		$name = trim(fgets($file));
		if (strlen($name)>0) {
			$friendsArray[] = $name;
}
}
fclose( $file );

// adding new names to array
if (isset($_POST['name'}) && strlen($_POST['name'])>0) 

// appending to file
$file = fopen( $filename, "a" );
fwrite( $file, "some string" );



?>
</body>
</html>
