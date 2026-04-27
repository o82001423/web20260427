<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>畫星星</title>
</head>
<style>

    .boby{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<body>
    <H2></H2>
    <ul>
        <li>直角三角型</li>
        <li>到三角形型</li>
        <li>正三角型</li>
        <li>菱形</li>
        <li>矩形</li>
        <li>內含對角線的矩形</li>
    </ul>
    <img src="./03.png" alt="" style="width:300px;">

        <H3>直角三角型</H3>
        <?php 
        for($i=0;$i<5;$i++){
            for($j=0;$j<=$i;$j++){
                echo "*";
            }
            echo "<br>";
        }
         ?>

        <H3>到三角形型</H3>
        
        <?php 
        for($i=5;$i>0;$i--){
            for($j=1;$j<=$i;$j++){
                echo "*";
            }
            echo "<br>";
        }
         ?>

        <H3>正三角型</H3>
        <?php 
         for($i=0;$i<5;$i++){
            for($j=0;$j<(4-$i);$j++){
                echo " &nbsp;";
            }
            
            for($k=0;$k<(2*$i+1);$k++){
                echo "*";
            }
            echo "<br>";
            }
         ?>
        <H3>菱形</H3>

        <H3>矩形</H3>

        <H3>H角線的矩形</H3>

       
</body>
</html>