<?php
    //啟動session機制
    session_start();
    //清除Session中的id變數，即登出
    unset($_SESSION["id"]);
    //顯示登出成功
    echo "登出成功....";
    //3秒後自動跳轉回登入頁面
    echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
?>
