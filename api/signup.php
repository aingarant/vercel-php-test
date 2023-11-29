<?php

if ($_SERVER[REQUEST_METHOD] === 'POST') {

  print_r($_POST)
}

else {
  
    echo "Only POST requests are allowed";
  
}

  ?>