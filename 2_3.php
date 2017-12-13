<?php

class User {
    // Properties (attributes)
    public $name;
    // Methods (functions)
    public function sayHello(){
        return $this->name . ' says Hello' . '<br>';
    }
}

// Instantiate a user object from the user class

$user1 = new User();

$user1->name = 'Peter';

echo $user1->sayHello();

// Create new user

$user2 = new User();

$user2->name = 'Paul';

echo $user2->sayHello();

?>