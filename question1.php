<html>
<head></head>

<body>
<form action="question1.php" method = 'post'>
    <label>Choose an option:</label>
        <select name="starOption">
            <option value="half_stars">Half stars</option>
            <option value="full_stars">Full stars</option>  
        </select>
        Number of stars: <input type="number" name="starNumb" value=5><br>
        <input type='submit' value='submit'>
    </form>


    


<?php
    $optionArr = $_POST['starOption'];
    $star_number = $_POST['starNumb'];
    
    function starNumberDisplay($optionArr, $star_number){
        if ($optionArr == 'half_stars'){
            // echo "this is option one";
            $i = 1;
            while($i <= $star_number){
                    echo str_repeat("* ", $i).str_repeat(" ", $star_number-$i)."<br>";
                    $i+=1;
                }   
        }else if($optionArr == 'full_stars'){
            // echo "this is option two";
            $i = 1;
            $j = $star_number;
            while($i <= $star_number){
                echo str_repeat("* ", $i).str_repeat(" ", $star_number-$i)."<br>";
                if ($i == $star_number){
                    while($j >= 1){
                        echo str_repeat("* ", $j).str_repeat(" ", $star_number-$j)."<br>";
                        $j-=1;
                    }
                }
                $i+=1;
                
            }    
        }
    }

    starNumberDisplay($optionArr, $star_number);


    
?>
</body>


</html>