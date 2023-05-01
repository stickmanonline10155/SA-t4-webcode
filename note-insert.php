<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/937e93c93c.js" crossorigin="anonymous"></script>
    <title>筆記編輯</title>
    <script src="https://cdn.tiny.cloud/1/12f7tfrytkoj49tdwch4ft81l3qgcp7cd36l7e4gr45irzy7/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body style="background-color: rgb(230, 230, 230);">
    <!--導覽列-->
    <div class="note-nav">

        <div class="last-page-button">
            <a href="./note-file.php"><i class="fa-solid fa-chevron-left fa-lg" style="color: #ffffff;"></i></a>
        </div>

        <form  method=post action="dblink.php">
        <input type=hidden name="dbaction" value="note-insert">
            <textarea align="center" class="note-nav-title" name="title" rows="1" cols="50" placeholder="請輸入標題" required style="resize: none; background-color: #4c576d; border-color: #4c576d; text-align: center; color:#ffffff"></textarea>
        
    </div>
    <div>
        <div class="note-tool">
            
        </div>
    </div>
    <!--筆記編輯-->
    <form>
      <textarea id="basic-example">
        
      </textarea>
      <button name="submitbtn"></button>
      <script>
      tinymce.init({
        selector: 'textarea#basic-example',
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
        'alignright alignjustify | bullist numlist outdent indent | ' +
        'removeformat | help |'+'searchreplace | save',
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        
      });
      tinymce.activeEditor.execCommand('mceSave');
      tinymce.activeEditor.execCommand('SearchReplace');

      
      </script>
    </form>    

    
</body>
</html>
