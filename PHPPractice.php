<?php

    // simple text output
    $txt = "PHP";
    echo "I love $txt";
    // numeric variables
    //$x = 5;
    $y = 4;
    echo $x + $y;
    // scope
    $x = 5; // global scope
    // this will not work
    function myTest()
    {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";

    //this will work
    function myTest2() 
    {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();
      
    // using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";
?>