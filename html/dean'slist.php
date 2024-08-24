<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CdMRMS</title>
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="../css/dean'slist.css" />
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
            alt="Colegio de Montalban Logo"
            class="cdm-logo"
            loading="eager"
          />
        </figure>
        <h1>CdMRMS</h1>
        <input type="checkbox" id="check" name="check" />
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="">Dean's List</a></li>
          <li><a href="">About</a></li>
        </ul>
        <label for="check" class="menu-btn"
          ><i class="fa-solid fa-bars"></i>
        </label>
      </nav>
    </header>
    <main>
      <section class="list-container">
        <div class="search-bar-container">
          <div class="search-bar-wrapper">
            <input type="search" id="search-bar" placeholder="Search...">
            <button type="button" id="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </div>
       <div class="table-container">
          <div class="table-wrapper">
            <table>
              <caption>2023 - 2024 Dean's Listers</caption>
              <thead>
                <tr>
                  <th class="hide-first">Student No.</th>
                  <th>Student Name</th>
                  <th class="hide-last">Program</th>
                  <th class="hide-last">Year</th>
                  <th>Section</th>
                  <th>GWA</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                 include "../connection/connection.php";

                 $query = "SELECT * FROM deanslist ORDER BY GWA ASC";
                 $result = mysqli_query(connection(), $query);

                  while($rows = mysqli_fetch_assoc($result)){
               ?>
                <tr>
                  <td class="hide-first"><?php echo $rows['Student ID'];?></td>
                  <td class="name"><?php echo $rows['Student Name'];?></td>
                  <td class="hide-last"><?php echo $rows['Program'];?></td>
                  <td class="hide-last"><?php echo $rows['Year'];?></td>
                  <td><?php echo $rows['Section'];?></td>
                  <td><?php echo $rows['GWA'];?></td>
                </tr>
              <?php 
                 }
                ?>
              </tbody>
            </table>
          </div>
       </div>
      </section>
    </main>
  </body>
</html>
