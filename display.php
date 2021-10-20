<html>
<head></head>

<body>


<?php 
    
    function display($arrPara){
        for($i=0; $i<count($arrPara); $i++){
            if($i == count($arrPara)-1){
                echo $arrPara[$i].".";    
            }else{
                echo $arrPara[$i].", ";
            }
            
        }
    }
?>
</body>


</html>