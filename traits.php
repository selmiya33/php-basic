<?php
trait Hello {
    public function sayHello() {
    echo 'Hello ';
    }
}
trait World {
    public function sayHello() {
    echo 'World';

    
    }
}


class MyHelloWorld {
use Hello, World{
    Hello::sayHello insteadof World;
    World::sayHello as World;
}
public function sayExclamationMark() {
    echo '!';
    }
}

$test = new MyHelloWorld;
$test->sayHello();
$test->World();

function yes(){
    echo "yes";
}