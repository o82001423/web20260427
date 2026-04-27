<!DOCTYPE html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式基礎練習</title>
</head>
<style>
    .table1{
        border-collapse: collapse;
        
        }
        .table1 td{
            border: 1px solid black;
            padding: 8px;
    }

</style>
<body>
    <H2>九九乘法表</H2>
    <img src="./99.png" alt="" style="width: 25%;">
    <br>

    
    <?php
    echo "<table class='table1'>";
    
    for($j=1; $j<=9;$j++){
        echo "<tr>";
        for ($i=1;$i<=9;$i++){
            echo  "<td>" . $i . "x $j=" . ($j*$i) . "</td>";
        }
        echo "</tr>";
    }
    
   echo "</table>";
   ?>

   <hr>
   <?php 
    echo "<table class='table1'>";
    
    for($j=1; $j<=9;$j++){
        echo "<tr>";
        for ($i=1;$i<=9;$i++){
            echo  "<td>" . ($j*$i) ."</td>";
        }
        echo "</tr>";
    }
    
   echo "</table>";
    ?>
    <br>
<hr>
<br>
   <?php 
    echo "<table class='table1'>";
    echo "<tr style='backgound-color:#eee'>";
    echo  "<td></td> ";
    echo  "<td>1</td>";
    echo  "<td>2</td>";
    echo  "<td>3</td>";
    echo  "<td>4</td>";
    echo  "<td>8</td>";
    echo  "<td>5</td>";
    echo  "<td>6</td>";
    echo  "<td>7</td>";
    echo  "<td>8</td>";
    echo  "<td>9</td>";
    echo "</tr>";
    
    for($j=1; $j<=9;$j++){
        echo "<tr>";
        for ($i=1;$i<=9;$i++){
            echo  "<td>" . ($j*$i) ."</td>";
        }
        echo "</tr>";
    }
    
   echo "</table>";
    ?>


<HR>

<style>
    .table1 { border-collapse: collapse; text-align: center; }
    .table1 td { border: 1px solid #000; padding: 10px; width: 40px; }
    /* 灰色標題 */
    .header { background-color: #d3d3d3; font-weight: bold; }
</style>

<?php
echo "<table class='table1'>";

// --- 第一步：印出「最上面」那一橫排 ---
echo "<tr>";
echo "<td class='header'> </td>"; // 左上角交叉點 (灰色)
for ($i = 1; $i <= 9; $i++) {
    echo "<td class='header'>$i</td>"; // 上方 1-9 (灰色)
}
echo "</tr>";

// --- 第二步：跑 9 列內容 ---
for ($j = 1; $j <= 9; $j++) {
    echo "<tr>";
    
    // 每列的第一格：左邊垂直標題 (灰色)
    echo "<td class='header'>$j</td>";
    
    // 剩下的格子：計算答案 (白色)
    for ($i = 1; $i <= 9; $i++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    
    echo "</tr>";
}

echo "</table>";
?>


</body>
</html>