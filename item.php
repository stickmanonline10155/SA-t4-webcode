<!DOCTYPE html>
<html>

<head>
<title>筆記系統</title>
<meta charset="UTF-8">
<!-- 響應式網站 -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Boostrap 導入程式 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!--匯入CSS-->
<link rel="stylesheet" href="新增便利貼.css">
</head>

<body>
<!-- 按鈕 -->

<a href="#" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">+</a>

<!-- 跳出視窗內容 -->

<div class="modal fade" id="loginModal">
<div class="modal-dialog">
<div class="modal-content">
<!-- Header -->
<div class="modal-header">
<h3>新增便利貼：</h3>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<!-- Body -->
<div class="modal-body">
<!-- 登入表單 -->
<form method="post" action="dblink.php">
<!-- 輸入便利貼內容 -->
<input type=hidden name="dbaction" value="item_insert">
<div class="form-group">
<input type="text" name="item_descript" class="account form-controll" placeholder="+">
</div>

<!-- 送出按鈕 -->
<button type="submit" class="btn btn-info"> ✓ </button>

</form>

</div>



</div>
</div>
</div>
<!--便利貼頁面-->
<header>
    <div class="header-container">
        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div> 
        <div class="logo">
            <p>便利貼</p>
        </div>
    </div>
</header>
<main>
    <div class="square yellow">
        <div class="square-content">
            <p>2023/4/16（日）</p>
            <p>經濟學</p>
            <p>統計學</p>
        </div>
    </div>
    <div class="square yellow">
        <div class="square-content">
            <p>2023/4/16（日）</p>
            <p>微積分</p>
            <p>會計學</p>
        </div>
    </div>
</main>
</body>


</html>