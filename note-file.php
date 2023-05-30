<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>筆記</title>
    <link rel="stylesheet" href="./login-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!--new-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/937e93c93c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/@popperjs/core@2">
    <link rel="stylesheet" href="style.css">
    <style>
        
/* --------HEADER---------- */
.headbar{
    background-color: #4c576d;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    position: fixed;
    top: 0; left: 0; right: 0;
    z-index: 1000;
}

.main-link{
    display: flex;
    align-items: center;
    margin-left: 70px;
}

.main-link img{
    width: 45px;
    height: 45px;
    border-radius: 50%;
    margin-right: 10px;
}

.mainlogo{
    margin-left: 10px;
    font-size: 24px;
    margin-top: 10px;
    margin-bottom: 10px;
    text-transform: uppercase;
}

.mainlogo:hover{
    color: #a1b0cd;
    /* padding-bottom: .1rem; */
}

.headbar a:hover{
    text-decoration: underline #a1b0cd;
    color: #a1b0cd;
    /* padding-bottom: .1rem; */
}

.upright-func {
    display: flex;
}

.upright-func a{
    font-size: 15px;

}

.upright-func1{
    width: 50px;
    margin-right: 10px;
}

.upright-func2{
    width: 50px;
    margin-right: 80px;    
}
.upright-func1 a{
    position: relative;
    align-items: center;
    color: rgb(250, 249, 249);
    font-size: 14px;
    display: table;
    width: 300px;
    padding: 5px;
}

.upright-func2 a{
    position: relative;
    color: rgb(250, 249, 249);
    font-size: 14px;
    display: table;
    width: 300px;
    padding: 5px;
}

/* ============ nav - SIDEBAR ============== */
.sidebar{
    position: fixed;
    top: 17%;
    bottom: 0;
    height: 70%;
    left: 0;
    background-color: #fff;
    width: 75px;
    overflow: hidden;
    transition: width 0.2s linear;
    box-shadow: 0px 5px 35px rgba(0, 0, 0, 0.1);
    border-radius: 12px;
    z-index: 1001;
}
.sidebar a{
    position: relative;
    color: rgb(250, 249, 249);
    font-size: 14px;
    display: table;
    width: 300px;
    padding: 5px;
}
.nav-item1{
    position: relative;
    top: 10px;
    margin-left: 10px;
    font-size: 16px;
    color: #4c576d;
}
.sidebar a:hover{
    background: #c4d5f5;
}

.sidebar:hover{
    width: 200px;
    transition: all 0.5s ease;
}
.sidebar i{
    color: #4c576d;
    position: relative;
    width: 70px;
    height: 40px;
    top: 14px;
    font-size: 20px;
    text-align: center;
}
.logout{
    position: absolute;
    bottom: 0;
}
    </style>
    
</head>
<body>
<!--導覽列-->

<nav class="sidebar">
    <ul>
        <li><a href="#">
            <!-- <i class="fa-solid fa-bars"></i> -->
            <i class="fa-solid fa-house"></i>
            <span class="nav-item1">首頁</span>
        </a></li>
        <li><a href="#">
            <i class="fa-solid fa-book"></i>
            <span class="nav-item1">筆記</span>
        </a></li>
        <li><a href="#">
            <i class="fa-solid fa-note-sticky"></i>
            <span class="nav-item1">便利貼</span>
        </a></li>
        <li><a href="#">
            <i class="fa-solid fa-calendar-days"></i>
            <span class="nav-item1">行事曆</span>
        </a></li>
        <li><a href="#">
            <i class="fa-solid fa-comments-dollar"></i>
            <span class="nav-item1">記帳</span>
        </a></li>
        <li><a href="#">
            <i class="fa-solid fa-school"></i>
            <span class="nav-item1">課表</span>
        </a></li>
        <li><a href="#">
            <i class="fa-solid fa-clock"></i>
            <span class="nav-item1">番茄鐘</span>
        </a></li>
        <li><a href="#">
            <i class="fa-solid fa-right-to-bracket"></i>
            <span class="nav-item1">登入</span>
        </a></li>
        <li><a href="#" class="logout">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="nav-item1">登出</span>
        </a></li>
        
    </ul>
</nav>

<header class="headbar">
  <div href="#" class="main-link">
      <i class="fa-solid fa-book fa-xl" style="color:white;margin-right: 10px;"></i>
      <div style="color: white;margin-left: 10px;font-size: 20px;margin-top: 10px;margin-bottom: 10px;">筆記</div>
      <a href="homepage.html" >
        <div 
        style="color: white; 
        width: 200px; 
        margin-left: 500px;
        font-size: 23px;
        margin-top: 10px;
        margin-bottom: 10px;" class="logotitle">T4 NoteSystem</div>
      </a>
  </div>
  
  <div class="upright-func">
    <div class="upright-func1">
        <a href="#login">Login</a>
    </div>
    <div class="upright-func2">
        <a href="#sign up">Sign up</a>
    </div>
