<?php
//start session
session_start();
//Connect the database
require_once "conn.php";
$conn = MySQLDatabase::connect();

$result = 1;

$username = $_POST["username"];
$password = $_POST["password"];
$isrem = $_POST["isRem"];


if($username =="" || $password==""){
    $result = 104;
    exit;
}
else {
    $query = $conn->prepare("select UserID,Hash,Username from user where UserName = ? or MobilePhone = ? limit 0,1");
    $query ->bind_param("ss",$username,$username);
    $query ->execute();
    $query ->bind_result($UserID, $Hash,$mUsername);

    if (!$UserID) {
        $result = 102;
    }
    else {
        if (password_verify($password, $Hash )==true) {
            $_SESSION['username'] = $mUsername;
            $_SESSION['userid'] = $UserID;
            //Judge whether need to create cookie
            if($isrem==1){
                setcookie("username",$username,time()+3600*24*30);
                setcookie("password",$Hash,time()+3600*24*30);
            }
            $result = 101;
        } else {
            //Wrong password
            echo "Wrong password";
            $result = 103;
        }
    }
    $query ->close();
}
echo $result;
/**
 * Created by PhpStorm.
 * User: Edison, edited by Charles
 * Date: 2017/5/12
 * Time: 1:10
 */
?>