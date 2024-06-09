<?php
  if(isset($_SESSION['username'])){
    $username=$_SESSION['username'];
    echo "<h3 style='display:inline;'>$username</h3>";
  } 
?>