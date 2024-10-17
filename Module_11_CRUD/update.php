<?php
    include("db_connections.php");

    // if(isset($_SERVER["REQUEST_METHOD"]=="POST")){
        
    // }



?>









<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .container-fluid {
        height: 100vh;
    }
</style>

<body>
    <div class="container-fluid bg-secondary ">

        <h1 class="text-center pt-5 pb-5">INSERT PAGE</h1>

        <div class="row justify-content-center">
            <div class="col-md-7 p-2 bg-white">
                <form method="POST" action="">
                    <div class="row justify-content-evenly">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname" class="form-label">First Name : </label>
                                <input type="text" class="form-control" id="fname" name="fname">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname" class="form-label">Last Name : </label>
                                <input type="text" class="form-control" id="lname" name="lname">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mobile" class="form-label">Mobile No : </label>
                                <input type="text" class="form-control" id="mobile" name="mobile">
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email" class="form-label"> Email : </label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="address" class="form-label">Address :</label>
                            <textarea name="address" id="address" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6">
                            <label for="pincode" class="form-label">Pincode :</label>
                            <input type="number" class="form-control" name="pincode" id="pincode">
                        </div>

                        <div class="w-100"></div>
                        <div class="col-md-3 p-md-4 text-center">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>