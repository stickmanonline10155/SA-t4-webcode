<?php
    session_start();
    $account = $_POST['account'];
    $password = $_POST['password'];

    $link = mysqli_connect('localhost','root','fallnight5137','test');

    $sql = "select distinct * from users where account ='$account' and password='$password'";

    $result = mysqli_query($link,$sql);
    if($row=mysqli_fetch_assoc($result))
    {
        $_SESSION['user_id']=$row['user_id'];
        $_SESSION['user_name']=$row['user_name'];
        header("location:homepage.php");
    }
    else
    {
        header("location:index.php?method=message&message=沒有此帳號密碼");
    }
?>