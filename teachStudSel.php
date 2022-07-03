<form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">
    <label for="appointment">Date:</label>
    <input type="date" id="aappointP" name="appointP">


    Doctors List :
    <select Doc name='NEW'>
      <option value="">--- Select ---</option>

      <?php

      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "HospitalMgmt";

      $con = mysqli_connect($servername, $username, $password, $database);
      if ($con) {
        echo "Connection success<br>";
      } else {
        echo "Conn  not success";
      }
      $sqlD = "SELECT * FROM `doctors`";
      $resultD = mysqli_query($con, $sqlD);
      while ($row_list = mysqli_fetch_assoc($resultD)) {
      ?>
        <option value="<?php echo $row_list['name']; ?>">
          <?php echo $row_list['name']; ?>
        </option>
      <?php
      }
      ?>
    </select>
    <input type="submit" name="Submit" value="Select" />
  </form>