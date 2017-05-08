<?php session_start();

if(isset($_SESSION['flag'])&&$_SESSION['flag']==1){
    header("Location:主页");
    exit;
}

include('VerificationCode.php');
$vcode = new Vcode();
$_SESSION['code'] = $vcode->getCode();
$vcode->outImg();

include('conn.php');//make sure the path is correct
$db = new MySQLDatabase();// create a Database object
$db->connect("root","WISteam2017!","cooking_world");


$UserName = $_POST['username'];
$PassWord = md5($_POST['password']);

if($action == 'login'){
    $str = "select * from user where UserName = '".$UserName."'
            or MobilePhone = '".$UserName."' ";
    $result = mysqli_query($str);
    if(!$result){
        echo "The user had not signed in, and please sign in";
        exit;
    }
    $row = mysqli_fetch_row($result);
    if($PassWord == $row[2]){
        $_SESSION['flag'] =1;
        header("Location:主页");
        exit;
    }
    else{
        echo"The password is wrong, please input it again";
    }


}
?>