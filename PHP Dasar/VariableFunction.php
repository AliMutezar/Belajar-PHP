<?php

    // Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah value
    
    function foo() {
        echo "FOO" . PHP_EOL;
    }

    function bar() {
        echo "BAR" . PHP_EOL;
    }

    $functionName = "foo";
    $functionName();

    $functionName = "bar";
    $functionName();



    // Kita bisa juga mengirimkan function lain ke dalam argument di dalam suatu function
    function sayHello(string $name, $filter) {
        $finalName = $filter($name);
        echo "Hello $finalName" . PHP_EOL;
    }

    function sampleFunction(string $name) : string {
        return "sample $name";
    }

    sayHello("Ali", "sampleFunction");
    sayHello("Ali", "strtoupper");
    sayHello("Ali", "strtolower");