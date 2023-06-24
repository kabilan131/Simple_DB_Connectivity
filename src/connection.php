<?php
$uname=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$con=mysqli_connect("localhost","root","","python");
$query="insert into `students` values('$uname','$email','$password',2)";
mysqli_query($con,$query);
$data="select * from students";
$execution=mysqli_query($con,$data);
if($execution){
    echo "<center><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><h1 style='color:blue;'>Sign Up Successfully</h1></center>";
}
/*
while($row=mysqli_fetch_array($execution)){
    echo $row['firstname']."<br />";
}*/
?>