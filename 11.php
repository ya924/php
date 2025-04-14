<?php
    error_reporting(0); // 關閉錯誤訊息
    session_start();    // 啟動session機制
    //檢查是否已登入
    if (!$_SESSION["id"]) {
        echo "請先登入";
        echo "<meta http-equiv=REFRESH content='3; url=2.login.html'>";
    } else {
        //顯示歡迎訊息與選單
        echo "歡迎, ".$_SESSION["id"].
             " [<a href=12.logout.php>登出</a>]".
             " [<a href=18.user.php>管理使用者</a>]".
             " [<a href=22.bulletin_add_form.php>新增佈告</a>]<br>";
        //資料庫連線
        $conn = mysqli_connect("db4free.net", "immust", "immustimmust", "immust");
        //查詢bulletin資料表
        $result = mysqli_query($conn, "SELECT * FROM bulletin");
        //顯示表格表頭
        echo "<table border=2>
                <tr>
                    <td>操作</td>
                    <td>佈告編號</td>
                    <td>佈告類別</td>
                    <td>標題</td>
                    <td>佈告內容</td>
                    <td>發佈時間</td>
                </tr>";
        //逐筆輸出內容
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>
                    <td>
                        <a href=26.bulletin_edit_form.php?bid={$row["bid"]}>修改</a> 
                        <a href=28.bulletin_delete.php?bid={$row["bid"]}>刪除</a>
                    </td>
                    <td>{$row["bid"]}</td>
                    <td>{$row["type"]}</td>
                    <td>{$row["title"]}</td>
                    <td>{$row["content"]}</td>
                    <td>{$row["time"]}</td>
                  </tr>";
        }
        echo "</table>";
    }
?>
