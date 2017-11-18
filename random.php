<?php
require 'db.php';
$action = $_POST['action'];
if ($action == NULL){
$action = 'login_page';
}

if ($action == 'login.php'){
header('Location: login.html');
}

else if ($action == 'test_user_valid'){
$email = $_POST['reg_uname'];
$pass = $_POST['reg_password'];
$sql = "SELECT* FROM accounts WHERE email = '$email' ";
$result = runQuery($sql);
if(count($results)>0){
if($results[0]['password'] == $pass){
$fname = $results[0]['fname'];
$lname = $results[0]['lname'];
header('Location: task.php?lname=$lname&fname=$fname');
}
else{
header('Location: badlogin.html');
}
}


?>




task.php

<?php

$lname = $_GET['lname'];
$fname = $_GET['fname'];
echo "Welcome ".$fname." ".$lname;