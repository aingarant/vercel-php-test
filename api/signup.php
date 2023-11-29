<?php

if ($_SERVER[REQUEST_METHOD] === 'POST') {

  pecho "something post";
}

else {
  
    return echo "Only POST requests are allowed";
  
}

  ?>