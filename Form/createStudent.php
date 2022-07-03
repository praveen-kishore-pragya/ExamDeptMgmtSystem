<?php
require_once( 'functions.php' );
db_connect();



    
			$usnA=$_POST['usnA'];
	$nameA = $_POST['nameA'];

		$pass=$_POST['pass'];
		

		$_SESSION['usnA'] = $usnA;
        $_SESSION['nameA'] = $nameA;
		$_SESSION['pass'] = $pass;
	
    $query="INSERT INTO `1923CSB` (`usn`, `name`, `pass`) VALUES('$usnA','$nameA','$pass');";
    echo var_dump($query)."<br>";
	// echo "hello".var_dump($query);
		$res=mysqli_query($conn,$query);
        echo var_dump($res);
?>
			<html>
			<body>
				<script>
				alert("successfully Data Submitted");
				</script>
			</body>
			</html>
			