</div>
</header>


<!--new 筆記分類-->
<ul class="nav nav-tabs" id="myTab" role="tablist" style="margin-top:78px;">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">所有筆記</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">資料結構</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">網路概論</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="economics-tab" data-bs-toggle="tab" data-bs-target="#economics" type="button" role="tab" aria-controls="economics" aria-selected="false">經濟學</button>
      </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="add-tab" type="button">+</button>
    </li>
      
  </ul>
  <!--新增分類按鈕js-->
  <script>
    //在網頁找到'id=add-tab'，並儲存到'addButton'變數
    const addButton = document.getElementById('add-tab');

    //在網頁找到'id=mytab'，並儲存到'navList'變數
    const navList = document.getElementById('myTab');

    //在'addButton'上註冊一個點擊事件的監聽器
    addButton.addEventListener('click', () => {

    //建立一個新的'li'元素，並儲存到'newTab'變數
    const newTab = document.createElement('li');

    //將'newTab'元素的'class'屬性設為'nav-item'，讓其看起來像選項卡
    newTab.classList.add('nav-item');

    //呼叫prompt函式，顯示對話框，要求使用者輸入新檔案夾名稱，並將其輸入值儲存到'userInput‘變數中
    const userInput = prompt('請輸入新檔案夾名稱');

    //將'newTab'元素的'innerHTML'屬性設為html字符串，其中包括一個'button'元素，其文字內容是使用者輸入的值，其他屬性則是用來設置樣式和行為
    newTab.innerHTML = `
    <button class="nav-link" id="new-tab" data-bs-toggle="tab" data-bs-target="#new" type="button" role="tab" aria-controls="new" aria-selected="false">${userInput}</button>
    `;

    //將'newTab'插入到'navList'中，插入位置是在'addButton‘之前的位置，可以讓新建的標籤顯示在選項卡列表中
    navList.insertBefore(newTab, addButton.parentNode);
});

  </script>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <div class="note-file">
            <div class="note-file-icon">
                <div class="nf-title">
                        <a href="note_demo/demo_1.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                        <p align="center">演算法</p>
                    
                </div>
            </div>
        
            <div class="note-file-icon">
                <div class="nf-title">
                <a href="note_demo/demo_2.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                <p align="center">IoT演講</p>
                </div>
            </div>
        
            <div class="note-file-icon">
                <div class="nf-title">
                <a href="note_demo/demo_3.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                <p align="center">Unemployment</p>
                </div>
            </div>
        
            <div class="note-file-icon">
                <div class="nf-title">
                <a href="note_demo/demo_4.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                <p align="center">鏈結串列</p>
                </div>
            </div>
        
            <div class="note-file-icon">
                <div class="nf-title">
                <a href="note_demo/demo_5.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                <p align="center">樹狀結構</p>
                </div>
            </div>
        
            
        
        </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="note-file">
            <div class="note-file-icon">
                <div class="nf-title">
                        <a href="note_demo/demo_1.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                        <p align="center">演算法</p>
                    
                </div>
            </div>
        
            
        
            <div class="note-file-icon">
                <div class="nf-title">
                <a href="note_demo/demo_4.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                <p align="center">鏈結串列</p>
                </div>
            </div>
        
            <div class="note-file-icon">
                <div class="nf-title">
                <a href="note_demo/demo_5.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                <p align="center">樹狀結構</p>
                </div>
            </div>
        
            
        
        </div>
    </div>
    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="note-file">

            <div class="note-file-icon">
                <div class="nf-title">
                <a href="note_demo/demo_2.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
                <p align="center">IoT演講</p>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="economics" role="tabpanel" aria-labelledby="economics-tab">
        <div class="note-file">
        <div class="note-file-icon">
            <div class="nf-title">
            <a href="note_demo/demo_3.html"><img src="images/file.png" class="img-thumbnail" alt="..." style="border-color: #fff;"></a>
            <p align="center">Unemployment</p>
            </div>
        </div>
        </div>
    </div>
  </div>
<!--筆記檔案區--> 




<!--懸浮按鈕-->
<div style="position: fixed;bottom: 30px;right: 25px;">
    <a href="note_insert.php" style="text-decoration: none;display: block;
    color:white;
    font-weight:bolder;
    font-size:20px;
    background-color:#4c576d;
    border:1px solid #ccc;
    padding:7px 15px 7px 15px;
    border-radius:100%;"><i class="fa-solid fa-plus fa-sm"></i></a>
</div>
    

<!---------JAVASCRIPT CODE--------------->
<script src="script.js"></script>
</body>
</html>
