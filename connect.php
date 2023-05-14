
<?php
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="Yashu@123";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("Connection to this database is failed due to ".mysqli_connect_error());
    }
    // echo "Success conected to DB";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $Email = $_POST['Email'];
    $Phone =$_POST['Phone'];
    $address = $_POST['address'];
    $more = $_POST['more'];
    $option = $_POST['option'];

    $sql = "INSERT INTO `test`.`regestration` (`ID`, `name`, `Gender`, `Email`, `phone`, `address`, `More`, `Options`) VALUES ('$name', '$gender', '$Email', '$Phone', '$address', '$more', '$option')";
    // echo $sql;

    if($con -> query($sql) == true)
    {
        echo "Successfully Iserted";
    }else{
        echo "Error in insertion";
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close();
}
?>