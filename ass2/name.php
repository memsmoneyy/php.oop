<?php
namespace MyNamespace;

class MyClass {
    public function sayHello() {
        echo "Hello from MyClass!";
    }
}

class AnotherClass {
    public function sayHello() {
        echo "Hello from AnotherClass!";
    }
}

$myObj = new MyClass();
$myObj->sayHello();

$anotherObj = new AnotherClass();
$anotherObj->sayHello();
?>

