<?php
include("db_connections.php");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> CRUD</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="container-fluid">
    <h1 class="text-center">User Management System</h1>
  </div>

  <div class="container mt-5">

    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile no</th>
          <th scope="col">Created Date</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>







        <?php

        $sql = "Select * From tblusers;";

        $result = mysqli_query($conn, $sql);

        // $rows = mysqli_num_rows($result);
        
        while ($rows = mysqli_fetch_array($result)) {
          echo "<tr>";
          echo "<td>" . $rows['ID'] .
            "</td>";

          echo "<td>" . $rows['FirstName'], $rows['LastName'] . "</td>";
          echo "<td>" . $rows['Email'] . "</td>";
          echo "<td>" . $rows['MobileNumber'] . "</td>";
          echo "<td>" . $rows['CreationDate'] . "</td>";
          echo "<td>
          <a class='m-1' href='read.php?ID=" . $rows['ID'] . "'><i class='fa-solid fa-eye'></i></a> 
          <a class='m-1' href='update.php?edit=" . $rows['ID'] . "'><i class='fa-solid text-warning fa-pencil'></i></a>
          <a class='m-1' href='index.php?ID=" . $rows['ID'] . "' onclick='confirm('Do You want to delete');' ><i class='fa-solid text-danger fa-trash'></i></a>
    </td>";
        }
        ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>