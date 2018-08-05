<div style="display:none">
<?php
session_start();
$dirf = '../images';
$dir  = scandir($dirf);
foreach ($dir as $file) {
if (($file != '..') && ($file != '.')) {
    echo "<img src='../images/$file' />";
    }
}
$_SESSION['time'] = time();
?>
</div>