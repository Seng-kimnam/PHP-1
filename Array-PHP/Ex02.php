<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf-8"> 
    <title></title> 
</head> 
<body> 
<h1>Test Associative Array</h1> 
<?php   
    $words = [ 
                "apple" => "kind of friut", 
                "book" => "set of paper", 
                "car" => "for riding", 
                "door" => "for close and open" 
            ]; 
 
    foreach ($words as $key => $value) { 
        echo "<p>" . $key . " => " . $value . "</p>"; 
    } 
?> 
</body> 
</html>