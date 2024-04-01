<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <title></title> 
</head> 
<body> 
<h1>Test Index Array</h1> 
<?php   
    $name = ["Brospov","Meakara","Dara"]; 
    //Display 
    /* 
    for($index=0;$index<count($name);$index++){ 
        echo($name[$index] . "&nbsp;&nbsp;"); 
    } 
    */ 
 
    foreach($name as $n){ 
        echo($n . "&nbsp;&nbsp;"); 
    } 
?> 
</body> 
</html> 
