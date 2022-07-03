<?php
    require_once( "Form/functions.php" );
    db_connect();
?>

<!DOCTYPE html>
<html lang="en">
<title>Admin Console</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<style>


  body {
    padding-bottom: 20px;
  }

  .navbar {
    margin-bottom: 80px;
  }
</style>


    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">

    <nav class="navbar navbar-expand navbar-dark bg-dark" aria-label="Second navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">SDMCET - Examination Management</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link active">    </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="stu.php">Student Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Teacher Login</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="admin/index.php">Admin Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<main class="form-signin">
  <form action="Form/teachdetails.php" method="post">

    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" name="tid" placeholder="Teacher Id">
      <label for="floatingInput">Teacher Id</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" name="pass" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2019–2023</p>
  </form>
</main>



  </body>
</html>
