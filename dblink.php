<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dbaction = $_POST['dbaction'];
        
        $user_id = $_POST['user_id'];
        $user_name =$_POST['user_name'];
        $account =$_POST['account'];
        $password =$_POST['password'];

        $note_id =$_POST['note_id'];
        $title =$_POST['title'];
        $content =$_POST['content'];

        $item_id =$_POST['item_id'];
        $item_name =$_POST['item_name'];
        $item_descript =$_POST['item_descript'];
        
        
        $link=mysqli_connect('localhost','root','fallnight5137','test');


        if($dbaction=="members-insert"){
            //這裡是新增的語法
	        $sql  = "insert into users (user_id,user_name, account, password) values ('$user_id','$user_name', '$account', '$password')";
            if(mysqli_query($link,$sql))
	            {   
                    header("Location:login.php");
	            }
	        else
	            {
	                header("Location:addf.php");
	            }
        }
        elseif ($dbaction=="note-insert"){
            $sql  = "insert into notes (note_id, title, content) values ('$note_id', '$title', '$content')";
            if(mysqli_query($link,$sql))
	            {
		            header("Location:note-file.php");
	            }
	        else
	            {
	                header("Location:addf.php?");
	            }
        }

        elseif ($dbaction == "item_insert"){
            $sql = "insert into sticker_item (item_id, item_descript) values ('$item_id', '$item_descript')";
            if(mysqli_query($link,$sql))
                    {   
                        header("Location:item.php");
                    }
                else
                    {
                        header("Location:addf.php");
                    }
        }
       
    ?>
</body>
</html>