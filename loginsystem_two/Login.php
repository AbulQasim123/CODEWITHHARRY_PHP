<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="icon.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
    <?php require '_navbar.php' ?>
    <div class="container">
        <h4 class=" text-info font-italic my-4">Please login to our page website</h4>
        <div class="row">
            <div class="col-md-4">
                <form action="" method="">
                    <div class="form-group">
                        <label for="user_name" class="font-weight-bold">
                            <i class="fas fa-user"></i> Username:
                        </label>
                        <input type="text" name="user_name" id="user_name" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="font-weight-bold">
                            <i class="fa fa-lock"></i> Password:
                        </label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="form-control">
                    </div>
                    <button type="button" class="btn btn-outline-info btn-lg" style="width: 100px">
                        Login <i class="fa fa-arrow-right"></i></button>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\mypopper.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>

</html>