<?php
  $HOSTNAME = 'localhost';
  $USERNAME = 'root';
  $PASSWORD = '';
  $DATABASE = 'survey_forms';  

  $con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD, $DATABASE);

  if ($con){
    echo "Connected";
  }else{
    die(mysqli_error($con));
  }

?>
