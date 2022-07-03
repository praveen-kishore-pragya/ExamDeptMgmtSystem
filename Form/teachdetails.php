<?php
require_once( 'functions.php' );
db_connect();






			$tid = $_POST['tid'];


		$pass=$_POST['pass'];
		


		$_SESSION['pass'] = $pass;
		$_SESSION['tid'] = $tid;

			$query="SELECT `tid`,`pass` FROM teacher";
            $query="SELECT `tid`,`name`,`pass` FROM teacher where `tid`==$tid and `pass`==$pass";

		
		
            $res=mysqli_query($conn,$query);


            $row=mysqli_fetch_assoc($res);
    
            if($row)
            {
                echo $row['name']."<br>";
                //include "studetails.php";
                ?>
                <html>
                <body>
                    <script>
                    alert("successfully Logged In");
                    </script>
                </body>
                </html>
            <?php
            }
            else
            {
                include "../admin.php";
            }

?>