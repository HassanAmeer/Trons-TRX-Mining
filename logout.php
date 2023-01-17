<?php
unset($_COOKIE['coklog']);
setcookie('coklog','hdj', time() - 3600);
 header('location: index.php');
?>