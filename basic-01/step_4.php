<?php
    $name = "Raoul";
    $position = "Full Stack Web Developer";
    $github_url = "https://github.com/raoul-baddawi";


    echo "Hello, I'm $name, I'm a $position, please check my github link $github_url<br>";

    echo "Hello, I'm " . $name . ", I'm a " . $position . ", please check my github link " . $github_url . "<br>";

    echo 'Hello, Im ' . $name . ', Im a ' . $position . ', please check my github link ' . $github_url . '<br>';

    printf("Hello, I'm %s, I'm a %s, please check my github link %s<br>", $name, $position, $github_url);
?>