<?php
$servername="localhost";
$username="root";
$password="";
$database_name="database123";

$conn=mysqli_connect($servername,$username,$password,$database_name);
if(!$conn)
{
    die("Connection failed:" . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $pn = $_POST['pn'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $sql="INSERT INTO `regdetail` (`fname`, `lname`, `pn`, `gender`, `age`, `email`) VALUES ('$fname', '$lname', '$pn', '$gender', '$age', '$email')";
    $result=mysqli_query($conn,$sql);   
    if($result){
        header("location:website1.php");
    }
    
    mysqli_close($conn);

}