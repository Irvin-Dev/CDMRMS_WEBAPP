<?php
  include "../connection/connection.php";

  session_start();


  if(!isset($_SESSION['StudentID'])){
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CdMRMS</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/mainpage.css" />
    <script
      src="https://kit.fontawesome.com/23c655eb58.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header>
      <nav>
        <figure>
          <img
            src="../img/logo-removebg-preview.png"
            alt="cdm-logo"
            id="cdm-logo"
          />
        </figure>
        <h1>CdMRMS</h1>
        <label for="check" class="nav-btn"
          ><i class="fa-solid fa-bars"></i
        ></label>
      </nav>
    </header>
    <main>
      <input type="checkbox" name="check" id="check" />
      <div class="grade-section">
        <section class="first-year-grade-section">
          <div class="table-container">
            <h2>First Year</h2>
            <div class="table-wrapper">
              <?php 
                $studentNo = $_SESSION['StudentID'];
                $query = "SELECT * FROM bsit WHERE `Student ID`= '$studentNo'"; 
                $result = mysqli_query(connection(), $query);
                while ($rows = mysqli_fetch_assoc($result)){
              ?>
              <table>
                <caption>
                  1st Semester
                </caption>
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>IT COMP</td>
                    <td><?php echo $rows['ITCOMP'];?></td>
                  </tr>
                  <tr>
                    <td>PROG 1</td>
                    <td><?php echo $rows['PROG 1'];?></td>
                  </tr>
                  <tr>
                    <td>GE 2</td>
                    <td><?php echo $rows['GE 2'];?></td>
                  </tr>
                  <tr>
                    <td>GE MATH</td>
                    <td><?php echo $rows['GE MATH'];?></td>
                  </tr>
                  <tr>
                    <td>GE 1</td>
                    <td><?php echo $rows['GE 1'];?></td>
                  </tr>
                  <tr>
                    <td>GE FIL 1</td>
                    <td><?php echo $rows['GE FIL 1'];?></td>
                  </tr>
                  <tr>
                    <td>PE 1</td>
                    <td><?php echo $rows['PE 1'];?></td>
                  </tr>
                  <tr>
                    <td>NSTP 1</td>
                    <td><?php echo $rows['NSTP 1'];?></td>
                  </tr>
                  <tr>
                    <td>GWA</td>
                    <td><?php echo $rows['1st Year 1st Sem GWA'];?></td>
                  </tr>
                </tbody>
              </table>
              <table>
                <caption>
                  2nd Semester
                </caption>
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>DISCRETE</td>
                    <td><?php echo $rows['DISCRETE']; ?></td>
                  </tr>
                  <tr>
                    <td>PROG 2</td>
                    <td><?php echo $rows['PROG 2']; ?></td>
                  </tr>
                  <tr>
                    <td>GE 3</td>
                    <td><?php echo $rows['GE 3']; ?></td>
                  </tr>
                  <tr>
                    <td>HUM</td>
                    <td><?php echo $rows['HUM']; ?></td>
                  </tr>
                  <tr>
                    <td>GE FIL 2</td>
                    <td><?php echo $rows['GE FIL 2']; ?></td>
                  </tr>
                  <tr>
                    <td>GEEL 2</td>
                    <td><?php echo $rows['GEEL 2']; ?></td>
                  </tr>
                  <tr>
                    <td>PE 2</td>
                    <td><?php echo $rows['PE 2']; ?></td>
                  </tr>
                  <tr>
                    <td>NSTP 2</td>
                    <td><?php echo $rows['NSTP 2']; ?></td>
                  </tr>
                  <tr>
                    <td>GWA</td>
                    <td><?php echo $rows['1st Year 2nd Sem GWA']; ?></td>
                  </tr>
                  
                  
                </tbody>
              </table>
            </div>
          </div>
        </section>

        <section class="first-year-grade-section">
          <div class="table-container">
            <h2>Second Year</h2>
            <div class="table-wrapper">
              <table>
                <caption>
                  1st Semester
                </caption>
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>PROG 3</td>
                    <td><?php echo $rows['PROG 3'];?></td>
                  </tr>
                  <tr>
                    <td>ELECT 1</td>
                    <td><?php echo $rows['ELECT 1'];?></td>
                  </tr>
                  <tr>
                    <td>GE 4</td>
                    <td><?php echo $rows['GE 4'];?></td>
                  </tr>
                  <tr>
                    <td>GE 12</td>
                    <td><?php echo $rows['GE 12'];?></td>
                  </tr>
                  <tr>
                    <td>SIA 1</td>
                    <td><?php echo $rows['SIA 1'];?></td>
                  </tr>
                  <tr>
                    <td>SP</td>
                    <td><?php echo $rows['SP'];?></td>
                  </tr>
                  <tr>
                    <td>GE SCI</td>
                    <td><?php echo $rows['GE SCI'];?></td>
                  </tr>
                  <tr>
                    <td>PE 3</td>
                    <td><?php echo $rows['PE 3'];?></td>
                  </tr>
                  <tr>
                    <td>GWA</td>
                    <td><?php echo $rows['2nd Year 1st Sem GWA'];?></td>
                  </tr>
                 
                </tbody>
              </table>
              <table>
                <caption>
                  2nd Semester
                </caption>
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>ACSS</td>
                    <td><?php echo $rows['ACSS'];?></td>
                  </tr>
                  <tr>
                    <td>ELECT 2</td>
                    <td><?php echo $rows['ELECT 2'];?></td>
                  </tr>
                  <tr>
                    <td>NET 1</td>
                    <td><?php echo $rows['NET 1'];?></td>
                  </tr>
                  <tr>
                    <td>GE 5</td>
                    <td><?php echo $rows['GE 5'];?></td>
                  </tr>
                  <tr>
                    <td>FUDBS</td>
                    <td><?php echo $rows['FUDBS'];?></td>
                  </tr>
                  <tr>
                    <td>SSD</td>
                    <td><?php echo $rows['SSD'];?></td>
                  </tr>
                  <tr>
                    <td>IPTECH</td>
                    <td><?php echo $rows['IPTECH'];?></td>  
                  </tr>
                  <tr>
                    <td>PE 4</td>
                    <td><?php echo $rows['PE 4'];?></td>
                  </tr>
                  <tr>
                    <td>GWA</td>
                    <td><?php echo $rows['2nd Year 2nd Sem GWA'];?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <section class="first-year-grade-section">
          <div class="table-container">
            <h2>Third Year</h2>
            <div class="table-wrapper">
              <table>
                <caption>
                  1st Semester
                </caption>
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Prog 1</td>
                    <td>1.50</td>
                  </tr>
                  <tr>
                    <td>Prog 1</td>
                    <td>1.50</td>
                  </tr>
                  <tr>
                    <td>Prog 1</td>
                    <td>1.50</td>
                  </tr>
                </tbody>
              </table>
              <table>
                <caption>
                  2nd Semester
                </caption>
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Prog 2</td>
                    <td>1.50</td>
                  </tr>
                  <tr>
                    <td>Prog 2</td>
                    <td>1.50</td>
                  </tr>
                  <tr>
                    <td>Prog 2</td>
                    <td>1.50</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <section class="first-year-grade-section">
          <div class="table-container">
            <h2>Forth Year</h2>
            <div class="table-wrapper">
              <table>
                <caption>
                  1st Semester
                </caption>
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Prog 1</td>
                    <td>1.50</td>
                  </tr>
                  <tr>
                    <td>Prog 1</td>
                    <td>1.50</td>
                  </tr>
                  <tr>
                    <td>Prog 1</td>
                    <td>1.50</td>
                  </tr>
                </tbody>
              </table>
              <table>
                <caption>
                  2nd Semester
                </caption>
                <thead>
                  <tr>
                    <th>Subject</th>
                    <th>Grade</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Prog 2</td>
                    <td>1.50</td>
                  </tr>
                  <tr>
                    <td>Prog 2</td>
                    <td>1.50</td>
                  </tr>
                  <tr>
                    <td>Prog 2</td>
                    <td>1.50</td>
                  </tr>
                </tbody>
              </table>
              <?php 
              }
              ?>
            </div>
          </div>
        </section>
      </div>
      <!--* User side panel -->
      <div class="user-side-panel">
        <div class="green-bg"></div>
        <div class="info-container">
          <p class="info-label">Name:</p>
          <p class="display-info"><?php echo $_SESSION['StudentName'];?></p>
          <p class="info-label">Student No.:</p>
          <p class="display-info"><?php echo $_SESSION['StudentID']?></p>
          <p class="info-label">Program:</p>
          <p class="display-info"><?php echo $_SESSION['Program']?></p>
          <p class="info-label">Year:</p>
          <p class="display-info"><?php echo $_SESSION['Year']?></p>
         <form action="../logout.php" method="post">
            <button type="submit" class="logout" id="logout" name="logout">
              <i class="fa-solid fa-right-from-bracket"></i>Logout
            </button>
         </form>
        </div>
      </div>
    </main>
  </body>
</html>
