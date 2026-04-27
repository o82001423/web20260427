<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> 程式基礎練習</title>
</head>

<body>
    <h2>閏年判斷 給定一個西元 年分 來段是否為認閏年</H2>
    <Ul>
        <li>地球對太陽的公轉一年的真實時間大約是365天5小時48分46秒,因此以365天定為一年的狀況下,每年會多出近六小時的時間,所以每隔四年設】</li>
        <li>公元年分除以4不可整除,為平年。</li>
        <li>公元年分除以4可整除但除以100不可整除,為閏年。</li>
        <li>公元年分除以100可整除但除以400不可整除,為平年。</li>
    </Ul>
    <?php 
        $year =  2000;
            $result = "";
        if($year % 4==0){
        if($year %100!= 0 or $year %400 ==0){
            $result ="閏年";
        }
        else{
            $result ="平年";
        }
        }else{
            $result ="平年";
        }
       
        echo "西元 $year 年是 $result";
    ?>
</body>

</body>