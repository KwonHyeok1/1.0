<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
</head>
<body>
<h2>경로 우대 입장료</h2>
    <?php
        $age= 30; //나이: 30세
        $pay = 2500; //기본요금 : 2500원


        while($age < 100){
            $pay = 2500;
            $age++;
        if($age >= 65){ //나이가 65세 이상이면 참
            
            $pay = 0;

        } 
        echo"나이 : ".$age."세<br>";
        echo"요금 : ".$pay."원<br><br>";
    }
    ?>              
</body>
</html>