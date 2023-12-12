<?php
  require"ofiles/conn.php";
  require"ofiles/operations.php";
  $newspost=new post();
//........ use class for input

    if(isset($_POST['submit'])){
            $newspost->set_title($_POST['title']);
            $newspost->set_text($_POST['newstext']);

            $newspost->postinformations($conn,$newspost->title,$newspost->text);

    }

?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addnews</title>
</head>
<body>
    <form action="addnews.php" method="post">
        <input type="text" name="title" placeholder="title"/>
        <textarea placeholder="write here ..." name="newstext" required ></textarea>
        <input type="submit" name="submit"/>



    </form>   
    
</body>
</html>
