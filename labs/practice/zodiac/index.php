<html>
    <head>
        <header>Chinese Zodiac Years</header>
    </head>
    <body>
        <?php
        function yearList($startYear,$endYear){
 
            for($i=$startYear; $i<=$endYear; $i++){
            echo "<li> Year ".$i ."</li>";
            if($i==1776){
                echo "<strong>USA INDEPENDENCE!</strong>";
            } else if($i%100==0){
                echo "<strong>HAPPY NEW CENTURY!</strong>";
            }
            }
        }
        $startYear = prompt($startYear)
        yearList($startYear,$endYear){;
        function addYears($sum){
            $sum=0;
            $i=1500;
            while($i<=$endYear){
                $sum++;
            }
            return $sum;
        }
        addYears();
        $zodiac = array("rat","ox","tiger","rabbit","dragon","snake","horse","goat","monkey","rooster","dog","pig");
        function displayImage($zSign){
            for($i=$startYear; $i<=$endYear; $i++){
                echo $zSign;
            }
        }
        displayImage();
        ?>
    </body>
</html>