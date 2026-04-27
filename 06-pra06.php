<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 程式基礎練習</title>
</head>

<body>
   <H2>使用for迴圈來產生以下數列</H2> 

   
   <ul>
    <li>  1, 3, 5, 7, 9......n</li>
    <li>10,20,30,40,50,60......n</li>
    <li>3,5,7,11,13,17.......97</li>
   </ul>

   <H2>1, 3, 5, 7, 9......n</H2>
    <?php
    $n=100;
    for($i =1; $i <=$n; $i+=2){
        echo $i." ";
    }
    ?>
   <H2>10,20,30,40,50,60......n</H2>
   <?php 
   $n=100;
   for($i=10; $i<=$n; $i+=10){
    echo $i." ";
   }
   ?>

   <H2>3,5,7,11,13,17.......97</H2>

   <?PHP
    $n=97;
    for($i=3; $i<=$n; $i++){
     $is_ok= true;
     for($j=2;$j<$i;$j++){
        if($i%$j==0){
            $is_ok= false;
            break;
        }
     }
    
     if($is_ok){
        echo $i. ",";
     }
     }
   ?>
<br>


<HR>




<?php
echo "<table class='table1'>";

// 1. 先印出最上面一排標題 (1-9)
echo "<tr>";
for ($i = 1; $i <= 9; $i++) {
    echo "<td class='header'>$i</td>";
}
echo "<td class='header'>X</td>"; // 把交叉點移到最右邊
echo "</tr>";

// 2. 跑 9 列內容
for ($j = 1; $j <= 9; $j++) {
    echo "<tr>";
    
    // 先印出乘法答案
    for ($i = 1; $i <= 9; $i++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    
    // 最後一格才印出右邊的標題 (1-9)，並且塗成灰色
    echo "<td class='header'>$j</td>";
    
    echo "</tr>";
}

echo "</table>";
?>

</body>