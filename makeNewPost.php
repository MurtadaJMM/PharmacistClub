<html>
<head>
<title>MakeNewPost</title>
<link rel="stylesheet" type="text/css" href="styles/mnpstyle.css" />
</head>
<body>
<div id="container">
    <div id="left">
        <img id="img" src="ofiles/logo2.png"  alt="" style="display: block; width: 70% ;margin-left: auto;margin-right: auto;">
        <div id="categories">
            <h3>Categories</h3>
            <a href="index.php">News</a><br>
            <a href="?">Make new post</a><br>
            <a href="misstakeninformation.php">Misstaken Informations</a><br>
            <a href="?">Subscribe</a><br>
            <a href="?">About</a><br>
            <a href="?">Contact usS</a>
        </div>
    </div>
    <div id="center">
        <h2>Wellcome To</h2>
        <h1>Pharmacist Club</h1>
        
        <h3>Misstaken Informations</h3>
        <p>the information Here is common information about medicines, their uses, interactions or dosage, but it is wrong at the same time. We are trying here to shed light on it in order to obtain the best practice of medicine in our country.</p>
       <form action="makeNewPost.php" method="post">
             <input maxlength="25" placeholder="writer name" type="text" required name="writername" id="writername" style="  border-radius: 5px;padding:5px;margin-top:10px;display: block;width:600px;margin:auto;font-size: 18px;  color: black; border: 3px solid blue;"/><br>
             <input maxlength="100" placeholder="E-mail" type="email" required name="email" id="email" style="  border-radius: 5px;padding:5px;margin-top:10px;display: block;width:600px;margin:auto;font-size: 18px;  color: blue; border: 3px solid blue;"/><br>
             <input maxlength="100" placeholder="Post Title" type="text" required name="title" id="title" style=" border-radius: 5px; padding:5px;margin-top:10px;display: block;width:600px;margin:auto;font-size: 18px;  color: blue; border: 3px solid blue;"/><br>
             <textarea maxlength="1000" placeholder="write here ..." id="content" name="content" required style=" border-radius: 5px;display: block;width: 100%;  margin: auto; border:3px solid rgb(75, 12, 12);height:300px;font-size:18px;padding: 5px;"></textarea><br>
             <input type="submit" id="submit" name="submit" value="submit"style=" border-radius: 5px;font-size:25px;display: block;margin:auto;width:100px; background-color:rgb(18, 89, 197);color:white;"/>

        </form> 
        <?php 
    require "ofiles/conn.php";
if(isset($_POST['submit'])){
        $date = strval( date("Y-m-d H:i") ) ;
    $user=$_POST['writername'];
    $content=$_POST['content'];
    $email=$_POST['email'];
    $title= $_POST['title'];    
    $sql = "INSERT INTO postinfo (poster, title, dt, content,email)
    VALUES ('$user','$title', '$date', '$content','$email')";
        if (mysqli_query($conn, $sql)) {
            echo "infomation recorded successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
}


?>
    </div>
    <div id="right">
       <label>2023/11/17</label><br>
       <label>friday</label>

    </div>
</div>
    
</body>
</html>