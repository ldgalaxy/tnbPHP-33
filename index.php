<?php

$user_ip = gethostbyname('localhost');

function echo_ip(){
   global $user_ip; 
   $string = 'Your IP address is: ' . $user_ip;
   echo $string;
}

echo_ip();

?>
