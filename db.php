<?php
$connection = mysqli_connect('localhost', 'ebusiness011', 'wfp1fsCFup',
'ebusiness011');
if ($connection -> connect_errno) {
echo "Failed to connect to MySQL: " . $connection -> connect_errno;
exit();
}
?>
