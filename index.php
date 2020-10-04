<?php 
    include('animal.php');
    //There are actions that all of the animals can do, but each animal does it in its own way.
    class Cat implements Animal {
        public function makeSound (){
            echo "ညောင် ညောင်";
        }
    }

    class Dog implements Animal {
        public function makeSound()
        {
            echo " Bark ";
        }
    }

    class Mouse implements Animal {
        public function makeSound()
        {
            echo " Squeak ";
        }
    }

    $cat = new Cat();
    $dog = new Dog();
    $mouse = new Mouse();
    $animals = array($cat, $dog, $mouse);
    foreach ($animals as $key => $value) {
        $value->makeSound();
        echo '<br>';
    }
?>