<?php

$uname="admin";//As of now static, when DB is involved we can retrive from DB 
$pwd="admin";//As of now static, when DB is involved we can retrive from DB 

session_start();

if(isset($_SESSION['uname'])){
    echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
    echo "<br><a href='logout.php'><input type= button value=logout name=logout></a>";
}
else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        echo "<script>location.href='welcome.php'</script>";
    }
    else{
        echo "<script>alert('Username or password is incorrrect!')</script>";
        echo "<script>location.href='login.php'</script>";

    }
}