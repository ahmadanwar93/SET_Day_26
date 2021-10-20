<html>
<head></head>

<body>
<form action="question4.php" method = 'post'>
    <label>Choose an option:</label>
        <select name="questionOptions">
            <option value="name">What is your name?</option>
            <option value="hobby">What is your hobby?</option> 
            <option value="club">What is your favorite club?</option> 
        </select>
        <input type="text" name="inputText"><br>
        <input type='submit' value='submit'>
    </form>

<?php

function display(){
    $optionArr = $_POST['questionOptions'];
    $inputText = $_POST['inputText'];
    if (strlen($inputText)==0){
        echo " ";
    }else{    
        $output = $inputText;
        if ($optionArr == 'name'){
            // echo 'My name is '.$output;
            name($output);
        }else if ($optionArr == 'hobby'){
            // echo 'My hobby is '.$output;
            hobby($output);
        }else if ($optionArr == 'club'){
            // echo 'My favorite club is '.$output;
            club($output);
        }
    }    
}

function name($para){
    echo 'My name is '.$para;
}

function hobby($para){
    echo 'My hobby is '.$para;
}

function club($para){
    echo 'My favorite club is '.$para;
}
display();
?>    

</body>


</html>
