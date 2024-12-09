<?php
$servaername="localhost";
$username="root";
$password="";
$dbname="Aman";

$con=mysqli_connect('localhost','root','','Aman');
if($con)
{
    echo "Connection is successful";
}
else
{
    echo "Error".mysqli_connect_error($con);
}

$Username=$_REQUEST['name'];
$Email=$_REQUEST['email'];
$Phone=$_REQUEST['phone'];
$FoodName=$_REQUEST['foodname'];
$Address=$_REQUEST['address'];

$sql="INSERT INTO orderform VALUES('$Username','$Email','$Phone','$FoodName','$Address')";
if(mysqli_query($con,$sql))
{
    echo "Record Inserted in DataBase";
}
else
{
    echo "Error".mysqli_error($con);
}


?>