<?php
$connection = mysqli_connect('localhost', 'root', '',
    'ebusiness');
if ($connection -> connect_errno) {
    echo "Failed to connect to MySQL: " . $connection -> connect_errno;
    exit();
}
else {
    echo "Funktioniert";
}
?>
