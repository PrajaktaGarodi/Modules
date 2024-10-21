<?php
include('db_connection.php');

if (isset($_post['submit'])) {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


    $sql = "SELECT * FORM users WHERE  username = '$username'";
    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Username already exists')</script>";
        echo "<script>window.location.href='index.php';</script>";

    } else {
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Registration successful')</script>";
            echo "<script>window.location.href='index.php';</script>";

        } else {
            echo "<script>alert('Failed to register')</script>";
            echo "<script>window.location.href='register.php';</script>";

        }
    }

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .container-fluid {
        background-color: lightblue;
        font-family: 'Times New Roman', Times, serif;
        height: 100vh;
        width: 100%;

    }
</style>

<body>

    <div class="container-fluid ">
        <H1 class="text-center pt-5 pb-5">LOGIN FORM</H1>
        <div class="row justify-content-center">
            <div class="col-md-4 p-5 rounded-5 " style="background-color:whitesmoke;">
                <div class="row justify-content-center">
                    <form action="" method="POST">
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="Username" class=" form-label text-center">USER NAME </label>
                                <input type="text" class="form-control" name="username">
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <label for="Password" class=" form-label text-center">PASSWORD </label>
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="col-md-3 mt-3">
                            <button class="btn btn-secondary " type="submit" name="submit">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


</body>

</html>