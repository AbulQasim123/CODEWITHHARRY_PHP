<?php 
    include 'mysql_connect.php';
    echo '<h4>Function in php</h4>'; 
        // function in php
    function process_marks($mark_array){
        $sum=0;
        $average=1;
        foreach ($mark_array as $value) {
            $sum+= $value;
        }
        return $sum;
        
    }
    $Rohandas= [85,78,85,63,85,85];
    $summarkrohan= process_marks($Rohandas);
    echo "Total mark scored by Rohandas out of 600 is: ". $summarkrohan."<br>";
    $harrydas= [95,85,75,65,74,52];    
    $sum_mark_rohan= process_marks($harrydas);
    echo "Total mark scored by harrydas out of 600 is: ".$sum_mark_rohan."<br>";

        // Multidimensional array
    echo '<h4>Multidiamensional array in php.</h4>';
        // These are called indexed array
    $Array = array('This','That','What');
    echo $Array[0];
    echo $Array[1];
    echo $Array[2];
    echo "<br>";
        // These are called associative array
    $Country_capital= array('India'=>'Delhi', 'turky'=>'Ankara', 'Pakistan'=>'Islamabad');
    foreach ($Country_capital as $Country => $Capital) {
        echo "Capital of $Country is $Capital."."<br>";
    }
        // These are called multidiamensional array
    $Multi_dim= array(array(2,5,7,8),array(1,2,3,4),array(4,8,5,6));
    // echo "<pre>";
    // print_r($Multi_dim);
    // // echo var_dump($Multi_dim);
    // echo "</pre>";
    for ($i=0; $i < count($Multi_dim); $i++) { 
        for ($j=0; $j < count($Multi_dim[$i]); $j++) { 
            echo $Multi_dim[$i][$j];
            echo " ";
        }
    }
    echo "<br>";
        // global variable in php.
    echo "<h4>Global variable in php.</h4>";
    $val = 520;
    function print_value(){
        $val = 101;
        global $val;
        echo "The global variable value is: ".$val."<br>";
    }
    print_value();

    // Get And Post Method in php
    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        $user_name= $_POST['user_name'];
        $pass_word= $_POST['pass_word'];
        if (!empty($user_name and $pass_word)) {
            echo '<div class="alert alert-success alert-dismiss show">
                    <b>Success !</b>
                    Your Username ' .$user_name." and possword " .$pass_word. ' has been submitted successfully.
                    <button type="button" class="close" data-dismiss="alert">
                        <span>&times;</span>
                    </button>
                  </div>';
        }else{
            echo "<b class='text-danger'>Error ! Please fill out of these field.</b>";
        }
    }

    // Saving data into database
    // $saving_btn= $_POST['saving_btn'];
    if (isset($_POST['saving_btn'])) {
        if ($_SERVER['REQUEST_METHOD']== 'POST') {
            $your_name= $_POST['your_name'];
            $your_email= $_POST['your_email'];
            $your_city= $_POST['your_city'];
            if (!empty($your_name and $your_email and $your_city)) {
                $query= " INSERT INTO `student_record` (`Name`,`Email`,`City`) VALUES ('$your_name','$your_email','$your_city') ";
                $result= mysqli_query($conn, $query);
                mysqli_close($conn);
                if ($result) {
                    echo '<div class="alert alert-success alert-dismiss show">
                        <b>Success !</b> 
                        Your Record has been inserted successfully.
                        <button type="button" class="close" data-dismiss="alert">
                            <span>&times;</span>
                        </button>
                      </div>';
                }else{
                    echo "<b class'text-muted text-danger'>The Record was not inserted successfully. because of this error</b>". mysqli_error($conn);
                }
            }else{
                echo "<b class='text-danger'>Error ! Please fill out of these field.</b>";
            }
        }
    }
        // DELETE RECORD FROM DATABASE SQL COMMAND (WHERE and LIMIT Clause)
    // $query= " DELETE FROM `student_record` WHERE `city`= 'Mumbai' ";
    // $query= " DELETE FROM `student_record` WHERE `city`= 'bagi' LIMIT 3 ";
    // $result= mysql_query($query, $conn);
    // $affected_row= mysql_affected_rows($conn). "<br>";
    // echo "<b class='text-info'>Number of affected rows: </b>" .$affected_row;
    // if ($result) {
    //     echo "<b class='text-success'>Success ! Record has been deleted successfully.</b>";
    // }else{
    //     echo "<b class='text-danger'>Error ! Record was not deleted successfully.</b>";
    // }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP...</title>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist\css\bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <h4>Get and Post method in php.</h4>
                <form action="" method="POST">
                    <label for="user_name" class="font-weight-bold">Username:</label>
                    <input type="text" name="user_name" id="user_name" class="form-control" placeholder="Username">
                    <label for="pass_word" class="font-weight-bold">Password:</label>
                    <input type="text" name="pass_word" id="pass_word" class="form-control" placeholder="Password">
                    <input type="submit" value="Submit" class="btn btn-outline-success btn-block my-2">
                </form>
            </div>
            <div class="col-lg-4">
                <h4>Saving data to the database</h4>
                <form action="index.php" method="POST">
                    <label for="your_name" class="font-weight-bold">Name:</label>
                    <input type="text" name="your_name" id="your_name" class="form-control">
                    <label for="your_email" class="font-weight-bold">Email:</label>
                    <input type="text" name="your_email" id="your_email" class="form-control">
                    <label for="your_city" class="font-weight-bold">City:</label>
                    <input type="text" name="your_city" id="your_city" class="form-control">
                    <input type="submit" value="Insert" name="saving_btn"
                        class="btn btn-outline-primary btn-block my-2">
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\myjquery.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\mypopper.js"></script>
    <script type="text/javascript" src="bootstrap-4.0.0-dist\js\bootstrap.min.js"></script>
</body>

</html>