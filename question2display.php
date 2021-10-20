<html>
<head></head>

<body>
    
    

    <?php
    $name='';
    $nric='';
    $mobile='';

    function name(){
        $name = $_POST['name'];
        return $name; 
    }

    function nric(){
        $nric = $_POST['nric'];
        return $nric;
    }
    
    function mobile(){
        $mobile = $_POST['mobile_number'];
        return $mobile;
    }
    
    function display($para){        
        echo $para.'<br>';
    }  

    if(isset($_POST['submitButtonCalled']) == TRUE){
        display(name());
        display(nric());
        display(mobile());
    }
    
    ?>
</body>
</html>