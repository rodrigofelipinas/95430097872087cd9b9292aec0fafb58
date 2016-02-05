<?php
echo "<pre>";
print_r($_SERVER);
echo "-----------".gethostbyaddr($_SERVER['REMOTE_ADDR']);;
echo "</pre>";

if (!empty($_SERVER['HTTP_CLIENT_IP']))
        echo $_SERVER['HTTP_CLIENT_IP'];
       
if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        echo $_SERVER['HTTP_X_FORWARDED_FOR'];