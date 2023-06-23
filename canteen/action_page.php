<?php
include('config.php');
echo "<h1>Values From Login</h1>";
$uid=$_POST['uname'];
$pwd=$_POST['psw'];
echo "<br>User ID: ".$uid;
echo "<br>Password: ".$pwd;

echo $sql= "SELECT * FROM user_tbl where uid='".$uid."' and pwd='".$pwd."'";
$results = mysqli_query($db, $sql);
echo "<h1>Values From database</h1>";
$verify=false;
while ($row = mysqli_fetch_array($results)){

    header('location:dashboard.php');
$verify=true;

}
if($verify==false){
    header('location:login.php?status=fail');
}


?>