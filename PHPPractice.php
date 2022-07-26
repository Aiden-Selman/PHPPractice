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

    // If elseif else
    $t = date("H");

    if ($t < "10") 
    {
        echo "Have a good morning!";
    } 
    elseif ($t < "20") 
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

    // For each loop
    $colors = array("red", "green", "blue", "yellow");


    foreach ($colors as $value) 
    {
        echo "$value <br>";
    }

    // Break/continue loop
    for ($x = 0; $x < 10; $x++) 
    {
        if ($x == 4) {
          break;
        }
        echo "The number is: $x <br>";
    }

    // Functions
    // Function with no arguments
    function writeMsg() 
    {
        echo "Hello world!";
    }
      
    writeMsg(); // call the function

    // Function with an argument
    function familyName($fname) 
    {
        echo "$fname Refsnes.<br>";
    }
      
    familyName("Jani");
    familyName("Hege");
    familyName("Stale");
    familyName("Kai Jim");
    familyName("Borge");

    // Function with 2 arguments
    function familyName($fname, $year) 
    {
        echo "$fname Refsnes. Born in $year <br>";
    }
      
    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983");

    // Strict variable function example
    function addNumbers(int $a, int $b) 
    {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // Since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

    declare(strict_types=1); // Strict requirement

    function addNumbers(int $a, int $b) 
    {
        return $a + $b;
    }
    echo addNumbers(5, "5 days");
    // Since strict is enabled and "5 days" is not an integer, an error will be thrown

    // Value returning methods
    declare(strict_types=1); // Strict requirement
    function sum(int $x, int $y) 
    {
        $z = $x + $y;
        return $z;
    }

    echo "5 + 10 = " . sum(5, 10) . "<br>";
    echo "7 + 13 = " . sum(7, 13) . "<br>";
    echo "2 + 4 = " . sum(2, 4);

    // Passing in values via reference
    function add_five(&$value) 
    {
        $value += 5;
    }
      
    $num = 2;
    add_five($num);
    echo $num;

    // Arrays
    // Declaration
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

    // Looping through an array
    $cars = array("Volvo", "BMW", "Toyota");
    $arrlength = count($cars);

    for($x = 0; $x < $arrlength; $x++) 
    {
        echo $cars[$x];
        echo "<br>";
    }

    // Associative array
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    echo "Peter is " . $age['Peter'] . " years old.";

    // Looping through an associative array
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $x_value) 
    {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    // Two dimensional array
    // Declaration
    $cars = 
    array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        array("Land Rover",17,15)
    );

    // Looping through a two dimensional array
    for ($row = 0; $row < 4; $row++) 
    {
        echo "<p><b>Row number $row</b></p>";
        echo "<ul>";
        for ($col = 0; $col < 3; $col++) 
        {
          echo "<li>".$cars[$row][$col]."</li>";
        }
        echo "</ul>";
    }

    // Sorting arrays
    // Sort Method
    // The following example sorts the elements of the $cars array in ascending alphabetical order
    $cars = array("Volvo", "BMW", "Toyota");
    sort($cars);

    // rsort method
    // The following example sorts the elements of the $cars array in descending alphabetical order
    $cars = array("Volvo", "BMW", "Toyota");
    rsort($cars);
?>
