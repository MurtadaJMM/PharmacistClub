<?php
    require "conn.php";


    $idhere=$_GET['id'];
    $sql="SELECT poster,dt,title, content, email FROM postinfo WHERE id > '".$idhere."' ORDER BY id DESC limit 10;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          echo' <div id="displaydiv"><div id="tow"> 
          <span>   by: '.$row['poster'].'</span>
          <strong id="title">'.$row['dt'].'</strong></div>
          <h3 id="dt">'.$row['title'].'</h3>
          <p>'.$row['content'].'</p>
          <h3 id="em">by: '.$row['email'].'</h3></div>
          ';
          $idhere++;
        }
        echo '<button type="button" onclick="getmore('.$idhere.')" >load more</button>';
      } 
    
    
    
    ?>
  