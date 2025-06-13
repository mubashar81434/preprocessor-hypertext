<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background: black; color:white">
<?php

    // Sequence of characters
    $myName = "alpha";
    /*
    var_dump(strlen($myName));
    echo "<br>";
    $newStr = "This is hello world string"."$myName";
    echo $newStr;
    echo "<br>";
    var_dump(strpos($newStr,"is"));
    echo "<br>";
    echo str_word_count($newStr);
    */

    $newString = "this is new string";

    strtoupper($myName);
    strtolower($myName);
    // echo str_replace("new", "old", $newString);
    //var_dump("new", "old", $newString);
    //echo strrev($newString);
    // print_r( explode(" ",$myName));
    var_dump( explode(" ",$myName));

?>
    
</body>
</html>
