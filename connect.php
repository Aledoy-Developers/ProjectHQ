<?php


$db = mysqli_connect('localhost','productl_db', 'certification231', 'productl_db');

if(!$db)
{
   echo 'Cannot connect to db';
   exit;
}

?>