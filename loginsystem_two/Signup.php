<?php 
    $showalert= false;
    $showerror= false;
    $requirefield= false;
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        require '_dbconnect.php';
        $username= $_POST['user_name'];
        $fullname= $_POST['full_name'];
        $gender= $_POST['gender'];
        $age= $_POST['age'];
        $address= $_POST['address'];
        $pincode= $_POST['pincode'];
        $email= $_POST['email'];
        $mobile= $_POST['mobile'];
        $password= $_POST['password'];
        if (!empty($username and $full_name and $gender and $age and $address and $pincode and $email and $email and $mobile and $password)) {
            $query= " INSERT INTO `admin_student` (`Username`,`Fullname`,`Gender`,`Age`,`Address`,`Pincode`,`Email`,`Mobile`,`Password`,`Datetime`) VALUES ('$username','$fullname','$gender','$age','$address','$pincode','$email','$mobile','$password',current_timestamp()) ";
        }else{
            $requirefield= "Please fill out of these field";
        }
        
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <style>

    </style>
</head>

<body>
    <?php require '_navbar.php' ?>
    <?php 
        if ($requirefield) {
            echo "<div id='alert_dialog'>Title</div>";
        }
    ?>
    <div class="container">
        <h4 class="text-center font-italic text-info">Please sign up to our website.</h4>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="user_name" class="font-weight-bold">
                            <i class="fas fa-user"></i>Username:
                        </label>
                        <input type="text" name="user_name" id="user_name" placeholder="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gender" class="font-weight-bold">
                            <i class="fa fa-female"></i> Gender:
                        </label>
                        <input type="text" name="gender" id="gender" placeholder="Gender" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="address" class="font-weight-bold">
                            <i class="fa fa-address-card"></i> Address:
                        </label>
                        <input type="text" name="address" id="address" placeholder="Address" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email" class="font-weight-bold">
                            <i class="fas fa-envelope"></i> Email:
                        </label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" class="font-weight-bold">
                            <i class="fas fa-eye"></i> Password:
                        </label>
                        <input type="password" name="password" id="password" placeholder="Password"
                            class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="full_name" class="font-weight-bold">FullName:</label>
                        <input type="text" name="full_name" id="full_name" placeholder="FullName" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="age" class="font-weight-bold">Age:</label>
                        <input type="number" name="age" id="age" placeholder="Age" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pincode" class="font-weight-bold">Pin Code:</label>
                        <input type="text" name="pincode" id="pincode" placeholder="Pin Code" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mobile" class="font-weight-bold">
                            <i class="fa fa-tty"></i> Mobile Number:
                        </label>
                        <input type="number" name="mobile" id="mobile" placeholder="Mobile Number" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cnfpassword" class="font-weight-bold">
                            <i class="fas fa-eye"></i> Confirm Password:
                        </label>
                        <input type="password" name="cnfpassword" id="cnfpassword" placeholder="Confirm Password"
                            class="form-control">
                    </div>
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-outline-info btn-lg" style="width: 300px;">Submit <i
                        class="fa fa-arrow-right"></i> </button>
            </center>
        </form>
    </div>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\mypopper.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-ui-1.12.1\jquery-ui.min.css"></script>
    <script type="text/javascript" src="jquery-ui-1.12.1\jquery-ui.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#alert_dialog').dialog({
                
            });
        })
    </script>
</body>

</html>