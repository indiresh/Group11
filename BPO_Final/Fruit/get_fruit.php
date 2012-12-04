<html>
<head>
  <title>Fruit</title>

</head>

<body>
<h1>Fruit</h1>

<?php

$dsn = "mysql:dbname=rolejnic";
$username = "rolejnic";
$password = "Danielle1";

try {
	$conn = new PDO( $dsn, $username, $password );
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	} catch ( PDOException $e ) {
	echo "Connection failed: " . $e->getMessage();
}

$sql = "SELECT * FROM fruit";

echo "<ul>";
try {
	$rows = $conn->query( $sql );
	foreach ( $rows as $row ) {
		echo "<li>A " . $row["name"] . " is " . $row["color"] . "</li>";
		}
	} catch ( PDOException $e ) {
	echo "Query failed: " . $e->getMessage();
	}
	
	echo "</ul>";
	$conn = null;

?>


 </body>
 </html>