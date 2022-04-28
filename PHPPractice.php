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
    // echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";

    //this will work
    function myTest2() 
    {
        $x = 5; // local scope
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest2();
      
    // using x outside the function will generate an error
    echo "<p>Variable x outside function is: $x</p>";

    // using the global keyword in a function
    $x = 5;
    $y = 10;

    function myTest3() {
    global $x, $y;
    $y = $x + $y;
    }

    myTest3();
    echo $y; // outputs 15

    // using the static keyword to not delete variables after initial use
    function myTest4() 
    {
        static $x = 0;
        echo $x;
        $x++;
    }
      
    myTest4();
    myTest4();
    myTest4();
?>
