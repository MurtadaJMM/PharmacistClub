<?php
require "ofiles/operations.php";
require "ofiles/conn.php";
 $getclass=new post();


?>
<html>
<head>
<title>PharmacistClub</title>
<link rel="stylesheet" type="text/css" href="styles/indexStyle2.css" />
</head>
<body>
<div id="container">
    <div id="left">
        <img id="img" src="ofiles/logo2.png"  alt="" style="display: block; width: 70% ;margin-left: auto;margin-right: auto;">
        <div id="categories">
            <h3>Categories</h3>
            <a href="index.php">News</a>
            <a href="makeNewPost.php">Make new post</a>
            <a href="misstakeninformation.php">Misstaken Informations</a>
            <a href="?">Subscribe</a>
            <a href="?">About</a>
            <a href="?">Contact usS</a>
        </div>
    </div>
    <div id="center">
        <h2>Wellcome To</h2>
        <h1>Pharmacist Club</h1>
        <div id="newborder">
                
                <?php
                    $getclass->getInformations($conn);
                ?>

        </div>
        <div id="space">
</div>
    </div>
    <div id="right">
       <label><?php echo $date =  date("Y-m-d")  ; ?></label><br>
       <label><?php echo $date =  date("D")  ; ?></label>

    </div>
    <div id="end">
    
</div>
</div>

</body>

</html>