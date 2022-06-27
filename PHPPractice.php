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

    // print is different from echo becuase print has a return value where echo does not
    print "<h2>PHP is Fun!</h2>";
    print "Hello world!<br>";
    print "I'm about to learn PHP!";
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!";

    /* Data types in php are
    - String $string = "Hello world!"; or $string = 'Hello world!';
    - Integer $integer = 1234;
    - Float/double $float = 10.358;
    - Boolean $true = true; $false = false;
    - Array $cars = array("Volvo", "BMW", "Toyota");
    - Object - declare a class ex. class Car{}
    - NULL - $NULL = null;
    - Resource - Advanced topic learn later
    */

    // String functions
    echo strlen("Hello World!"); // outputs 12
    echo str_word_count("Hello world!"); // outputs 2
    echo strrev("Hello world!"); // outputs !dlrow olleH
    echo strpos("Hello world!", "world"); // outputs 6
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

    // Number functions
    $x = 5985;
    var_dump(is_int($x)); // returns true
    $x = 59.85;
    var_dump(is_int($x)); // returns false

    $x = 10.365;
    var_dump(is_float($x)); // returns true

    // Math functions
    echo(pi()); // returns 3.1415926535898

    echo(min(0, 150, 30, 20, -8, -200));  // returns -200
    echo(max(0, 150, 30, 20, -8, -200));  // returns 150

    echo(abs(-6.7));  // returns 6.7

    echo(sqrt(64));  // returns 8

    echo(round(0.60));  // returns 1
    echo(round(0.49));  // returns 0

    echo(rand()); // retuns a random number
    echo(rand(10, 100)); // returns a random number between 10 and 100 (inclusive)

    // Constants
    // Case sensative
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING;

    // Case insensative
    define("GREETING", "Welcome to W3Schools.com!", true);
    echo greeting;

    // Constant Arrays
    define
    ("cars", ["Alfa Romeo","BMW","Toyota"]);
    echo cars[0];

    // If... else... else if...
    // If
    $t = date("H");
    if ($t < "20") 
    {
        echo "Have a good day!";
    }

    // If else
    $t = date("H");

    if ($t < "20") 
    {
        echo "Have a good day!";
    } 
    else 
    {
        echo "Have a good night!";
    }

    $t = date("H");

    if ($t < "10") 
    {
        echo "Have a good morning!";
    } elseif ($t < "20") 
    {
        echo "Have a good day!";
    } 
    else 
    {
    echo "Have a good night!";
    }

    // Switch statement
    $favcolor = "red";

    switch ($favcolor) 
    {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }

    // Loops
    // While loop
    $x = 1;

    while($x <= 5) 
    {
        echo "The number is: $x <br>";
        $x++;
    }

    // Do while loop
    do 
    {
        echo "The number is: $x <br>";
        $x++;
    } 
    while ($x <= 5);

    // For loop
    for ($x = 0; $x <= 10; $x++) 
    {
        echo "The number is: $x <br>";
    }
?>
