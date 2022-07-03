<?php
require_once('functions.php');
db_connect();




$usn = $_POST['usn'];
$pass = $_POST['pass'];
$_SESSION['usn'] = $usn;
$_SESSION['pass'] = $pass;

$query = "SELECT `usn`,`name`,`pass` FROM `1923csb` ";
// echo "hello".var_dump($query);
$res = mysqli_query($conn, $query);
//echo $res;

// if($res)
// echo "DAtaaaaa";
// echo var_dump($res);
$flag = 0;
while ($row = mysqli_fetch_assoc($res)) {
	if ($row['usn'] == $usn) {
		$flag = 1;
		break;
	}
	continue;
}

if ($flag) {
	//echo "Welcome " . $row['name'] . "....!!<br>";
	include "../studentDetails.php";
?>
	<html>

	<body>
		<script>
			alert("<?php
			echo "Welcome " . $row['name'];
			?>");
		</script>
	</body>

	</html>
<?php
} else {
	//include "../home.php";
	echo "eRROR FOUND";
}

session_destroy();
?>