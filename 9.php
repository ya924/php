<?php
    //啟用session機制
    session_start();
    //清除counter這個session變數
    unset($_SESSION["counter"]);
    //顯示訊息給使用者
    echo "counter重置成功....";
    //使用 meta 標籤在 2 秒後自動導回 8.counter.php
    echo "<meta http-equiv=REFRESH content='2; url=8.counter.php'>";
?>
