<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['submit'])) {
        # code...
        $con=mysqli_connect('localhost','root',"",'riyaj university');
        if ($con) {
            # code...
            echo"Connected";
        }
        else{
            echo"Try again";
        }
    }
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];

    $sql="INSERT INTO `github`(`name`, `email`, `phone number`, `password`) VALUES ('$name','$email','$number','$password')";
    $query=mysqli_query($con,$sql);
    if ($query) {
        # code...
        echo"Data Inserted";
    }
    else{
        echo"Try again Please";
    }


?>
</body>
</html>