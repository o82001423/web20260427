<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>尋找字元(使用while)</title>
</head>
<body>
    <H2>尋找字元(使用while)</H2>
    <ul>
        <li>給定一個字串句子</li>
        <li>給定一個單字或字母</li>
        <li>尋找相符的內容</li>
        <li>印出找到的單字或字母所在的句子中的位置</li>
    </ul>
    
    <?php
   
    // 1. 設定題目
    $str = "白宮晚宴槍響！川普撤離「腳軟踉蹌」 畫面全球放送 ，白宮晚宴槍響！川普撤離「腳軟踉蹌」 畫面全球放送";
    $starget = "腳軟";

    // 2. 設定初始值（避免出現 Warning）
    $pos = 0;   // 掃描器的起點
    $count = 0; // 用來計算掃描了幾次
    $flag = false; // 用來標記到底有沒有找到過
    
    // 目標的長度
    $targetLen = mb_strlen($starget);
    // 總句子的長度
    $strLen = mb_strlen($str);

    // 3. 開始掃描
    // 只要「目前位置」還沒超過「句子結尾」，就繼續跑
    while ($pos <= $strLen - $targetLen) {
        
        // 從目前的 $pos 開始，切出跟目標一樣長的字
        $tmp = mb_substr($str, $pos, $targetLen);
        
        if ($tmp == $starget) {
            echo "找到位子: " . ($pos + 1) . "<br>"; // 人類習慣從 1 開始數
            $flag = true;
        }
        
        $pos++;   // 指標往右移一格
        $count++; // 尋找次數加 1
    }

    // 4. 結果回報
    if (!$flag) {
        echo "沒有找到<br>";
    }
    echo "總共尋找了: " . $count . " 次<br>";

        ?>
</body>
</html>