<?php
  
  include_once 'header.php';

?>

     <div class="form">
      <h1>Clothing Login</h1>
    <form action="includes/login.inc.php" method= "post">
    
    <input type="text" id="fname" name="uid" placeholder="email / username">

    <input type="password" id="lname" name="pwd" placeholder="password">

    <button name= "submit" type = "submit">Login</button>
    </form>
    <?php
    if(isset($_Get["error"])){
      if($_Get["error"]== "emptyinput"){
        echo '<div class="error">Fill in the all fields</div>';
      }elseif ($_Get["error"]== "invaliduid"){
        echo '<div class="error">Invalid Details!</div>';
      }
      elseif ($_Get["error"]== "stmtfailed"){
        echo '<div class="error">Something went wrong!</div>';
      }elseif ($_Get["error"]== "none"){
        echo '<div class="error">Account created!</div>';
      }
    }
?>
    <p>New Here ? <a href="signup.php">Rejister</a></p>
    </div>

    <?php
  
     include_once 'footer.php'
 
    ?>