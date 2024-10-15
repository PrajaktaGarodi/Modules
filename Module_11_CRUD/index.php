<?php
  include("db_connections.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

            $sql="Select * From tblusers;";

            $result= mysqli_query($conn,$sql);

            $rows = mysqli_num_rows($result);

            while($rows= mysqli_fetch_array($result))
            {
              echo "<tr>";
              echo "<td>".$rows['ID'].
              "</td>";

              echo "<td>".$rows['FirstName'],$rows['LastName']."</td>";
              echo "<td>".$rows['Email']."</td>";
              echo "<td>".$rows['MobileNumber']."</td>";
              echo "<td>".$rows['CreationDate']."</td>";

            }
          ?>
        </tbody>
      </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>