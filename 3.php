<?php 
    // 檢查輸入的帳號是否為"john"，密碼是否為"john1234"
    if (($_POST["id"] == "john") && ($_POST["pwd"]=="john1234"))
        // 如果帳密都正確，顯示「登入成功」
        echo "登入成功";
    else
        // 否則顯示「登入失敗」
        echo "登入失敗";
?>
