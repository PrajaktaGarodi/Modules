<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Read PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .container-fluid {
        height: 100vh;
        background:lightblue;
        font-family: 'Times New Roman', Times, serif;
    }
</style>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center pt-5">
            <?php
            include("db_connections.php");
            $id = $_GET['ID'];
            $result = "select * from tblusers WHERE ID = $id";
            $ex = mysqli_query($conn, $result);
            $row = mysqli_num_rows($ex);

            while ($row = mysqli_fetch_array($ex)) {
                //    Loops Starting
            

                ?>
                <div class="col-md-6 bg-light p-md-3">
                    <div class="row">
                        <div class="col-md-5 m-md-2">
                            <h4>First Name : <p class="d-inline fw-normal h5"><?php echo $row['FirstName'] ?></p>
                            </h4>

                        </div>
                        <div class="col-md-5 m-md-2">
                            <h4>Last Name : <p class="d-inline  fw-normal h5"><?php echo $row['LastName'] ?></p>
                            </h4>

                        </div>
                        <div class="col-md-5 m-md-2">
                            <h4> Mobile Number : <p class="d-inline  fw-normal h5"><?php echo $row['MobileNumber'] ?></p>
                            </h4>

                        </div>
                        <div class="col-md-5 m-md-2">
                            <h4> Email : <p class="d-inline  fw-normal h5"><?php echo $row['Email'] ?></p>
                            </h4>

                        </div>
                        <div class="col-md-12 m-md-2">
                            <h4> Address: <p class="d-inline  fw-normal h5"><?php echo $row['Address'] ?></p>
                            </h4>

                        </div>
                        <div class="col-md-5 m-md-2">
                            <h4> Pincode: <p class="d-inline  fw-normal h5"><?php echo $row['pincode'] ?></p>
                            </h4>

                        </div>
                    </div>
                </div>

            </div>
            <?php
            } ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>