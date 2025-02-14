<?php
include "./connection/connection.php";

if(!isset($_SESSION)){
  session_start();
}

$con = connection();

if(isset($_POST["login_btn"])){
  $student_Id = $_POST['student_id'];
  $email = $_POST['email'];

  $query = "SELECT * FROM `bsit` WHERE `Student ID` = '$student_Id' AND `Email` = '$email'";
  $result = mysqli_query($con, $query);
  $row = $result->fetch_assoc();
  $total = $result->num_rows;
  if($total > 0) {
    echo '<script>alert("Welcome!");</script>';
    $_SESSION['StudentName'] = $row['Student Name'];
    $_SESSION['StudentID'] = $row['Student ID'];
    $_SESSION['Program'] = $row['Program'];
    $_SESSION['Year'] = $row['Year'];
    echo '<script>window.location.href = "./html/mainpage.php";</script>';
    exit();
  }
  else{
    $sqlview = "SELECT * FROM `bscpe` WHERE `Student ID` = '$student_Id' AND `Email` = '$email'";
    $resultview = mysqli_query($con, $sqlview);
    $row = $resultview->fetch_assoc();
    $total = $resultview->num_rows;

    if($total > 0){
        echo '<script>alert("Welcome! ");</script>';
        $_SESSION['StudentName'] = $row['Student Name'];
        $_SESSION['StudentID'] = $row['Student ID'];
        $_SESSION['Program'] = $row['Program'];
        $_SESSION['Year'] = $row['Year'];
        echo '<script>window.location.href = "mainpage.php";</script>';
        $row = $resultview->fetch_assoc();
    }

    else{
        echo '<script>alert("Data does not exist! ");</script>';
    }
  }
}
?>
<!-- HTML  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CdMRMS</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="./styles.css" />
    <script
      src="https://kit.fontawesome.com/23c655eb58.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body id="home">
    <!-- * Navigation Bar -->
    <header>
      <nav>
        <figure>
          <img
            src="./img/logo-removebg-preview.png"
            alt="Colegio de Montalban Logo"
            class="cdm-logo"
            loading="eager"
          />
        </figure>
        <h1>CdMRMS</h1>
        <input type="checkbox" id="check" name="check" />
        <ul>
          <li><a href="">Home</a></li>
          <li><a href="./html/dean'slist.php">Dean's List</a></li>
          <li><a href="">About</a></li>
        </ul>
        <label for="check" class="menu-btn"
          ><i class="fa-solid fa-bars"></i>
        </label>
      </nav>
    </header>
    <!--! View Grade Section -->
    <main>
      <!--* Login Form -->
      <div class="form-container" action="">
        <form method="post">
          <h2>Sign-In</h2>
          <p class="instruction">View Your Grades</p>
          <fieldset>
            <label for="student-id">Student ID</label>
            <input
              type="text"
              class="student-id"
              id="student_id"
              name="student_id"
              required
            />
            <label for="email">Email Address</label>
            <input
              type="email"
              class="email"
              id="email"
              name="email"
              autocomplete="email"
              required
            />
            <button type="submit" id="login_btn" name="login_btn">
              <i class="fa-solid fa-right-to-bracket"></i>Login
            </button>
          </fieldset>
          <div class="contact">
            <address>Kasiglahan Village, San Jose, Rodriguez, Rizal</address>
            <div class="contact-links">
              <a><i class="fa-brands fa-facebook"></i></a>
              <a><i class="fa-solid fa-envelope"></i></a>
              <a><i class="fa-solid fa-globe"></i></a>
            </div>
          </div>
          <p class="copyright">
            Copyright &copy; 2024, CdMRMS All Rights Reserved.
          </p>
        </form>
      </div>
      <!--* View Grade Background -->
      <div class="bg-container">
        <div class="background-img-container"></div>
      </div>
    </main>
  </body>
</html>
