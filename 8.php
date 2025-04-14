<?php
    //啟動Session機制，要在最上面
    session_start();
    //檢查session裡有沒有counter這個變數
    if (!isset($_SESSION["counter"]))
        //沒有的話就設為1
        $_SESSION["counter"] = 1;
    else
        // 如果已經有了，就+1
        $_SESSION["counter"]++;
    //顯示目前的數值
    echo "counter=" . $_SESSION["counter"];
    // 提供一個連結可以重置計數器
    echo "<br><a href=9.reset_counter.php>重置counter</a>";
?>
