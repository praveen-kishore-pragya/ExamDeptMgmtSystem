<!DOCTYPE html>
<html lang="en">
<title>Admin Console</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>

</style>

<link href="navbar.css" rel="stylesheet">

<body>

    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SDMCET - Examination Management</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExample02">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active"> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stu.php">Student Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="teach.php">Teacher Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="admin/index.php">Admin Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="allinf-crsetabodt">
        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="vision-mission-tab" data-bs-toggle="tab" data-bs-target="#vision-mission" type="button" role="tab" aria-controls="vision-mission" aria-selected="true"><strong>Profile</strong></button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="peo-po-tab" data-bs-toggle="tab" data-bs-target="#peo-po" type="button" role="tab" aria-controls="peo-po" aria-selected="true">Subjects</button>
            </li>

        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="vision-mission" role="tabpanel" aria-labelledby="vision-mission-tab">
                <div class="row">
                    <div class="col-md-5">
                        <div class="vismisso-infimg">
                            <img src="assets/teacherLogo.png" alt="" class="img-fluid" width="300" height="300">>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="vissmisso-incontwrap">
                            <br>
                            <h4>Name Field from DB:</h4>
                            <p>Designation from db</p>

                            <h4> About:</h4>
                            <ul>
                                <li>iD: id from db</li>
                                <li>Branch: </li>
                                <li>View Class-wise Report: </li>
                                <form id="form1" name="form1" method="post" action="<?php echo $PHP_SELF; ?>">
                                  
                                    


                                    Class-Subject List :
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
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

</body>

</html>