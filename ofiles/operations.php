<?php


class post{

    public $conn;
    public $title;
    public $text;
    public $poster;
    public $email;
    
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

      //post value
      function postinformations($conn,$title,$text){
        
        $sql="INSERT INTO news (title, text)
        VALUES ('$title','$text')";
        if (mysqli_query($conn, $sql)) {
            echo "infomation recorded successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }


      }

      // get new informations function ...

      
    

}