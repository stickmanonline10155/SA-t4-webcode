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
    
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--導覽列-->
<nav>
    <div class="sidebar">
        <a href="javascript:void(0)"><i class="fa-solid fa-xmark" onclick="hideMenu()"></i></a>
        
        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
        <!-- <i class="fa fa-times" onclick="hideMenu()"></i>--->
        <div class="logo">
            <!-- <i class="fa-solid fa-bars"></i> -->
            <a href="homepage.html"><h3 align = "center">LOGO</h3></a>
        </div>
        <div class="search-box">
            <input type="text" class="search" placeholder="搜尋..." >
        </div>
        <div>
        <ul id="homepage-menu">
            <li><a href="note-file.html">筆記</a></li>
            <li><a href="sticker.html">便利貼</a></li>
            <li><a href="#"><i class="fa-solid fa-calendar-lines"></i>行事曆</a></li>
            <li><a href="#">記帳</a></li>
            <li><a href="schedule-file.html">課表</a></li>
        </ul>
        </div>
        <div class="dark-mode">
            <span><i class="fa-solid fa-moon"></i></span>
        </div>
        
    </div>
    <a href="javascript:void(0)"><i class="fa-solid fa-bars" onclick="showMenu()"></i></a>
</nav>
<div class="note-nav">
    <div class="note-file-nav-title" >
        <h5>筆記</h5>
    </div>
    
</div>


<!--new 筆記分類-->
<ul class="nav nav-tabs" id="myTab" role="tablist">
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
<div class="add-note">
    <a href="note_insert.php" style="text-decoration: none;">+</a>
</div>
    

<!---------JAVASCRIPT CODE--------------->
<script src="script.js"></script>
</body>
</html>
