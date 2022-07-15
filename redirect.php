<?php
$text = $_POST['text'];
$ad = $_POST['address'];
echo '<meta http-equiv="refresh" content="0;URL=https://'.$ad.'/share?text='.$text.'">';
?>