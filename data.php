<?php

include('connect.php');

echo '<h2>Registered Users - <a href="export.php">Export to Ms Excel</a></h2>';

$res = mysqli_query($db,"select * from registration order by id desc");
$num = mysqli_num_rows($res);

echo '<h3> Total Records: '.$num.'</h3>';
for($i=0; $i<$num; $i++)
{
    $row = mysqli_fetch_array($res);
    echo 'Date: '.date('D d M Y h:i:s',strtotime($row['date_created'])).'<br>';
    echo 'Full name: '.$row['fullname'].'<br>';
    echo 'Email: '.$row['email'].'<br>';
    echo 'Phone: '.$row['phone'].'<br>';
    echo 'Program: '.$row['program'].'<br>';
    echo 'Skill: '.$row['skill'].'<br>';
    echo '<hr>';
}
?>