<html>
<head></head>

<body>


<?php 
    include 'display.php';

    function kevin(){
        $shop_items = ['item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8',];
        $kevin_items= [];
        array_push($kevin_items, $shop_items[rand(0,7)]);
        echo 'The Kevin item is ';
        display($kevin_items);
        // print_r ($kevin_items[0]);
        echo '<br>';
    }

    function arwin(){
            // Arwin items
        $shop_items = ['item1', 'item2', 'item3', 'item4', 'item5', 'item6', 'item7', 'item8',];
        $arwin_items= [];
        $randNumbArr = [0,1,2,3,4,5];
            
        for($i = 0; $i<3;$i++){
            $randNumb = rand(0,count($randNumbArr)-1);
            // 1 //3 // 5
            array_splice($randNumbArr,$randNumb,1);        
            // [0,2,3,4,5] // [0,2,4,5]
        }
        
        for($i = 0; $i<3;$i++){
            array_push($arwin_items, $shop_items[$randNumbArr[$i]]);        
        }

        
        // push another 3 items (can be duplicated)
        array_push($arwin_items, $shop_items[rand(0,7)]);
        array_push($arwin_items, $shop_items[rand(0,7)]);
        array_push($arwin_items, $shop_items[rand(0,7)]);

        echo 'The Arwin item is ';
        display($arwin_items);
        
    }
?>
</body>


</html>