<?php
// Abstaction is one of  the fundamental concepts of object oriented programming. it allows us to create a representation of complex real world entities and their behaviors in the form of classes and objects.
// Example 1: Shape Abstraction, example 2: Database Abstraction
// Abstract class representing a Shape
abstract class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function calculateArea();

    public function getName() {
        return $this->name;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($name, $length, $width) {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Concrete subclass representing a Circle
class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

// Create objects and use the abstraction
$rectangle = new Rectangle("Rectangle", 5, 10);
$circle = new Circle("Circle", 7);

echo $rectangle->getName() . " Area: " . $rectangle->calculateArea() . "\n";
echo $circle->getName() . " Area: " . $circle->calculateArea() . "\n";


// Abstract class representing a Database Connection
abstract class Database {
    protected $connection;

    public function connect($host, $username, $password, $database) {
        $this->connection = new mysqli($host, $username, $password, $database);
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    // Abstract methods for executing queries
    abstract public function query($sql);
    abstract public function fetch($result);
}

// Concrete subclass representing MySQL Database
class MySQLDatabase extends Database {
    public function query($sql) {
        return $this->connection->query($sql);
    }

    public function fetch($result) {
        return $result->fetch_assoc();
    }
}

// Concrete subclass representing PostgreSQL Database
class PostgresDatabase extends Database {
    public function query($sql) {
        return pg_query($this->connection, $sql);
    }

    public function fetch($result) {
        return pg_fetch_assoc($result);
    }
}

// Use the database abstraction
$mysqlDb = new MySQLDatabase();
$mysqlDb->connect("localhost", "username", "password", "database");
$result = $mysqlDb->query("SELECT * FROM users");
while ($row = $mysqlDb->fetch($result)) {
    echo "User ID: " . $row["id"] . ", Name: " . $row["name"] . "\n";
}

$postgresDb = new PostgresDatabase();
$postgresDb->connect("localhost", "username", "password", "database");
$result = $postgresDb->query("SELECT * FROM employees");
while ($row = $postgresDb->fetch($result)) {
    echo "Employee ID: " . $row["id"] . ", Name: " . $row["name"] . "\n";
}
?>