<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/937e93c93c.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #4c576d;">
<style>
.login{
    position:absolute;
    width: 1000px; 
    height:600px;
    left:118px;
    top:50px;
    
    background: #fff;
    border-radius:20px
}
.login-img{
    width:300px;
    float:left;
    padding-top: 100px;
    margin-top: 50px;
    margin-left: 200px;
}
.login-img img{
    display: block;
    width:100%
}

.login-content{
    float:right;
    width:500px;
    padding:110px 200px 0 30px;
}

</style>
<!-- end of style css -->

<div 
    style="position:absolute;width: 1000px;height:600px;left:118px;top:50px;background: #fff;border-radius:20px;">

<div style="width:300px;float:left;padding-top: 100px;margin-top: 50px;margin-left: 200px;">
    <img src="images/signup-image.jpg" alt="login-img" style="display: block;width:100%">
        
</div>

<div style="font-family: Microsoft JhengHei; float:right;width:500px;padding:110px 200px 0 30px;">

    <form  method=post action="dblink.php">
    <input type=hidden name="dbaction" value="members-insert">
        <br>
        
        <i class="fa-solid fa-user fa-lg"> </i>
        <input type=text name="user_name" class="form-control" required placeholder="請輸入名字"/>
        <br>
        <i class="fa-solid fa-envelope fa-lg"></i>
        <input type=text name="account" class="form-control" required placeholder="請輸入帳號" />
        
        <br>
        
        <i class="fa-solid fa-lock fa-lg"> </i>
        <input type=password name="password" class="form-control" required placeholder="請輸入密碼" />
        
        
        <i class="fa-regular fa-lock-keyhole"></i>
        <input type=password name="password" class="form-control" required placeholder="請再次輸入密碼" />
        <br>
        
        <input type=submit value = "送出">

        <!--<a class="btn btn-primary" href="#" role="button"></a>-->

    </form>
</div>
</div>
    
    
</body>
</html>