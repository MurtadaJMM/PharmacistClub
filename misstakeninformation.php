<?php
     require "ofiles/conn.php";
    
    function display($connect){
            $sql="SELECT poster,dt,title, content, email FROM postinfo ORDER BY id DESC;";
            $result = mysqli_query($connect, $sql);
          
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo' <div id="displaydiv"> <strong id="title">'.$row['dt'].'</strong><br>
                  <span>   by: '.$row['poster'].'</span>
                  <h3 id="dt">'.$row['title'].'</h3>
                  <p>'.$row['content'].'</p>
                  <h3 id="em">by: '.$row['email'].'</h3></div>';
                }
              }                                                       
    }

?>

<html>
<head>
<title>miss Taken Information</title>
<link rel="stylesheet" type="text/css" href="styles/mtistyle.css" />
</head>
<body>
<div id="container">
    <div id="left">
        <img id="img" src="ofiles/logo2.png"  alt="" style="display: block; width: 70% ;margin-left: auto;margin-right: auto;">
        <div id="categories">
            <h3>Categories</h3>
            <a href="index.php">News</a><br>
            <a href="makeNewPost.php">Make new post</a><br>
            <a href="?">Misstaken Informations</a><br>
            <a href="?">Subscribe</a><br>
            <a href="?">About</a><br>
            <a href="?">Contact usS</a>
        </div>
    </div>
    <div id="center">
        <h2>Wellcome To</h2>
        <h1>Pharmacist Club</h1>
       

            <?php 
            
            display($conn);
?>
        
        
    </div>
    <div id="right">
       <label>2023/11/17</label><br>
       <label>friday</label>

    </div>
</div>
    
</body>
</html>