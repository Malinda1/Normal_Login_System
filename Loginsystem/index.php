<?php
  
  include_once 'header.php';

?>
    <h1>Hello! wellcome to for Clothing web site 
      <?php
      if(isset($_SESSION["username"])){
        echo $_SESSION["username"] . '!';
      }else{
        echo 'user!';
      }
      
      ?> </h1>
 
    <?php
  
     include_once 'footer.php'

    ?>