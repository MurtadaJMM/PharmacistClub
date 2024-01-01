<?php
session_start();
$_SESSION['lastid']="";
     require "ofiles/conn.php";

       
    function display($connect){
            $sql="SELECT poster,dt,title, content, email FROM postinfo ORDER BY id DESC limit 10;";
            $lastIdQuery="SELECT MAX(id) AS Largestid FROM postinfo;";
            $result = mysqli_query($connect, $sql);
            $lastIdresult = mysqli_query($connect, $lastIdQuery);
            $lastIdNow= mysqli_fetch_assoc($lastIdresult);
            $_SESSION['lastid'] = $lastIdNow['Largestid'];


             

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                  echo' <div id="displaydiv"><div id="tow"> 
                  <span dir="auto" >   by: '.$row['poster'].'</span>
                  <strong id="title" dir="auto" >'.$row['dt'].'</strong></div>
                  <h3 id="dt" dir="auto" >'.$row['title'].'</h3>
                  <p dir="auto" >'.$row['content'].'</p>
                  <h3 id="em">by: '.$row['email'].'</h3></div>
                  ';
                  --$_SESSION['lastid'];
                }
                echo '<button id="'.$_SESSION['lastid'].'" type="button" onclick="getmore('.$_SESSION['lastid'].')" >load more</button>';
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
            echo "<div id='more'></div>";
?>
        
        
    </div>
    <div id="right">
       <label>2023/11/17</label><br>
       <label>friday</label>

    </div>
</div>
    <script>
        function getmore(id){
            var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("more").innerHTML += this.responseText;
      }
    };
    xmlhttp.open("GET","ofiles/getmore.php",true);
    xmlhttp.send();

    document.getElementById(id).style.display = "none";
        }


    </script>
</body>
</html>