<!-- index.php -->

<?php
// 連接到資料庫
$servername = "localhost";
$username = "root";
$password = "fallnight5137";
$database = "test";

$link=mysqli_connect('localhost','root','fallnight5137','test');

if (!$link) {
    die("資料庫連接失敗：" . mysqli_connect_error());
}


// 執行外鍵關聯的 SQL 語句
$alterSql = "ALTER TABLE notes ADD CONSTRAINT fk_folder FOREIGN KEY (folder_id) REFERENCES folder(folder_id)";

// 從資料庫中獲取分類資料
$foldersSql = "SELECT * FROM folder";
$folderResult = mysqli_query($link, $foldersSql);

// 檢查選擇的分類
if (isset($_GET['folder_id'])) {
    $selectedFolder = $_GET['folder_id'];

    // 使用預處理語句來防止SQL注入攻擊
    $notesSql = "SELECT * FROM notes WHERE folder_id = ?";
    $stmt = mysqli_prepare($link, $notesSql);
    mysqli_stmt_bind_param($stmt, "i", $selectedFolder);
    mysqli_stmt_execute($stmt);
    $notesResult = mysqli_stmt_get_result($stmt);
} else {
    // 如果未選擇分類，顯示所有筆記資料
    $notesSql = "SELECT * FROM notes";
    $notesResult = mysqli_query($link, $notesSql);
    $notes = mysqli_fetch_all($notesResult, MYSQLI_ASSOC);
}

?>

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
            <a href="homepage.php"><h3 align = "center">LOGO</h3></a>
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
    <!-- 顯示選項卡 --> 
    <form action="" method="get">
    <label for="folder">選擇分類：</label>
    <select name="folder_id" id="folder">
        <?php
        // 從資料庫中獲取分類資料
        $foldersSql = "SELECT * FROM folder";
        $foldersResult = mysqli_query($link, $foldersSql);

        // 遍歷分類結果集，生成選項
        while ($folder = mysqli_fetch_assoc($foldersResult)) {
            $selected = '';
            if (isset($_GET['folder_id']) && $_GET['folder_id'] == $folder['folder_id']) {
                $selected = 'selected';
            }
            echo '<option value="' . $folder['folder_id'] . '" ' . $selected . '>' . $folder['folder_name'] . '</option>';
        }
        ?>
    </select>
    <input type="submit" value="選擇">
    </form>

    </ul>
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

<!-- 顯示筆記內容 -->
<div class="tab-content" id="myTabContent">
    

<?php
if ($selectedFolder == 1) {
    // 顯示所有筆記
    $notesSql = "SELECT * FROM notes";
    $notesResult = mysqli_query($link, $notesSql);
} else {
    // 顯示特定分類的筆記
    $notesSql = "SELECT * FROM notes WHERE folder_id = ?";
    $stmt = mysqli_prepare($link, $notesSql);
    mysqli_stmt_bind_param($stmt, "i", $selectedFolder);
    mysqli_stmt_execute($stmt);
    $notesResult = mysqli_stmt_get_result($stmt);
}

?>

    <div class="note-file">
        <?php
        while ($row = mysqli_fetch_assoc($notesResult)) {
            echo '<div class="note-file-icon">';
            echo '<div class="nf-title">';
            echo '<a href="note-edit.php?note_id=' . $row['note_id'] . '&title=' . urlencode($row['title']) . '"><img src="images/file.png" class="img-thumbnail file-icon" alt="..."></a>';
            echo '<p class="note-title">' . $row['title'] . '</p>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

</div>

<!--筆記檔案區-->




<!--懸浮按鈕-->
<div class="add-note">
    <a href="note-insert.php" style="text-decoration: none;">+</a>
</div>
    

<!---------JAVASCRIPT CODE--------------->
<script src="script.js"></script>

</form>   

</body>
</html>

</body>
</html>
