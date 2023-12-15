<?php


class post{

    public $conn;
    public $title;
    public $text;
    public $poster;
    public $email;
    public $dt;
    
    // functions
    //set value
    function set_conn($conn) {
      $this->conn = $conn;
    }
    function set_title($title) {
        $this->title = $title;
      }
      function set_text($text) {
        $this->text = $text;
      }
      function set_poster($poster) {
        $this->poster = $poster;
      }
      function set_email($email) {
        $this->email = $email;
      }
      function set_dt($dt){
        $this->dt=$dt;
      }

      //post value
      function postinformations($conn,$title,$text,$dt){
        
        $sql="INSERT INTO news (title, text, dt)
        VALUES ('$title','$text','$dt')";
        if (mysqli_query($conn, $sql)) {
            echo "infomation recorded successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }


      }

      // get new informations function ...
      function getInformations($conn){

        $sql="SELECT title, text , dt FROM news ORDER BY id DESC;";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
            echo' 
            <p  dir="auto">
                    <strong  dir="auto">'.$row['title'].' </strong><br>
                    '.$row['text'].' 
                  
                <br><span>'.$row['dt'].'</span></p>
                
            
            ';
          }
        }

       



        
        
        
      }

      
    

}