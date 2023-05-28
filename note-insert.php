<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/937e93c93c.js" crossorigin="anonymous"></script>
  
    
    <title>筆記編輯</title>
    <script src="https://cdn.tiny.cloud/1/12f7tfrytkoj49tdwch4ft81l3qgcp7cd36l7e4gr45irzy7/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link href="https://cdn.jsdelivr.net/npm/tinymce@6.0.0/build/skins/content/default/content.css" rel="stylesheet">
    
</head>
<body style="background-color: rgb(230, 230, 230);">
    <!--導覽列-->
    <div class="note-nav">
 
        <div class="last-page-button">
            <a href="./note-file.php"><i class="fa-solid fa-chevron-left fa-lg" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
        </div>
        
        <select name="categories" style="background-color:#4c576d;color:#ffffff;border-color:transparent;">
          <option disabled>請選擇分類</option>
          <option value="data">資料結構</option>
          <option value="net">網路概論</option>
          <option value="eco">經濟學</option>
          <option value="sa">SA</option>
        </select>


        <form  method=post action="dblink.php">
        <input type=hidden name="dbaction" value="note-insert">
            <textarea align="center" name="title" rows="1" cols="50" placeholder="請輸入標題" required style="margin-right:100px;background-color: #4c576d; border-color: #4c576d; text-align: center; color:#ffffff"></textarea>
        
    </div>
    
    <!--筆記編輯-->
    <form method="post">
      <textarea id="textarea">
        
      </textarea>
      <button name="save"></button>
      
      <script>
      tinymce.init({
        selector: '#textarea',
        height: 500,
        menubar: false,
        plugins: [
          'advlist autolink lists link image charmap print preview anchor',
          'searchreplace visualblocks code fullscreen',
          'insertdatetime media table paste code help wordcount','searchreplace',
          'save'
          
        ],
        toolbar: 'undo redo | formatselect | ' +
        'bold italic backcolor | alignleft aligncenter ' +
        'alignright alignjustify | bullist numlist outdent indent | '+
        'removeformat | help |'+'searchreplace | save |',
       
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        
      });
      tinymce.activeEditor.execCommand('mceSave');
      tinymce.activeEditor.execCommand('SearchReplace');

      
      </script>
    </form>

</body>
</html>
